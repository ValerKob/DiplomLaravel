@extends('layouts.main')

@section('title', 'Home')

@section('content')
<!--================Start SigneUp Details Area =================-->
<section class="vh-100 p-5" style="background-color: #eee;" style="padding-top: 100px;">
    <div class="container h-100" style="padding-top: 100px;">
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">

                                    @if($users[0]->avatar != null)
                                    <img src="../storage/app/{{ $users[0]->avatar }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                    @else
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                    @endif
                                    <div class="mt-3">
                                        <!-- <h4>John Doe</h4> -->
                                        <!-- <p class="text-secondary mb-1">Full Stack Developer</p> -->
                                        <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p> -->
                                        <!-- <button class="btn btn-primary">Follow</button>
                                        <button class="btn btn-outline-primary">Message</button> -->
                                    </div>
                                </div>
                                <hr class="my-4">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <form action="editProfile" class="mx-1 mx-md-4" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Имя</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="name" class="form-control" value="{{ $users[0]->name }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Фамилия</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="surname" class="form-control" value="{{ $users[0]->surname }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Отчество</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="patronymic" class="form-control" value="{{ $users[0]->patronymic }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="email" class="form-control" value="{{ $users[0]->email }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Ваш Возраст</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="number" name="age" class="form-control" value="{{ $users[0]->age }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Дополнительная информация</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="info" class="form-control" value="{{ $users[0]->info }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Где вы живёте</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="addres" class="form-control" value="{{ $users[0]->addres }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Загрузить аватарку</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="file" name="avatar" class="form-control" value="{{ $users[0]->avatar }}" style="border: none;">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <button type="submit" class="btn btn-primary btn-lg">Сохранить</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    body {
        background: #f7f7ff;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid transparent;
        border-radius: .25rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
    }

    .me-2 {
        margin-right: .5rem !important;
    }
</style>
<!--================End Portfolio Details Area =================-->
@endsection