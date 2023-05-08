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

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Войти</p>

                                <form action="signein" class="mx-1 mx-md-4" method="POST">
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
                                    @if($error === 1)
                                    <div style="color: red;">Проверьте правильность введенных данных и повторите попытку!!!</div>
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

                                    <div class="d-flex mb-4">
                                        <svg width="32" height="32" fill="currentColor" class="bi bi-check2" style="margin-right: 10px;" viewBox="0 0 16 16">
                                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                                        </svg>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" id="form3Example4c" name="password" class="form-control" />
                                            <label class="form-label" for="form3Example4c">Password <span style="color: red;">*</span></label>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Войти</button>
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