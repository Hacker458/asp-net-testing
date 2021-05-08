<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $correct_answers = 0;
        foreach($request->all() as $key => $answer) {
            if($key[0] != '_') {
                if(self::ANSWER_KEYS[$key] && self::ANSWER_KEYS[$key] == $answer) {
                    $correct_answers++;
                }
            }
        }

        return view('results', [
            'correct_answers' => $correct_answers
        ]);
    }
}
