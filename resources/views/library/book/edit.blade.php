@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4> تعديل بيانات الكتاب</h4>
				</div>
                <div class="card-body">
					<form method="post" action="{{route('library.book.update')}}" enctype="multipart/form-data">
						@csrf
                    <table class="table">
						<tr>
                    		<td>
                    			<img src="{{$book->cover_url}}" width="80" alt="{{$book->cover_url}}">
                    		</td>
                    		<td>
                                <input value="{{$book->cover_url}}" name="cover_url" class="form-control" placeholder=" رابط الغلاف">
                            </td>
                    	</tr>
                    	<tr>
                    		<td>العنوان</td>
                    		<td><input value="{{$book->title}}" name="title" class="form-control"></td>
                    	</tr>
                    	<tr>
                    		<td>المؤلف</td>
                    		<td><input value="{{$book->author}}" name="author" class="form-control"></td>
                    	</tr>
                    	<tr>
                    		<td>الوصف</td>
                    		<td>
							<textarea name="description" cols="30" rows="10" class="form-control">{{$book->description}}</textarea>
							</td>
                    	</tr>
                    	<tr>
                    		<td>الطبعة</td>
                    		<td>
							<select name="edition" class="form-control">
								@for($i=1; $i<=5; $i++)
								<option value="{{$i}}" @if($i==$book->edition) selected @endif>{{$i}}</option>
								@endfor
							</select>
							</td>
                    	</tr>
                    	<tr>
                    		<td>الجزء إن وجد</td>
                    		<td>
							<select name="juz" class="form-control">
								@for($i=1; $i<=5; $i++)
								<option value="{{$i}}" @if($i==$book->edition) selected @endif>{{$i}}</option>
								@endfor
							</select>
							</td>
                    	</tr>
                    	<tr>
                    		<td>isbn</td>
                    		<td><input value="{{$book->isbn}}" name="isbn" class="form-control"></td>
                    	</tr>
                    	<tr>
                    		<td>تحقيق أو إعداد</td>
                    		<td><input value="{{$book->preparedby}}" name="preparedby" class="form-control"></td>
                    	</tr>
                    	<tr>
                            <td>عدد الصفحات</td>
                            <td><input value="{{$book->pages}}" name="pages" class="form-control" type="number" ></td>
                        </tr>
                    	<tr>
                    		<td>الصنف</td>
                    		<td>
                    			<select name="cate_id" class="form-control">
                                    @foreach($cates as $cate)
                    				<option value="{{$cate->id}}" @if($book->cate_id==$cate->id) selected @endif >
                    					{{$cate->title}}
                    				</option>
                                    @endforeach
                    			</select>
                    		</td>
                    	</tr>
                        <tr>
                            <td colspan="2">
                            	<input type="hidden" name="id" value="{{$book->id}}">
                                <button class="btn btn-info btn-block">حفظ</button>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
