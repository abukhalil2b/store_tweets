@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-12 mt-3">
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

				<button class="btn btn-block btn-info">حفظ</button>
			</form>
    	</div>
    </div>
</div>
@endsection
