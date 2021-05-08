<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    const ANSWER_KEYS = [
        'test_1' => '2',
        'test_2' => '4',
        'test_3' => '2',
        'test_4' => '3',
        'test_5' => '2',
        'test_6' => '4',
        'test_7' => '3',
        'test_8' => '1',
        'test_9' => '3',
        'test_10' => '2',
    ];

    public function testsProcessing(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');

        $correct_answers = 0;
        foreach($request->all() as $key => $answer) {
            $is_test_param = substr($key, 0, 4) == "test";
            if($is_test_param && self::ANSWER_KEYS[$key] == $answer) {
                $correct_answers++;
            }
        }

        $status = $correct_answers >= 5;

        if($email) {
            Mail::to($email)->send(new FeedbackMail($name, $status, $correct_answers));
        }


        return view('results', [
            'name' => $name,
            'status' => $status,
            'correct_answers' => $correct_answers
        ]);
    }
}
