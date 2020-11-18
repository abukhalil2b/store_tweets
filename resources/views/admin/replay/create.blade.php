@extends('layouts.master')

@section('content')

<div class="container">
	@auth
	<a class="btn btn-block btn-danger"
        href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"> تسجيل الخروج
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <div class="row justify-content-center">
    	<div class="col-md-12 mt-3">
    		<small class="card">{{$twitte->body}}</small>
    		<form action="{{route('replay.store')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					تاريخ الرد
					<input type="date" name="date" class="form-control">
				</div>
				<div class="form-group">
					نص الرد
					<textarea name="body" class="form-control"></textarea>
				</div>
				<div class="form-group">
					رابط الرد في تويتر
					<input name="link" class="form-control">
				</div>
				<div class="form-group">
					نوع الرد
					<select name="category" class="form-control">
						<option value="qaseeda">قصيدة</option>
						<option value="maqal">مقال</option>
					</select>
				</div>
				<div class="form-group">
					صورة للتغريدة (صورة الشاشة)
					<input type="file" name="img" class="form-control">
				</div>
				<div class="form-group">
					اسم صاحب الرد
					<input  name="name" class="form-control">
				</div>
				<div class="form-group">
					معلومة بسيطة عن صاحب الرد
					<input  name="info" class="form-control">
				</div>
				<input type="hidden" name="twitte_id" value="{{$twitte->id}}">
				<button class="btn btn-block btn-info">حفظ</button>
			</form>
    	</div>
    </div>
    @else
    <div class="row justify-content-center">
		<div class="col-md-6 mt-3">
			<a href="/login" class="text-secondary btn-block">دخول الإدارة</a>
		</div>
	</div>
    @endauth
	<div class="row">
		<div class="col-md-12">
			@foreach($errors->all() as $error)
			<b class="text-danger">{{$error}}</b>
			@endforeach
		</div>
	</div>
    <div class="row">
    	<div class="col-md-12">
    		@foreach($twitte->replays as $replay)
	    		<div class="mt-1 card p-1">
		    		<p>
		    			{{$replay->name}}
		    			<span class="name-info"> ({{$replay->info}})</span>
		    		</p>
		    		{{$replay->body}}
		    		<small>{{$replay->date}}</small>
		    		<p>
		    			@if($replay->category=='qaseeda') <span class="category">قصيدة</span> @endif
		    			@if($replay->category=='maqal') <span class="category">مقال</span> @endif
		    		</p>
		    		@if($replay->img)
		    			<a href="{{asset('storage/'.$replay->img)}}" >
		    				صورة
		    			</a>
		    		@endif
	    		</div>
    		@endforeach
    	</div>
    </div>
    <hr>
</div>
@endsection
