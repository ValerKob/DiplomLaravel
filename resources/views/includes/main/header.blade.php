<!--================ Start Header Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ route('main') }}">
                    <h1>SPA</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
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
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Обучение</a>
                            <ul class=я"dropdown-menu">
                                <li class="nav-item @if(request()->is('about')) active @endif">
                                    <a class="nav-link" href="{{ route('about') }}">Что такое SPA?</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('coursesSpa') }}">Разработка SPA</a></li>
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