@extends('template')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-5">
        <h2 class="alert {{ $correct_answers >= 5 ? 'alert-success' : 'alert-danger' }}">
            Вы правильно ответели на {{ $correct_answers }} из 10
        </h2>
    </div>
</div>
@endsection

