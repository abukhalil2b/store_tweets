@extends('layouts.master')

@section('content')
<style>
	div{
		font-size:12px;
	}
</style>
@auth
	<a class=" btn-block btn-danger"
	    href="{{ route('logout') }}" onclick="event.preventDefault();
	    document.getElementById('logout-form').submit();">تسجيل الخروج
	</a>

	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	    @csrf
	</form>
	<a href="{{ route('twitte.create') }}" class="text-secondary btn-block mt-3">+اضافة تغريدة</a>
@else
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6 mt-3">
			<a href="/login" class="text-secondary btn-block">دخول الإدارة</a>
		</div>
	</div>
</div>
@endauth
<div class="container">
	<div class="card mt-3">
		<form action="{{route('search')}}" method="post">
			@csrf
			<input type="text" name="body" class="form-control">
			<button class="btn btn-block btn-info mt-1">البحث</button>
			في التغريدات
			<input type="radio" name="table" value="twitte" checked>
			في الردود
			<input type="radio" name="table" value="replay">
		</form>
	</div>
</div>
<div class="container">
    <div class="row justify-content-center">
		<div class="col-lg-12 mt-3">
			<b>التغريدات</b>
			<div class="card">
				<div class="card-body">
					@foreach($twittes as $twitte)
					<div class="alert alert-info ">
						<p>
							<span class="badge badge-primary">{{$twitte->id}}</span>
							{{$twitte->body}} <span class="date">{{$twitte->date}}</span>
						</p>
						@if($twitte->vid)
						<a href="{{$twitte->vid}}">مقطع</a>
						@endif
						<a href="{{route('twitte.show',['id'=>$twitte->id])}}">تفاصيل</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>

    </div>
</div>
@endsection
