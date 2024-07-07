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
                            @foreach($users as $key => $data)
							<tr>
						      <th scope="row">{{$data->id}}</th>
						      <td>{{$data->customer}}</td>
						      <td>{{$data->ship}}</td>
						      <td>{{$data->price}}</td>
						      <td>{{$data->date}}</td>
						      <td><a href="#" class="btn btn-success">Progress</a></td>
						    </tr>
							@endforeach
						    {{-- <tr>
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
						    </tr> --}}
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection