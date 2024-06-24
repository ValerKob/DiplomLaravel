<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/logo2.svg') }}" type="image/x-icon">
      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/vendors/linericon/style.css" />
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="../assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="../assets/vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body class="scroll">
    <!--================ Start Header Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ route('main') }}">
                    <h1>Препроцессоры CSS</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end" style="list-style-type: none;
                            font-size: 14px;">
                        <li class="nav-item" style="display: flex; align-items: center;">
                            <img id="specialButton" style="cursor:pointer;" src="https://lidrekon.ru/images/special.png" alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" />
                        </li>
                        <style>
                            @media (max-width: 575px) {
                                #specialButton {
                                    background-color: #fff;
                                }
                            }

                        </style>
                        <li class="nav-item @if(request()->is('/')) active @endif">
                            <a class="nav-link" href="{{ route('main') }}">Главная</a>
                        </li>
                        <li class="nav-item @if(request()->is('interactive')) active @endif">
                            <a class="nav-link" href="{{ route('interactive') }}">Интерактиве</a>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Обучение</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item @if(request()->is('about')) active @endif">
                                    <a class="nav-link" href="{{ route('about') }}">Что такое Препроцессоры?</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('coursesSpa') }}">Разработка с помощью Препроцессоров CSS</a></li>
                                <!-- <li class="nav-item"><a class="nav-link" href="portfolio-details.html">В разработке</a></li> -->
                            </ul>
                        </li>
                        <li class="nav-item @if(request()->is('testSpa')) active @endif"><a class="nav-link" href="{{ route('testSpa') }}">Проверка знаний</a></li>
                        <!-- <li class="nav-item @if(request()->is('profile')) active @endif">
                            <a class="nav-link" href="{{ route('profile') }}">Кабинет</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html"></a>
                        </li>
                    </ul>
                    <style> 
                            .nav-item::before {
                                display: none;
                            }
                    </style>

                    <form class="d-flex" role="search">
                        <!-- @if(session('id'))
                        <a href="{{ route('deleteSession') }}" class="btn btn-outline-danger" type="submit">Выход</a>
                        @else
                        <a href="{{ route('signeup') }}" class="btn btn-outline-primary" type="submit">Регистрация</a>
                        <a href="{{ route('signein') }}" class="btn btn-outline-success" style="margin-left: 20px;" type="submit">Войти</a>
                        @endif -->
                    </form>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Area =================-->
