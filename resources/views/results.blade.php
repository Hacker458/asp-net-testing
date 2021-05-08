@extends('template')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-5">
        <h2 class="alert {{ $status ? 'alert-success' : 'alert-danger' }}">
            {{ $name }},
            @if($status)
                мы вас поздравляем!!!
            @else
                попробуйте снова
            @endif
        </h2>
        <h2 class="alert {{ $status ? 'alert-success' : 'alert-danger' }}">
            Вы правильно ответили на {{ $correct_answers }} из 10 вопросов
        </h2>
    </div>
    <div class="row">
        <div class="col-lg-12 mt-5 text-center">
            <a class="btn btn-primary" href="{{route('home')}}">Пройти ещё раз</a>
        </div>
    </div>
</div>
@endsection

