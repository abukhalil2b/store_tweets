@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-12 mt-3">
    		<form action="{{route('twitte.store')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					تاريخ التغريدة
					<input type="date" name="date" class="form-control">
				</div>
				<div class="form-group">
					عنوان للتغريدة
					<input name="title" class="form-control">
				</div>
				<div class="form-group">
					نص التغريدة
					<textarea name="body" class="form-control"></textarea>
				</div>
				<div class="form-group">
					رابط التغريدة في تويتر
					<input name="link" class="form-control">
				</div>
				<div class="form-group">
					فيديو للتغريدة (إن وجد)
					<input name="vid" class="form-control">
				</div>
				<div class="form-group">
					صورة للتغريدة (إن وجد)
					<input type="file" name="img" class="form-control">
				</div>
				<div class="form-group">
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
				<div class="form-group">
					مصدر التغريدة
					<select name="source" class="form-control">
						<option value="quotes">إقتباس</option>
						<option value="new">معد حديثا</option>
						<option value="live">بث مباشر</option>
						<option value="clip">مقطع</option>
					</select>
				</div>

				<button class="btn btn-block btn-info">حفظ</button>
			</form>
    	</div>
    </div>
</div>
@endsection