<main>
    <div class="col-12">
        <div class="game-wrap">
            <!-- блок с игрой -->
            <div class="game"></div>
        </div>
    </div>
    <!-- модальное окно, которое появится после сбора всех пар -->
    <div class="modal fade" id="result" tabindex="-1" data-bs-keyboard="false">
        <div class="modal-dialog win-modal">
            <div class="modal-content py-5 h-100 w-100">
                <h2 class="text-center">Победа!</h2>
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal" class="hero-btn restart inmodal-btn mb-3">Попробовать ещё раз</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="tutorial" tabindex="-1" data-bs-keyboard="false">
        <div class="modal-dialog mark-modal">
            <div class="modal-content h-100 w-100">
                <div class="modal-body col-12">
                    <p id="inmodal-text" class="text-center mt-3">Это страница, где вы можете опробовать интерактивную мини-игру.</p>
                    <p id="inmodal-text" class="text-center mt-3">Найдите все пары изученных классов</p>
                </div>
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal" class="hero-btn inmodal-btn mb-3">Ок</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var myModal = new bootstrap.Modal(document.getElementById('tutorial'));
            myModal.show();
        });
    </script>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>


    <script>

        (function(){

            //  объявляем объект, внутри которого будет происходить основная механика игры
            var Memory = {

                // создаём карточку
                init: function(cards){
                    //  получаем доступ к классам
                    this.$game = $(".game");
                    this.$modal = $(".game-modal");
                    this.$overlay = $(".game-modal-overlay");
                    this.$restartButton = $("button.restart");
                    // собираем из карточек массив — игровое поле
                    this.cardsArray = $.merge(cards, cards);
                    // перемешиваем карточки
                    this.shuffleCards(this.cardsArray);
                    // и раскладываем их
                    this.setup();
                },

                // как перемешиваются карточки
                shuffleCards: function(cardsArray){
                    // используем встроенный метод shuffle
                    this.$cards = $(this.shuffle(this.cardsArray));
                },

                // раскладываем карты
                setup: function(){
                    // подготавливаем код с карточками на страницу
                    this.html = this.buildHTML();
                    // добавляем код в блок с игрой
                    this.$game.html(this.html);
                    // получаем доступ к сформированным карточкам
                    this.$memoryCards = $(".game-card");
                    // на старте мы не ждём переворота второй карточки
                    this.paused = false;
                    // на старте у нас нет перевёрнутой первой карточки
                    this.guess = null;
                    // добавляем элементам на странице реакции на нажатия
                    this.binding();
                },

                // как элементы будут реагировать на нажатия
                binding: function(){
                    // обрабатываем нажатие на карточку
                    this.$memoryCards.on("click", this.cardClicked);
                    // и нажатие на кнопку перезапуска игры
                    this.$restartButton.on("click", $.proxy(this.reset, this));
                },

                // что происходит при нажатии на карточку
                cardClicked: function(){
                    // получаем текущее состояние родительской переменной
                    var _ = Memory;
                    // и получаем доступ к карточке, на которую нажали
                    var $card = $(this);
                    // если карточка уже не перевёрнута и мы не нажимаем на ту же самую карточку второй раз подряд
                    if(!_.paused && !$card.find(".inside").hasClass("matched") && !$card.find(".inside").hasClass("picked")){
                        // переворачиваем её
                        $card.find(".inside").addClass("picked");
                        // если мы перевернули первую карточку
                        if(!_.guess){
                            // то пока просто запоминаем её
                            _.guess = $(this).attr("data-id");
                            // если мы перевернули вторую и она совпадает с первой
                        } else if(_.guess == $(this).attr("data-id") && !$(this).hasClass("picked")){
                            // оставляем обе на поле перевёрнутыми и показываем анимацию совпадения
                            $(".picked").addClass("matched");
                            // обнуляем первую карточку
                            _.guess = null;
                            // если вторая не совпадает с первой
                        } else {
                            // обнуляем первую карточку
                            _.guess = null;
                            // не ждём переворота второй карточки
                            _.paused = true;
                            // ждём полсекунды и переворачиваем всё обратно
                            setTimeout(function(){
                                $(".picked").removeClass("picked");
                                Memory.paused = false;
                            }, 600);
                        }
                        // если мы перевернули все карточки
                        if($(".matched").length == $(".game-card").length){
                            // показываем победное сообщение
                            _.win();
                        }
                    }
                },

                // показываем победное сообщение
                win: function(){
                    // не ждём переворота карточек
                    this.paused = true;
                    // плавно показываем модальное окно с предложением сыграть ещё
                    var myModal = new bootstrap.Modal(document.getElementById('result'));
                    myModal.show();
                },

                // перезапуск игры
                reset: function(){
                    // прячем модальное окно с поздравлением
                    // перемешиваем карточки
                    this.shuffleCards(this.cardsArray);
                    // раскладываем их на поле
                    this.setup();
                    // показываем игровое поле
                    this.$game.show("slow");
                },

                shuffle: function(array){
                    var counter = array.length, temp, index;
                    while (counter > 0) {
                        index = Math.floor(Math.random() * counter);
                        counter--;
                        temp = array[counter];
                        array[counter] = array[index];
                        array[index] = temp;
                    }
                    return array;
                },

                // код, как добавляются карточки на страницу
                buildHTML: function(){
                    // сюда будем складывать HTML-код
                    var frag = '';
                    // перебираем все карточки подряд
                    this.$cards.each(function(k, v){
                        // добавляем HTML-код для очередной карточки
                        frag += '<div class="game-card" data-id="'+ v.id +'"><div class="inside">\
				<div class="front"><img src="'+ v.img +'"\
				alt="'+ v.name +'" /></div>\
				<div class="back"><img src="images/game/card-bg-img.png"/></div></div>\
				</div>';
                    });
                    // возвращаем собранный код
                    return frag;
                }
            };

            // карточки
            var cards = [
                {
                    name: "bootstrap_logo",
                    img: "images/game/1.png",
                    id: 1,
                },
                {
                    name: "3d_logo",
                    img: "images/game/2.png",
                    id: 2
                },
                {
                    name: "primary",
                    img: "images/game/3.png",
                    id: 3
                },
                {
                    name: "success",
                    img: "images/game/4.png",
                    id: 4
                },
                {
                    name: "danger",
                    img: "images/game/5.png",
                    id: 5
                },
                {
                    name: "warning",
                    img: "images/game/6.png",
                    id: 6
                },
                {
                    name: "info",
                    img: "images/game/7.png",
                    id: 7
                },
                {
                    name: "bootstrap-3",
                    img: "images/game/8.png",
                    id: 8
                },
                {
                    name: "vs-code",
                    img: "images/game/9.png",
                    id: 9
                },
                {
                    name: "figma",
                    img: "images/game/10.png",
                    id: 10
                },
                {
                    name: "xd",
                    img: "images/game/11.png",
                    id: 11
                },
                {
                    name: "github",
                    img: "images/game/12.png",
                    id: 12
                },
            ];

            // запускаем игру
            Memory.init(cards);

        })();
    </script>
</main>


<script>
    function copyFunc(id) {
        if (navigator.clipboard) {
            let copyText = document.getElementById(id).innerText
            navigator.clipboard.writeText(copyText).then(function() {
                new Noty({
                    type: 'success',
                    timeout: 1000,
                    text: 'Код скопирован.',
                }).show();
            }, function(err) {
                new Noty({
                    type: 'error',
                    timeout: 10000,
                    text: 'Ошибка копирования. Возможно нет прав доступа к буферу обмена. ',
                }).show();
            });
        } else {
            new Noty({
                type: 'warning',
                timeout: 10000,
                text: 'У вас заблокирован доступ к буферу обмена...',
            }).show();
        }
    }
</script>

<script src="{{ asset('js/highlight.min.js') }}"></script>
<script>hljs.highlightAll();</script>
<script src="{{ asset('js/noty.min.js') }}"></script>
<script src="{{ asset('js/theme-switcher.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
