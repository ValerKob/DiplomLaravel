@extends('layouts.main')

@section('title', 'Home')

@section('content')
<section class="about_area section_gap" style="padding-top: 150px;">
    <div class="container">
        <div class="row justify-content-start align-items-center">
            <div class="col-lg-5">
                <div class="about_img">
                    <img class="" src="../assets/img/about-us.png" alt="" />
                </div>
            </div>

            <div class="offset-lg-1 col-lg-5">
                <div class="main_title text-left">
                    <h2>
                        Как будет<br />
                        проходить<br />
                        курс
                    </h2>
                    <!-- <p>
                Я FullStack Web-разработчик, опыт программирования
                в Web-технологиях на 2023 год, уже более 5 лет.
            </p> -->
                    <p>
                        Этот курс или дневник по SPA, будет проходить,
                        на примере 3 задания из чемпионата WorldSkilsRussia!!!
                        В этом курсе будет подробно рассказано и показано как можно,
                        решать задания, так же по ссылочке вы можете сказать это задание,
                        и проходить в месте со мной!!!
                    </p>
                    <a class="primary_btn" href="../assets/files/Zadanie_SPA_zip.zip" download><span>Скачать</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<h1 class="text-center mb-5">Уроки:</h1>
<!--================ Srart Brand Area =================-->
<section class="brand_area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="{{ route('onepagesSpa') }}">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <h1>1</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="{{ route('twopagesSpa') }}">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <h1>2</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="{{ route('threepagesSpa') }}">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <h1>3</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Brand Area =================-->
@endsection