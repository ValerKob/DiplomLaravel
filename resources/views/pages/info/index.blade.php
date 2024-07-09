@extends('layouts.main')

@section('title', 'Home')

@section('content')
<style>
    .mainBlog {
        display: flex;
        justify-content: center;
        align-items: center;

        text-align: center;
        margin: 20px;
    }
</style>
{{-- Главное окно --}}
<section class="mainBlog">
    <h1>Все данные!!!</h1>
</section>

<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Данные по мед картам</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th>ID</th>
						      <th>ФИО</th>
						      <th>Тип клиента</th>
						      <th>Дата истечения срока</th>
						      <th>Статус</th>
						    </tr>
						  </thead>
						  <tbody>
							@foreach($data_file as $key => $data)
							<tr>
						      <th scope="row">{{$data->id}}</th>
						      <td>{{$data->fullName}}</td>
						      <td>{{$data->typeClient}}</td>
						      <td>{{$data->date}}</td>
						      <td>
								<?php
								// Указываем целевую дату
								$targetDate = $data->date;

								// Получаем текущую дату
								$currentDate = date('Y-m-d');

								// Преобразуем даты в объекты DateTime
								$targetDateTime = new DateTime($targetDate);
								$currentDateTime = new DateTime($currentDate);

								// Вычисляем разницу между датами
								$interval = $currentDateTime->diff($targetDateTime);

								// Получаем количество дней до целевой даты
								$daysRemaining = $interval->days;

								// Проверяем, прошла ли целевая дата
								if ($interval->invert == 1) {
									?><a href="#" class="btn btn-danger">Срок истёк</a><?php
								} elseif($daysRemaining < 30) {
									?><a href="#" class="btn btn-warning">Осталось <?= $daysRemaining?> дней</a><?php
								} else {
									?><a href="#" class="btn btn-success">Всё хорошо</a><?php
								}
								?>
								</td>
						    </tr>
							@endforeach
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection