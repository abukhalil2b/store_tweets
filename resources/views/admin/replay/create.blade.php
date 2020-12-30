@extends('layouts.admin_master')

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
    		<form action="{{route('replay.store')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					نص الرد
					<textarea name="body" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-4">
							رابط الرد في تويتر
							<input name="link" class="form-control">
						</div>
						<div class="col-md-4">
							رابط فيديو للرد (إن وجد)
							<input name="vid" class="form-control">
						</div>
						<div class="col-md-4">
							صورة للرد (إن وجد)
							<input type="file" name="img" class="form-control">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							نوع الرد
							<select name="category" class="form-control">
								<option value="qaseeda">قصيدة</option>
								<option value="maqal">مقال</option>
							</select>
						</div>
						<div class="col-md-6">
							تاريخ الرد
							<input type="date" name="date" class="form-control">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-4">
							اسم صاحب الرد
							<input  name="name" class="form-control">
						</div>
						<div class="col-md-4">
							معلومة أخرى عن  صاحب الرد
							<input  name="info" class="form-control">
						</div>
						<div class="col-md-4">
							تعريف بصاحب الرد
							<select name="job" class="form-control">
								<option value=""></option>
								<option value="thinker">مفكر</option>
								<option value="dr_academy">دكتور أكاديمي</option>
								<option value="dr_hospital">طبيب</option>
								<option value="engineer">مهندس</option>
								<option value="da3ya">داعية</option>
								<option value="political">سياسي</option>
								<option value="officail_channel">قناة تلفزيونية رسمية</option>
								<option value="unofficial_channel">قناة تلفزيونية غير رسمية</option>
								<option value="organization">منظمة عالمية</option>
								<option value="reporter">صحيفة</option>
							</select>
						</div>
					</div>
				</div>

				<div class="form-group">
					<b>التفاعل مع الرد</b>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								إعادة التغريدات
								<select name="retweet_number" class="form-control">
									<option value="50">أكثر من 50</option>
									<option value="100">أكثر من 100</option>
									<option value="150">أكثر من 150</option>
									<option value="200">أكثر من 200</option>
									<option value="250">أكثر من 250</option>
									<option value="300">أكثر من 300</option>
									<option value="350">أكثر من 350</option>
									<option value="400">أكثر من 400</option>
								</select>
							</div>
							<div class="col-md-6">
								الإعجابات
								<select name="like_number" class="form-control">
									<option value="50">أكثر من 50</option>
									<option value="100">أكثر من 100</option>
									<option value="150">أكثر من 150</option>
									<option value="200">أكثر من 200</option>
									<option value="250">أكثر من 250</option>
									<option value="300">أكثر من 300</option>
									<option value="350">أكثر من 350</option>
									<option value="400">أكثر من 400</option>
								</select>
							</div>
						</div>
					</div>
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
    		@foreach($replays as $replay)
	    		<div class="mt-1 card p-1">
		    		<p>
		    			<span class="badge badge-primary">{{$replay->id}}</span>
		    			{{$replay->name}}
		    			<span class="name-info"> ({{$replay->info}})</span>
		    		</p>
		    		{{$replay->body}}
		    		<small class="date">{{$replay->date}}</small>
		    		<p class="cate">
		    			{{__('cates.'.$replay->category)}}
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
