@extends('layouts.master')

@section('title')
Главная
@endsection
@section('styleFile')
home.css
@endsection

@section('content')
<div>
    <div class="centerContent" style="margin-top: 70px">
        <!--<h1>Печать фотографий высокого качества не выходя из дома</h1>-->
        <h1>
            <span>On-line печать</span> фотографий, фотокниг, открыток и календарей
            <small>Напечатай свои фотографии не выходя из дома с помощью нашего on-line редактора(?)</small>
        </h1>
        <div>


        </div>
    </div>

    <div class="ProductList"  style="margin-top: 15px">
        <div class="centerContent">
        <ul style="list-style-type: none;" id="ProductSelector">
            <li>
                <a href="{{{ URL::to('photobook')}}}">
                    <div>
                        <h2>Фотокнига</h2>
                        <img class="menuImg" src="../public/images/Book.png">
                    </div>
                </a>
            </li>
            <li>
                <div>
                    <h2>Фотографии</h2>
                    <img class="menuImg" src="../public/images/Photo.png">
                </div>
            </li>
            <li>
                <div>
                    <h2>Открытка</h2>
                    <img class="menuImg" src="../public/images/PostCard.png">
                </div>
            </li>
            <li>
                <div>
                    <h2 style="margin-bottom: 5px !IMPORTANT;">Настенный <br/>календарь</h2>
                    <img class="menuImg" src="../public/images/WallCalendar.png">
                </div>
            </li>
            <li>
                <div>
                    <h2>Настольный <br/>календарь</h2>
                    <img style="height: 80px; margin-top: 20px;" class="menuImg" src="../public/images/TableCalendar.png">
                </div>
            </li>
        </ul>
        </div>
    </div>
    <div class="centerContent">
        <div id="description">
            <h1>
                <p>
                    Тут текст, который меняется в зависимости от выбранного продукта
                    <br/>
                    И будет описывать какой он крутой
                </p>
            </h1>
        </div>
        <div id="orderBlock">
            <input type="button" value="Заказать">
        </div>
    <div class="centerContent">


    <div class="centerContent">
        <div class="BottomMenu MenuHeader">
            <a class="bottommenu">О нас</a>
            <a class="bottommenu">Обратная связь</a>

        </div>
    </div>
</div>
@endsection