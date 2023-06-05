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
                        <h1 style="" class="text-uppercase">Создание<br> одностраничного <br> веб-приложения</h2>
                            <div class="d-flex align-items-center">
                                <!-- <a class="primary_btn" href="#about"><span>Подробнее</span></a> -->
                                <!-- <a class="primary_btn tr-bg" href="../assets/files/SPA.docx" download=""><span>Скачать</span></a> -->
                            </div>
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
<!-- <div id="about"></div>
<section class="about_area section_gap">
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
                        Расскажу<br />
                        немного<br />
                        о дневнике
                    </h2>
                    <!-- <p>
                        Я FullStack Web-разработчик, опыт программирования
                        в Web-технологиях на 2023 год, уже более 5 лет.
                    </p> -->
<!-- <p>
    Этот курс или дневник по SPA, сделан для того,
    чтобы вы немного больше могли понять и погрузиться
    в Web-программирование, чтобы вы поняли как Web прекрасен
    и удивителен, так как Web - это мир безграничных возможностей!
</p>
<a class="primary_btn" href="../assets/files/SPA.docx" download><span>Скачать</span></a>
</div>
</div>
</div>
</div>
</section>  -->
<!--================ End About Us Area =================-->

<!--================ Srart Brand Area =================-->
<!-- <section class="brand_area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell text-center">
                                <img src="../assets/img/brands/logos1.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell text-center">
                                <img src="../assets/img/brands/logos2.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell text-center">
                                <img src="../assets/img/brands/logos3.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell text-center">
                                <img src="../assets/img/brands/logos4.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell text-center">
                                <img src="../assets/img/brands/logos5.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell text-center">
                                <img src="../assets/img/brands/logos6.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell text-center">
                                <img src="../assets/img/brands/logos7.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell text-center">
                                <img src="../assets/img/brands/logos8.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-brand-item d-table">
                            <div class="d-table-cell text-center">
                                <img src="../assets/img/brands/logos9.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-lg-2 col-lg-4 col-md-6">
                <div class="client-info">
                    <div class="d-flex mb-50">
                        <span class="smll">Технологий которые вы можете изучить благодаря этому учебнику</span>
                    </div>
                    <div class="call-now d-flex">
                        <div>
                            <!-- <span class="fa fa-phone"></span> -->
<!-- </div>
<div class="ml-15">
    <p>Авторизуйтесь, чтобы получить полный доступ</p>
    <!-- <h3>+7 (960) 000 46 12</h3> -->
<!-- </div>
</div>
</div>
</div>
</div>
</div>
</section>  -->
<!--================ End Brand Area =================-->

<!--================ Start Features Area =================-->
<!-- <section class="features_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="main_title">
                    <h2>Сервисные возможности</h2>
                    <p>
                        Чтобы стать успешный и хорошим Web-разработчиком вы должны
                        уметь выполнять 4 задачи <br />
                        На самом деле в основном вы будете выполнять что-то одно,
                        но уметь вы должны всё из этого
                    </p>
                </div>
            </div>
        </div>
        <div class="row feature_inner">
            <div class="col-lg-3 col-md-6">
                <div class="feature_item">
                    <img src="../assets/img/services/s1.png" alt="" />
                    <h4>WP developing</h4>
                    <p>
                        Умение создавать сайты на различных CMS системах,
                        а также конструкторах
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature_item">
                    <img src="../assets/img/services/s2.png" alt="" />
                    <h4>UI/ux design</h4>
                    <p>
                        Разработка дизайна на различных программах и создание базы данных
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature_item">
                    <img src="../assets/img/services/s3.png" alt="" />
                    <h4>Web developing</h4>
                    <p>
                        Создание и разработка сайта, по дизайну или без него
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature_item">
                    <img src="../assets/img/services/s4.png" alt="" />
                    <h4>seo optimize</h4>
                    <p>
                        Продвижение сайта, способность делать его более видимым
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--================ End Features Area =================-->

<!--================ Start Testimonial Area =================-->
<!-- <div class="testimonial_area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="main_title">
                    <h2>Мой клиенты обо мне</h2>
                    <p>
                        Отзывы, про мой выполненые работы и заказы
                        креативность и находчивость <br />
                        а так же как выполнен проект и насколько точно
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="testi_slider owl-carousel">
                <div class="testi_item">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="../assets/img/testimonials/t1.jpg" alt="" />
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Эдуард Вашков</h4>
                                <p>
                                    Работа выполнена полность хорошо и в минимальные сроки,
                                    так же всё выполнено с точность по шаблону и готовому макету,
                                    весь дизайн адоптивен и полность рабочий!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi_item">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="../assets/img/testimonials/t2.jpg" alt="" />
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Данийл Франкес</h4>
                                <p>
                                    Работа выполнена полность хорошо и в минимальные сроки,
                                    так же всё выполнено с точность по шаблону и готовому макету,
                                    весь дизайн адоптивен и полность рабочий!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi_item">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="../assets/img/testimonials/t1.jpg" alt="" />
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Эдуард Вашков</h4>
                                <p>
                                    Работа выполнена полность хорошо и в минимальные сроки,
                                    так же всё выполнено с точность по шаблону и готовому макету,
                                    весь дизайн адоптивен и полность рабочий!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi_item">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="../assets/img/testimonials/t2.jpg" alt="" />
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Данийл Франкес</h4>
                                <p>
                                    Работа выполнена полность хорошо и в минимальные сроки,
                                    так же всё выполнено с точность по шаблону и готовому макету,
                                    весь дизайн адоптивен и полность рабочий!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi_item">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="../assets/img/testimonials/t1.jpg" alt="" />
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Эдуард Вашков</h4>
                                <p>
                                    Работа выполнена полность хорошо и в минимальные сроки,
                                    так же всё выполнено с точность по шаблону и готовому макету,
                                    весь дизайн адоптивен и полность рабочий!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi_item">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="../assets/img/testimonials/t2.jpg" alt="" />
                        </div>
                        <div class="col-lg-8">
                            <div class="testi_text">
                                <h4>Данийл Франкес</h4>
                                <p>
                                    Работа выполнена полность хорошо и в минимальные сроки,
                                    так же всё выполнено с точность по шаблону и готовому макету,
                                    весь дизайн адоптивен и полность рабочий!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--================ End Testimonial Area =================-->
@endsection