@extends('layouts.master')

@section('content')
<div class="products">
	<div class="container " style="text-align: center;">
		<div class="row">
			<div class="col-lg-4">
				<div class="card mt-3">
					<a href="{{route('product-details')}}">
					<img class="card-img-top" src="{{asset('img/product1.jpg')}}" alt="Card image cap">
					<div class="card-body">
					<p class="card-text">تفاصيل إضافية
					صدر دجاج (فيليه) مجمد، بدون عظم و جلد</p>
					</div>
					</a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card mt-3">
					<a href="{{route('product-details')}}">
					<img class="card-img-top" src="{{asset('img/product1.jpg')}}" alt="Card image cap">
					<div class="card-body">
					<p class="card-text">تفاصيل إضافية
					صدر دجاج (فيليه) مجمد، بدون عظم و جلد</p>
					</div>
					</a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card mt-3">
					<a href="{{route('product-details')}}">
					<img class="card-img-top" src="{{asset('img/product1.jpg')}}" alt="Card image cap">
					<div class="card-body">
					<p class="card-text">تفاصيل إضافية
					صدر دجاج (فيليه) مجمد، بدون عظم و جلد</p>
					</div>
					</a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card mt-3">
					<a href="{{route('product-details')}}">
					<img class="card-img-top" src="{{asset('img/product1.jpg')}}" alt="Card image cap">
					<div class="card-body">
					<p class="card-text">تفاصيل إضافية
					صدر دجاج (فيليه) مجمد، بدون عظم و جلد</p>
					</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection