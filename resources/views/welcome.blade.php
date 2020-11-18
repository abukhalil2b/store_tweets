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
		<div class="col-md-6 mt-3">
			<div class="card">
				<div class="card-header">فكرية</div>
				<div class="card-body">
					@foreach($fikrTweets as $twitte)
					<div class="alert alert-info ">
						<div class="badge badge-primary">{{$twitte->id}}</div>
						<p>
							{{$twitte->body}}
							<div>{{$twitte->date}}</div>
						</p>
						@if($twitte->img)
						<a href="{{asset('storage/'.$twitte->img)}}">صورة</a>
						@endif
						<a href="{{route('replay.create',['twitte_id'=>$twitte->id])}}">الردود {{$twitte->replays->count()}}</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>

		<div class="col-md-6 mt-3">
			<div class="card">
				<div class="card-header">عقيدة</div>
				<div class="card-body">
					@foreach($aqeedaTweets as $twitte)
					<div class="alert alert-info ">
						<div class="badge badge-primary">{{$twitte->id}}</div>
						<p>
							{{$twitte->body}}
							<div>{{$twitte->date}}</div>
						</p>
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
