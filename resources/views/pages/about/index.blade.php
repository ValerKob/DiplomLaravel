@extends('layouts.main')

@section('title', 'About')

@section('content')

<!--================Start Portfolio Details Area =================-->
<section class="portfolio_details_area section_gap" style="padding-top: 100px;">
    <div class="container">
        <div class="text-center" style="margin: 0 0 50px 0;">
            <h2 style="color: #000;">Что такое Препроцессоры CSS?</h2>
        </div>
        <div class="">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left_img">
                        <img class="img-fluid" style="margin: 30px 0 15px 40px; width: 700px; height: 300px" src="../assets/img/about/sass_vs_less2.jpg" alt="">
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5">
                    <div class="mt-30">
                        <h3 class="text-uppercase">Препроцессоры</h3>
                        <style>
                            p {
                                text-align: justify;
                                font-size: 20px;
                            }
                        </style>
                        <p style="text-indent: 20px;">
                           Препроцессоры позволяют разработчикам расширить возможности CSS. Например, они добавляют селекторы наследования, вложенные правила, примеси и многие другие.
                        </p>
                        <p style="text-indent: 20px;">
                            Одна из важных задач препроцессоров — упростить и ускорить процесс разработки и поддержку стилей в проекте. В обзоре рассмотрим наиболее популярные препроцессоры в 2024 году и расскажем, как выбрать подходящий.
                        </p>
                    </div>
                </div>
            </div>
            <h3 class="text-uppercase" style="margin: 20px 0 20px 20px;">Что такое препроцессоры</h3>
          <p style="text-indent: 20px;">
                          Препроцессор — инструмент, который берёт текст из одного документа, преобразует его по нужным правилам, и на выходе получается другой текст. В случае с CSS препроцессоры составляют финальный CSS-документ на основе более простого кода.
                        </p>
                        <p style="text-indent: 20px;">
                            Представьте, что у вас в проекте 30 разных стилей CSS-кнопок. Они нужны для разных дел: одни опасные, другие безопасные, одни активные, другие выключены и т. д. И есть ещё формы ввода и другие интерфейсные элементы, внешний вид которых прописан в CSS.
                        </p>
                         <p style="text-indent: 20px;">
                           И вот у всех этих элементов сейчас стоит параметр border-radius: 7px, то есть скругление по углам — семь пикселей. И вдруг приходит дизайнер и говорит: «Всё пропало, ставь скругление 8 пикселей!» Вы терпеливо заходите в CSS-файл и в 30 местах меняете 7px на 8px.
                        </p>
                        <p style="text-indent: 20px;">
                          Приходит дизайнер и говорит: «Миша, всё ерунда, давай по новой. Теперь 6 пикселей». Можно запустить в дизайнера стулом, а можно использовать препроцессор.
                        </p>    
                        <p style="text-indent: 20px;">
                         С препроцессором у вас 30 кнопок, в которых будет вот так:

border-radius: $defaultBorderRadius

А где-то в отдельном месте документа будет один раз написано:

$defaultBorderRadius: 7px;
                        </p> 
            <div class="row">
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30">
                        <style>
                            p {
                                text-align: justify;
                            }
                        </style>
                        <h3 class="text-uppercase" style="margin: 20px 0 20px 20px;">Какие бывают препроцессоры CSS</h3>
                        <p style="text-indent: 20px;">
                           Sass. Появился в 2006 году как способ упростить работу с CSS и сразу стал популярен у разработчиков. Некоторые считают, что у Sass невысокая скорость работы, но на практике это можно заметить только на очень больших проектах.
                        </p>
                        <p style="text-indent: 20px;">
                            Любопытно, что у Sass есть два синтаксиса:

                            Sass — самый первый вариант, где не используются фигурные скобки, а всё сделано на отступах, как в Python.
                            SCSS — в нём есть фигурные скобки, как в родном CSS, а ещё есть поддержка современных CSS-трюков, которые используются в разных браузерах. Этот формат появился после выхода LESS и стал ответом конкуренту.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="left_img">
                        <img class="img-fluid" style="width: 700px; height: 300px" src="../assets/img/about/kTHdjDARSF9AcHpWn68sTc-1200-80.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-lg-6">
                    <div class="left_img">
                        <img class="img-fluid" style="width: 700px; height: 300px" src="../assets/img/about/maxresdefault.jpg" alt="">
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5">
                    <div class="portfolio_right_text mt-30">
                        <style>
                            p {
                                text-align: justify;
                            }
                        </style>
                        <p style="text-indent: 20px;">
                           LESS. В 2009 году другие программисты показали свою версию препроцессора, основанную на Sass. Они взяли за основу чистый CSS-синтаксис и добавили в него возможность использовать все расширения как в Sass. Технически это интереснее, чем простой Sass, но нельзя сказать, что это сильно круче, чем тот же SCSS.
                        </p>
                        <p style="text-indent: 20px;">
                           Stylus и другие. Есть и другие препроцессоры — например, тот же Stylus. Принципиально он делает то же самое, но использует другой синтаксис, более лаконичный и простой.
                        </p>
                    </div>
                </div>
               
            </div>

             <h3 class="text-uppercase" style="margin: 20px 0 20px 20px;">Какой выбрать?</h3>
          <p style="text-indent: 20px;">
                          По сути все они делают одно и то же: упрощают работу с CSS-кодом, поэтому это вопрос вкуса и привычек. Если давать общие рекомендации, мы бы сделали так:
                        </p>
                        <p style="text-indent: 20px;">
                           Sass (SCSS) подойдёт тем, кто больше любит программирование, чем вёрстку.
                        </p>
                         <p style="text-indent: 20px;">
                         LESS понравится всем, кому приглянулся чистый CSS-синтаксис, но хочется сделать работу ещё проще.
                        </p>
                        <p style="text-indent: 20px;">
                         Stylus можно выбрать тем, кто ценит в коде лаконичность и минимализм.
                        </p>   
            
            <h3 class="text-uppercase" style="margin: 40px 0 20px 20px;">Почему именно SCSS?</h3>
<p style="text-indent: 20px;">
               В данном пособий, разработаем простую, но относительно полноценную дизайн-систему для веб-приложения средствами Scss.
            </p>
            <p style="text-indent: 20px;">
                Почему Scss? Потому что, кроме полной поддержки CSS, Sass предоставляет несколько интересных инструментов, позволяющих существенно сократить шаблонный код, в чем вы сами скоро убедитесь. На мой взгляд, несмотря на стремительное развитие CSS в последние годы, Scss продолжает оставаться актуальным, по крайней мере, при работе над серьезными проектами.
            </p>
                <p style="text-indent: 20px;">
                При разработке дизайн-системы в части терминологии, названий, значений переменных и т.п. я буду ориентироваться, в основном, на Bootstrap и немного на Tailwind.
            </p>
        </div>
    </div>
</section>
<!--================End Portfolio Details Area =================-->
@endsection