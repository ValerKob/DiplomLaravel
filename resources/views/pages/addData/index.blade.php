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
    <h1>Добавит новые данные!!!</h1>
</section>
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <div class="card">
                <h5 class="text-center mb-4">Добавить новые данные</h5>
				<form action="FormAdd" class="mx-1 mx-md-4" method="POST">
					@csrf
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Customer<span class="text-danger"> *</span></label> <input type="text" id="fname" name="customer" placeholder="Enter Customer"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Ship<span class="text-danger"> *</span></label> <input type="text" id="lname" name="ship" placeholder="Enter Ship"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Price<span class="text-danger"> *</span></label> <input type="text" id="email" name="price" placeholder=""> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Pruchased Price<span class="text-danger"> *</span></label> <input type="date" id="mob" name="data" placeholder=""> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Добавит файл<span class="text-danger"> *</span></label> <input type="file" id="ans" name="dataFile" placeholder=""> </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary ">Загрузить</button> </div>
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
					<h2 class="heading-section">Данные по истёкшим сроками мед карт</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th>Invoce</th>
						      <th>Customer</th>
						      <th>Ship</th>
						      <th>Price</th>
						      <th>Pruchased Price</th>
						      <th>Status</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1001</th>
						      <td>Mark Otto</td>
						      <td>Japan</td>
						      <td>$3000</td>
						      <td>$1200</td>
						      <td><a href="#" class="btn btn-success">Progress</a></td>
						    </tr>

						    <tr>
						      <th scope="row">1001</th>
						      <td>Mark Otto</td>
						      <td>Japan</td>
						      <td>$3000</td>
						      <td>$1200</td>
						      <td><a href="#" class="btn btn-warning">Open</a></td>
						    </tr>

						    <tr>
						      <th scope="row">1001</th>
						      <td>Mark Otto</td>
						      <td>Japan</td>
						      <td>$3000</td>
						      <td>$1200</td>
						      <td><a href="#" class="btn btn-danger">On hold</a></td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection