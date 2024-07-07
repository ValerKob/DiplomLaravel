@extends('layouts.main')

@section('title', 'Home')

@section('content')
<style>
    .mainBlog {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;

        text-align: center;
        margin: 20px;
    }
    .btnGlav {
        margin-top: 40px;
    }

    .btnGlav .btn-primary {
        margin-right: 20px;
    }
</style>
{{-- Главное окно --}}
<section class="mainBlog">
    <div class="glav">
        <h1>Добро пожаловать!</h1>
        <h3>Что вы хотите сделать?</h3>
        <div class="btnGlav">
            <a href="{{ route('addData') }}" class="btn btn-primary">Добывать данные</a>
            <a href="{{ route('info') }}" class="btn btn-outline-primary">Посмотреть данные</a>
        </div>
    </div>
</section>

@endsection