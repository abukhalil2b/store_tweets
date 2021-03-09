@extends('layouts.master')

@section('content')
<style>
	div{
		font-size:12px;
	}
</style>
@auth
	<a class=" btn-block btn-danger "
	    href="{{ route('logout') }}" onclick="event.preventDefault();
	    document.getElementById('logout-form').submit();">
	    <i class="fas fa-sign-out-alt"></i>
	    تسجيل الخروج
	</a>

	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	    @csrf
	</form>
	<a href="{{ route('twitte.create') }}" class="text-secondary btn-block mt-3">
		<i class="fas fa-book"></i>
		إدارة التغريدات والردود
	</a>
	<a href="{{ route('country.create') }}" class="text-secondary btn-block mt-3">
		<i class="fas fa-flag"></i>
		إدارة أسماء الدول
	</a>
@else
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6 mt-3">
			<a href="/login" class="text-secondary btn-block">
				<i class="fas fa-sign-in-alt"></i>
			دخول الإدارة
			</a>
		</div>
	</div>
</div>
@endauth
<div class="container">
	<div class="card mt-3">
		<form action="{{route('search')}}" method="post">
			@csrf


			<div class="row">
				<div class="col-md-6 py-1">
					<input type="text" name="body" class="form-control" placeholder="البحث">
				</div>
				<div class="col-md-3 py-2">
					في التغريدات
					<input type="radio" name="table" value="twitte" checked>
					في الردود
					<input type="radio" name="table" value="replay">
				</div>
				<div class="col-md-3">
					<button class="btn btn-block btn-info mt-1">
				<i class="fas fa-search"></i>

			</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="container">
    <div class="row justify-content-center">
		<div class="col-lg-12 mt-3">
			<b>التغريدات</b>
			<div class="alert alert-secondary mt-1">
				تصنيف التغريدات
				<span class="badge badge-primary">
					فكر {{$twittes->where('category','fikr')->count()}}
				</span>
				<span class="badge badge-primary">
					عقيدة {{$twittes->where('category','aqeeda')->count()}}
				</span>
				<span class="badge badge-primary">
					فقه {{$twittes->where('category','fiqh')->count()}}
				</span>
				<span class="badge badge-primary">
					حادثة/واقعة مستجدة {{$twittes->where('category','date')->count()}}
				</span>
				<span class="badge badge-primary">
					فتاوى {{$twittes->where('category','fatawa')->count()}}
				</span>
				<span class="badge badge-primary">
					تعزية {{$twittes->where('category','condolence')->count()}}
				</span>
				<span class="badge badge-primary">
					تهنئة {{$twittes->where('category','congratulation')->count()}}
				</span>
				<span class="badge badge-primary">
					رسائل أخوية {{$twittes->where('category','brotherhood')->count()}}
				</span>
			</div>
			<div class="card">
				<div class="card-body">
					@foreach($twittes as $twitte)
					<div class="alert alert-info ">
						<p>

							<i class="fab fa-twitter"></i>
							<span class="badge badge-primary">{{$twitte->id}}</span>
							{{$twitte->body}} <span class="date">{{$twitte->date}}</span>
						</p>
						@if($twitte->vid)
						<a href="{{$twitte->vid}}">
							<i class="fas fa-video"></i>
							مقطع
						</a>
						@endif
						<a href="{{route('twitte.show',['id'=>$twitte->id])}}">
							<i class="fas fa-align-justify"></i>
						التغريدة والردود
						</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<a href="/charts">
			<i class="fas fa-wave-square"></i>
			احصائيات
		</a>
    </div>
</div>
@endsection

