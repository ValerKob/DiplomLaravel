<!--================ Start Header Area =================-->
{{-- <header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand logo_h" href="{{ route('main') }}">
                    <h1>Препроцессоры CSS</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
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
                            <a class="nav-link" href="{{ route('interactive') }}">Интерактив</a>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Обучение</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item @if(request()->is('about')) active @endif">
                                    <a class="nav-link" href="{{ route('about') }}">Что такое Препроцессоры?</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('coursesSpa') }}">Разработка с помощью Препроцессоров CSS</a></li>
                            </ul>
                        </li>
                        <li class="nav-item @if(request()->is('testSpa')) active @endif"><a class="nav-link" href="{{ route('testSpa') }}">Проверка знаний</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header> --}}
<!--================ End Header Area =================-->