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
	<a href="{{ route('twitte.create') }}" class="text-secondary btn-block mt-3">اضافة تغريدة</a>
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
    <div class="row justify-content-center">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">بحث</div>
				<div class="card-body">
					<form action="{{route('search')}}" method="post">
						@csrf
						<input type="text" name="body" placeholder="موضوع التغريدة" class="form-control">
						<button class="btn btn-block btn-info mt-3">بحث</button>
					</form>
				</div>
			</div>
		</div>

		<div class="col-lg-12 mt-3">
			<div class="card">
				<div class="card-body">
					@foreach($twittes as $twitte)
					<div class="alert alert-info ">
						<p>
							<span class="badge badge-primary">{{$twitte->id}}</span>
							{{$twitte->body}}
							<div>{{$twitte->date}}</div>
						</p>
						الصنف
						<span class="cate">[ {{__('cates.'.$twitte->category)}} ]</span>

						إعادة التغريدة <span class="number">{{$twitte->retweet_number}}</span>
						الإعجاب <span class="number">{{$twitte->like_number}}</span>
						@if($twitte->img)
						<a href="{{asset('storage/'.$twitte->img)}}">صورة</a>
						@endif
						<a href="{{route('replay.create',['twitte_id'=>$twitte->id])}}">الردود {{$twitte->replays->count()}}</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>

    </div>
</div>
@endsection
