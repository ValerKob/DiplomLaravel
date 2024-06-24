@extends('layouts.main')

@section('title', 'Home')

@section('content')
<style>
    html {
        scroll-behavior: smooth;
    }
</style>
<!--================ Start Home Banner Area =================-->
<section class="home_banner_area" style="
    z-index: 1;
    background-position: center;
    background-size: cover;">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="banner_content">
                        <h2 class="text-uppercase" style="font-weight: 600; margin-right: -40px">Электронное пособие</h2>
                        </h2>
                        <h1 style="" class="text-uppercase">Основы <br>изучения <br>препроцессоров CSS</h2>
                            <div class="d-flex align-items-center">
                                <!-- <a class="primary_btn" href="#about"><span>Подробнее</span></a> -->
                                <!-- <a class="primary_btn tr-bg" href="../assets/files/SPA.docx" download=""><span>Скачать</span></a> -->
                            </div>
                                <li class="primary_btn @if(request()->is('interactive')) active @endif">
                                    <a class="nav-link" href="{{ route('interactive') }}">Интерактиве</a>
                                </li>
                                <li class="primary_btn submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Обучение</a>
                                    <ul class="dropdown-menu">
                                        <li class="primary_btn @if(request()->is('about')) active @endif">
                                            <a class="nav-link" href="{{ route('about') }}">Что такое Препроцессоры?</a>
                                        </li>
                                        <li class="primary_btn"><a class="nav-link" href="{{ route('coursesSpa') }}">Разработка с помощью Препроцессоров CSS</a></li>
                                        <!-- <li class="primary_btn"><a class="nav-link" href="portfolio-details.html">В разработке</a></li> -->
                                    </ul>
                                </li>
                                <li class="primary_btn @if(request()->is('testSpa')) active @endif"><a class="nav-link" href="{{ route('testSpa') }}">Проверка знаний</a></li>
                            <style>
                                .primary_btn {
                                   
                                    widows: auto;
                                    max-width: 220px;
                                }

                                .primary_btn:hover > a {
                                    color: black;
                                }

                                .primary_btn > a {
                                     color: white;
                                }
                            </style>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home_right_img">
                        <img class="" src="../assets/img/bannerCopy/home-right.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @media (min-width: 590px) {
        .home_banner_area .banner_inner .banner_content h1 {
            font-size: 45px;
            line-height: 50px;
        }
    }

    @media (max-width: 590px) {
        .home_banner_area .banner_inner .banner_content h1 {
            font-size: 25px;
        }
    }
</style>
<!--================ End Home Banner Area =================-->

<!--================ Start About Us Area =================-->
@endsection