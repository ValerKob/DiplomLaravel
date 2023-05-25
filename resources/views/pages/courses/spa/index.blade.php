@extends('layouts.main')

@section('title', 'Home')

@section('content')
<section class="about_area section_gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about_img">
                    <img class="" src="../assets/img/about-us.png" alt="" />
                </div>
            </div>

            <div class="offset-lg-1 col-lg-5">
                <div class="main_title text-left">
                    <h2>
                        Разработка SPA<br />
                    </h2>
                    <style>
                        p {
                            text-align: justify;
                            font-size: 20px;
                        }
                    </style>
                    <!-- <p>
                Я FullStack Web-разработчик, опыт программирования
                в Web-технологиях на 2023 год, уже более 5 лет.
            </p> -->
                    <p>
                        Разработать информационную систему
                        для кафе - кондитерской, пользователями которой будут являться сотрудники кафе. <br>
                        Основная задача системы - учёт и управление заказами, а также формирование отчётной документации. <br>
                        Файл с заданием, а также дополнительные материалы можно загрузить, нажав на кнопку "Скачать".
                        <!-- Разрабатывать SPA, будем,
                        на примере 3 задания для чемпионата молодые проффесионалы!!!
                        В электронном пособий будет подробно рассказано и показано как можно,
                        решать задания для Rest API и как азработать SPA, так же по ссылочке можно скачать задание,
                        и проходить урок за уроком!!! -->
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
                        <a href="{{ route('oneMainpagesSpa') }}">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <h1>3</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="{{ route('twoMainpagesSpa') }}">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <h1>4</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="{{ route('threepagesSpa') }}">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <h1>5</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="{{ route('fourpagesSpa') }}">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <h1>6</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="{{ route('fivepagesSpa') }}">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <h1>7</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="{{ route('sixpagesSpa') }}">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <h1>8</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <a href="{{ route('sevenpagesSpa') }}">
                            <div class="single-brand-item d-table">
                                <div class="d-table-cell text-center">
                                    <h1>9</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @media (max-width: 1199px) {
        .brand_area {
            padding-bottom: 160px;
        }
    }
</style>
<!--================ End Brand Area =================-->
@endsection