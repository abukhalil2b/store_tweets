@extends('layouts.admin_master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-12 mt-3">
    		<center class="head-title">إضافة التغريدات </center>
    		<form action="{{route('twitte.store')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							تاريخ التغريدة
							<input type="date" name="date" class="form-control">
						</div>
						<div class="col-md-6">
							عنوان للتغريدة
							<input name="title" class="form-control">
						</div>
					</div>
				</div>
				<div class="form-group">
					نص التغريدة
					<textarea name="body" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-4">
							رابط التغريدة في تويتر
							<input name="link" class="form-control">
						</div>
						<div class="col-md-4">
							رابط فيديو للتغريدة (إن وجد)
							<input name="vid" class="form-control">
						</div>
						<div class="col-md-4">
							صورة للتغريدة (إن وجد)
							<input type="file" name="img" class="form-control">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-4">
							الإعجاب
							<input name="like_number" type="number" class="form-control">
						</div>
						<div class="col-md-4">
							إعادة التغريدة
							<input name="retweet_number" type="number" class="form-control">
						</div>
						<div class="col-md-4">
							الردود
							<input name="replay_number" type="number" class="form-control">
						</div>
					</div>

				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							صنف التغريدة
							<select name="category" class="form-control">
								<option value="fikr">فكر</option>
								<option value="aqeeda">عقيدة</option>
								<option value="fiqh">فقه</option>
								<option value="event">حادثة/واقعة مستجدة</option>
								<option value="date">تأريخ</option>
								<option value="fatawa">فتاوى</option>
								<option value="condolence">تعزية</option>
								<option value="congratulation">تهنئة</option>
								<option value="brotherhood">رسائل أخوية</option>
							</select>
						</div>
						<div class="col-md-6">
							مصدر التغريدة
							<select name="source" class="form-control">
								<option value="quotes">إقتباس</option>
								<option value="new">معد حديثا</option>
								<option value="live">بث مباشر</option>
								<option value="clip">مقطع</option>
							</select>
						</div>
					</div>
				</div>

				<button class="btn btn-block btn-info">إضافة التغريدة</button>
			</form>
    	</div>
    </div>
    <div class="row">
		<div class="col-md-12">
			@foreach($errors->all() as $error)
			<b class="text-danger">{{$error}}</b>
			@endforeach
		</div>
	</div>
    <div class="row">
    	<div class="col-md-12">
		<center class="head-subtitle mt-3">قائمة التغريدات</center>
    	@foreach($twittes as $twitte)
		<div class="alert alert-info pb-1 mt-1">
			<i class="fab fa-twitter"></i>
			<p>
				{{$twitte->body}}
			</p>
			@if($twitte->img)
			<a href="{{asset('storage/'.$twitte->img)}}">
				<i class="fas fa-image"></i>
			صورة</a>
			@endif
			@if($twitte->vid)
			<a href="{{$twitte->vid}}">
				<i class="fas fa-video"></i>
			مقطع</a>
			@endif
			<a href="{{route('replay.create',['twitte_id'=>$twitte->id])}}">
				<i class="fas fa-plus"></i>
				اضف الردود
			</a>
			<a href="{{route('spread.create',['twitte_id'=>$twitte->id])}}">
				<i class="fas fa-plus"></i>
				اضف الإنتشار
			</a>
		</div>
		@endforeach
		{{ $twittes->links() }}
		</div>
    </div>
</div>
@endsection
