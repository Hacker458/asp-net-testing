@extends('template')

@section('content')
<form action="{{ route('testsProcessing') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2>Тесты по теме ASP.NET</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <label for="name">Ваше Имя</label>
            <input class="form-control w-50" type="text" id="name" name="name" required>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <label for="email">Email (опционально) </label>
            <input class="form-control w-50" type="email" id="email" name="email">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex">
                <div class="my-3">
                    <h4 class="mb-3">1. Где обычно хранится идентификатор сессии пользователя?</h4>
                    <div class="custom-control custom-radio">
                        <input id="credit" name="test_1" type="radio" class="custom-control-input"
                               value="1" required="">
                        <label class="custom-control-label" for="credit">В local storage</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="test_1" type="radio" class="custom-control-input" value="2"  required="">
                        <label class="custom-control-label" for="debit">В session</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_1_cookie" name="test_1" type="radio" class="custom-control-input"
                               required="" value="3">
                        <label class="custom-control-label" for="test_1_cookie">В cookies</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test" name="test_1" type="radio" class="custom-control-input" value="4"  required="">
                        <label class="custom-control-label" for="test">В кеше браузера</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex">
                <div class="my-3">
                    <h4 class="mb-3">2. Entity Framework это</h4>
                    <div class="custom-control custom-radio">
                        <input id="test_2_1" name="test_2" type="radio" class="custom-control-input"
                               value="1" required="">
                        <label class="custom-control-label" for="test_2_1">платформа для разработки
                            веб-приложений</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_2_2" name="test_2" type="radio" class="custom-control-input" value="2" required="">
                        <label class="custom-control-label" for="test_2_2">схема разделения данных приложения,
                            пользовательского интерфейса и управляющей логики</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_2_3" name="test_2" type="radio" class="custom-control-input" value="3"
                               required="">
                        <label class="custom-control-label" for="test_2_3">фреймворк для создания веб-приложений,
                            который реализует шаблон MVC</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_2_4" name="test_2" type="radio" class="custom-control-input" value="4" required="">
                        <label class="custom-control-label" for="test_2_4">
                            ORM фреймворк для доступа к данным, который позволяет взаимодействовать с
                            СУБД с помощью сущностей
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex">
                <div class="my-3">
                    <h4 class="mb-3">3. Выберите правильное определение контроллера</h4>
                    <div class="custom-control custom-radio">
                        <input id="test_3_1" name="test_3" type="radio" class="custom-control-input"
                               required="" value="1">
                        <label class="custom-control-label" for="test_3_1">Предоставляет данные и реагирует на команды,
                            изменяя своё состояние</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_3_2" name="test_3" type="radio" class="custom-control-input" value="2" required="">
                        <label class="custom-control-label" for="test_3_2">
                            Обеспечивает «связь» между пользователем и системой. Контролирует и направляет данные от
                            пользователя к системе и наоборот.
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_3_3" name="test_3" type="radio" class="custom-control-input" value="3"
                               required="">
                        <label class="custom-control-label" for="test_3_3">Отвечает за отображение данных модели
                            пользователю, реагируя на изменения модели</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_3_4" name="test_3" type="radio" class="custom-control-input" value="4" required="">
                        <label class="custom-control-label" for="test_3_4">
                            Нет правильного ответа
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex">
                <div class="my-3">
                    <h4 class="mb-3">4. С помощью какого объекта можно узнать значения и свойства HTTP запроса?</h4>
                    <div class="custom-control custom-radio">
                        <input id="test_4_1" name="test_4" type="radio" class="custom-control-input"
                               required="" value="1">
                        <label class="custom-control-label" for="test_4_1">
                            User
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_4_2" name="test_4" type="radio" class="custom-control-input" required="" value="2">
                        <label class="custom-control-label" for="test_4_2">
                            Response
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_4_3" name="test_4" type="radio" class="custom-control-input"
                               value="3" required="">
                        <label class="custom-control-label" for="test_4_3">
                            Request
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_4_4" name="test_4" type="radio" class="custom-control-input"  value="4" required="">
                        <label class="custom-control-label" for="test_4_4">
                            Session
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex">
                <div class="my-3">
                    <h4 class="mb-3">5. Что такое aspx файл? </h4>
                    <div class="custom-control custom-radio">
                        <input id="test_5_1" name="test_5" type="radio" class="custom-control-input"
                               required="" value="1">
                        <label class="custom-control-label" for="test_5_1">
                            это файл, который отвечает за исполнение определенных инструкций JavaScript в рамках web-страниц.
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_5_2" name="test_5" type="radio" class="custom-control-input" required="" value="2">
                        <label class="custom-control-label" for="test_5_2">
                            это расширенный файл страницы Active Server
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_5_3" name="test_5" type="radio" class="custom-control-input"
                               value="3" required="">
                        <label class="custom-control-label" for="test_5_3">
                            это файл на языке разметки гипертекста
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_5_4" name="test_5" type="radio" class="custom-control-input"  value="4" required="">
                        <label class="custom-control-label" for="test_5_4">
                            это расширяемый язык разметки, который использует пользовательские теги для описания структуры и других функций документа.
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex">
                <div class="my-3">
                    <h4 class="mb-3">6. Для чего нужны контролы (controls)? </h4>
                    <div class="custom-control custom-radio">
                        <input id="test_6_1" name="test_6" type="radio" class="custom-control-input"
                               required="" value="1">
                        <label class="custom-control-label" for="test_6_1">
                            Для создания серверных элементов управления
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_6_2" name="test_6" type="radio" class="custom-control-input" required="" value="2">
                        <label class="custom-control-label" for="test_6_2">
                            Для обработки веб форм
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_6_3" name="test_6" type="radio" class="custom-control-input"
                               value="3" required="">
                        <label class="custom-control-label" for="test_6_3">
                            Для получения входных данных пользователя и дальнейшей их обработки
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_6_4" name="test_6" type="radio" class="custom-control-input"  value="4" required="">
                        <label class="custom-control-label" for="test_6_4">
                            Для создания пользовательских элементов управления
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex">
                <div class="my-3">
                    <h4 class="mb-3">7. Какого провайдера аутентификации НЕ существует в ASP.NET? </h4>
                    <div class="custom-control custom-radio">
                        <input id="test_7_1" name="test_7" type="radio" class="custom-control-input"
                               required="" value="1">
                        <label class="custom-control-label" for="test_7_1">
                            На основе форм
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_7_2" name="test_7" type="radio" class="custom-control-input" required="" value="2">
                        <label class="custom-control-label" for="test_7_2">
                            На основе Passport
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_7_3" name="test_7" type="radio" class="custom-control-input"
                               value="3" required="">
                        <label class="custom-control-label" for="test_7_3">
                            На основе Razor Pages
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_7_4" name="test_7" type="radio" class="custom-control-input"  value="4" required="">
                        <label class="custom-control-label" for="test_7_4">
                            На основе Windows
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex">
                <div class="my-3">
                    <h4 class="mb-3">8. К классам подключенного уровня в ADO.NET относятся </h4>
                    <div class="custom-control custom-radio">
                        <input id="test_8_1" name="test_8" type="radio" class="custom-control-input"
                               required="" value="1">
                        <label class="custom-control-label" for="test_8_1">
                            Connection, Command, DataReader, DataAdapter
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_8_2" name="test_8" type="radio" class="custom-control-input" required="" value="2">
                        <label class="custom-control-label" for="test_8_2">
                            DataSet, DataTable, DataRow
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_8_3" name="test_8" type="radio" class="custom-control-input"
                               value="3" required="">
                        <label class="custom-control-label" for="test_8_3">
                            Connection, DataTable, DataReader, DataSet
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_8_4" name="test_8" type="radio" class="custom-control-input"  value="4" required="">
                        <label class="custom-control-label" for="test_8_4">
                            DataSet, DataTable, DataRow, DataAdapter, DataReader
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex">
                <div class="my-3">
                    <h4 class="mb-3">9. Сколько существует свойств транзакций? </h4>
                    <div class="custom-control custom-radio">
                        <input id="test_9_1" name="test_9" type="radio" class="custom-control-input"
                               required="" value="1">
                        <label class="custom-control-label" for="test_9_1">
                            5
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_9_2" name="test_9" type="radio" class="custom-control-input" required="" value="2">
                        <label class="custom-control-label" for="test_9_2">
                            6
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_9_3" name="test_9" type="radio" class="custom-control-input"
                               value="3" required="">
                        <label class="custom-control-label" for="test_9_3">
                            4
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_9_4" name="test_9" type="radio" class="custom-control-input"  value="4" required="">
                        <label class="custom-control-label" for="test_9_4">
                            3
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex">
                <div class="my-3">
                    <h4 class="mb-3">10. Когда истекает время жизни элементов состояния приложения? </h4>
                    <div class="custom-control custom-radio">
                        <input id="test_10_1" name="test_10" type="radio" class="custom-control-input"
                               required="" value="1">
                        <label class="custom-control-label" for="test_10_1">
                            При закрытии браузера
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_10_2" name="test_10" type="radio" class="custom-control-input" required="" value="2">
                        <label class="custom-control-label" for="test_10_2">
                            Никогда
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_10_3" name="test_10" type="radio" class="custom-control-input"
                               value="3" required="">
                        <label class="custom-control-label" for="test_10_3">
                            Через 20 мин
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="test_10_4" name="test_10" type="radio" class="custom-control-input"  value="4" required="">
                        <label class="custom-control-label" for="test_10_4">
                            Через 1 час
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-center mb-5">
            <button class="btn btn-primary">Отправить</button>
        </div>
    </div>
</form>
@endsection
