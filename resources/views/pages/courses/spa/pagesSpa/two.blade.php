@extends('layouts.main')

@section('title', 'Home')

@section('content')
<!--================ Start Banner Area =================-->
<section class="banner_area" style="
  position: relative;
  z-index: 1;
  min-height: 485px;">
    <div class="banner_inner d-flex align-items-center" style="
      position: relative;
    overflow: hidden;
    width: 100%;
    min-height: 485px;
    background: url(../assets/img/bannerCopy/common-banner.png) no-repeat right bottom;
    background-size: 90% 85%;
    width: 98%;
    z-index: 1;">
        <div class="container">
            <div class="banner_content text-center">
                <h2>2 Урок Начало работы</h2>
            </div>
        </div>
    </div>
</section>
<!--================ End Banner Area =================-->

<!--================Start Portfolio Details Area =================-->
<section class="portfolio_details_area section_gap">
    <div class="container">
        <div class="portfolio_details_inner">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left_img">
                        <img class="img-fluid" src="../assets/img/tasks/tasks1.png" alt="">
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30">
                        <h4 class="text-uppercase">Установка</h4>
                        <p>
                            Откроите вашу IDE, это может быть как VSC или VS и другие!
                        <p>
                            После открытитя, создайте папку в которой будете рабоать например так как показано на рисунке.
                        </p>
                    </div>
                </div>
            </div>
            <p style="text-indent: 20px;">
                Основное преимущество использования SPA заключается в том, что оно обеспечивает более плавный и оперативный пользовательский интерфейс по сравнению с традиционными веб-приложениями. Поскольку приложению не нужно перезагружать всю страницу для каждого взаимодействия с пользователем, SPA может больше походить на родное приложение с более быстрым временем отклика и более плавными переходами между страницами.
            </p>
            <p style="text-indent: 20px;">
                Однако создание SPA может быть более сложным, чем создание традиционного веб-приложения, поскольку разработчикам необходимо обрабатывать маршрутизацию на стороне клиента, управление состоянием и другую логику приложения, которая обычно обрабатывается сервером в традиционном веб-приложении. Кроме того, для SPA может потребоваться дополнительная установка и настройка для обработки поисковой оптимизации (SEO) и других функций на стороне сервера.
            </p>
            <div class="row">
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30">
                        <p>
                            C помощью библиотек управления состоянием, таких как Redux, Vuex и NgRx. Эти библиотеки обеспечивают механизм управления состоянием приложения и связывают состояния различных компонентов между собой.
                        </p>
                        <p>
                            В целом, SPA - это современный подход к созданию веб-приложений, который позволяет обеспечить более быстрый и плавный пользовательский опыт. Создание SPA-приложения требует знания JavaScript-фрейм
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="left_img">
                        <img class="img-fluid" src="../assets/img/portfolio/p1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Portfolio Details Area =================-->
<h1 class="text-center mb-5">Дальше -></h1>
<h5 class="text-center mb-5">Урок №:</h5>
<!--================ Srart Brand Area =================-->
<section class="brand_area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <a href="{{ route('threepagesSpa') }}">
                <div class="single-brand-item d-table">
                    <div class="d-table-cell text-center">
                        <h1>3</h1>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!--================ End Brand Area =================-->
@endsection