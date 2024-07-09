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

	body {
  font-family: Arial, sans-serif;
}

button {
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  opacity: 0;
  transition: opacity 0.5s ease;
}

.modal.show {
  display: block;
  opacity: 1;
}

.modal.hide {
  opacity: 0;
}

.modal-content {
  position: relative;
  margin: 2% auto;
  padding: 20px;
  width: 80%;
  max-width: 300px;
  background-color: rgb(74, 248, 31);
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
  animation: slideIn 0.5s ease;
}

@keyframes slideIn {
  from {
    top: -300px;
    opacity: 0;
  }
  to {
    top: 0;
    opacity: 1;
  }
}

.close {
  position: absolute;
  top: 10px;
  right: 20px;
  color: azure;
  font-size: 24px;
  font-weight: bold;
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: rgb(121, 121, 121);
  text-decoration: none;
  cursor: pointer;
}

</style>
{{-- 
<script>
	document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("modal");
  const openModalBtn = document.getElementById("openModalBtn");
  const closeModal = document.querySelector(".close");

  function hideModal() {
    modal.classList.add("hide");
    setTimeout(() => {
      modal.classList.remove("show");
      modal.classList.remove("hide");
      modal.style.display = "none";
    }, 500);
  }

  openModalBtn.addEventListener("click", () => {
    modal.style.display = "block";
    setTimeout(() => {
      modal.classList.add("show");
    }, 10);
    setTimeout(hideModal, 3000);
  });

  closeModal.addEventListener("click", hideModal);

  window.addEventListener("click", (event) => {
    if (event.target === modal) {
      hideModal();
    }
  });
});

</script> --}}

{{-- <div id="modal" class="modal">
	<div class="modal-content">
	<span class="close">&times;</span>
	<p style="color: azure">Данные успешно добавленны!)</p>
	</div>
</div> --}}
{{-- Главное окно --}}
<section class="mainBlog">
    <h1>Добавит новые данные!!!</h1>
</section>

<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <div class="card" style="align-items: center; border: none;">
				<form action="FormAdd" class="mx-1 mx-md-4" method="POST" enctype="multipart/form-data" style="max-width: 400px;">
					@if($error == 0)<h3 style="color: lime">Данные успешно добавленны!)</h3>@endif
					@csrf
                    <div class="row justify-content-between text-left ">
                        <div class="form-group col-12 flex-column d-flex"> 
							<label class="form-control-label px-3">ФИО<span class="text-danger"> *</span></label> 
							<input type="text" class="form-control" name="fullName" placeholder="Введите ФИО" value=""> 
						</div>
                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Тип<span class="text-danger"> *</span></label> 
						<select name="typeClient" id="typeClient">
							<option value="Ученик">Ученик</option>	
							<option value="Учитель">Учитель</option>	
							<option value="Родитель">Родитель</option>	
							<option value="Клиент">Клиент</option>	
						</select></div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> 
							<label class="form-control-label px-3">Дата истичения срока медкомиссий<span class="text-danger"> *</span></label> 
							<input type="date" class="form-control" name="date" placeholder=""> 
						</div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Добавить файл (pdf)<span class="text-danger"> *</span></label> 
							<input type="file" id="formFile" name="dataFile"> 
						</div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn btn-primary ">Загрузить</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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