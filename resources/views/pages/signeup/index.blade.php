@extends('layouts.main')

@section('title', 'Home')

@section('content')
<!--================Start SigneUp Details Area =================-->
<section class="vh-100" style="background-color: #eee;" style="padding-top: 100px;">
    <div class="container h-100" style="padding-top: 100px;">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px; margin-top: 100px; margin-bottom: 100px;">
                    <div class="card-body p-md-5">
                        <div class=" row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Регистрация</p>

                                <form action="signeup" class="mx-1 mx-md-4" method="POST">
                                    @csrf
                                    @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    @if($error === 3)
                                    <div style="color: red;">К сожалению, такой пользователь уже зарегестрирован!!!</div>
                                    @endif
                                    <div class="d-flex mb-4">
                                        <svg width="32" height="32" fill="currentColor" class="bi bi-person" style="margin-right: 10px;" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                        </svg>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="text" id="form3Example1c" name="login" class="form-control" />
                                            <label class="form-label" for="form3Example1c">Your Login <span style="color: red;">*</span></label>
                                        </div>
                                    </div>

                                    @if($error === 4)
                                    <div style="color: red;">К сожалению, такой email уже зарегестрирован!!!</div>
                                    @endif
                                    <div class="d-flex mb-4">
                                        <svg width="32" height="32" fill="currentColor" class="bi bi-envelope" style="margin-right: 10px;" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" id="form3Example3c" name="email" class="form-control" />
                                            <label class="form-label" for="form3Example3c">Your Email <span style="color: red;">*</span></label>
                                        </div>
                                    </div>

                                    <div class="d-flex mb-4">
                                        <svg width="32" height="32" fill="currentColor" class="bi bi-check2" style="margin-right: 10px;" viewBox="0 0 16 16">
                                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                        </svg>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="form3Example4c" name="password" class="form-control" />
                                            <label class="form-label" for="form3Example4c">Password <span style="color: red;">*</span></label>
                                        </div>
                                    </div>

                                    @if($error == 1)
                                    <div style="color: red;">Не правильно введён повторный пароль!!!</div>
                                    @endif
                                    <div class="d-flex mb-4">
                                        <svg width="32" height="32" fill="currentColor" class="bi bi-check2-all" style="margin-right: 10px;" viewBox="0 0 16 16">
                                            <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z" />
                                            <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
                                        </svg>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="form3Example4cd" name="doublePassword" class="form-control" />
                                            <label class="form-label" for="form3Example4cd">Repeat your password <span style="color: red;">*</span></label>
                                        </div>
                                    </div>

                                    @if($error === 2)
                                    <div style="color: red;">Пожалуйста примите соглашение, на обработку персональных данных!!!</div>
                                    @endif
                                    <div class="form-check d-flex align-items-start mb-5" style="display: flex;">
                                        <input style="margin: 5px 5px 0 20px;" type="checkbox" name="checkYes" id="form2Example3c" />
                                        <div class="d-flex flex-column">Я принимаю пользовательское <a href="#"> Соглашение <span style="color: red;">*</span></a></div>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Регистрация</button>
                                    </div>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Portfolio Details Area =================-->
@endsection