@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> 
				
				</div>
                <div class="card-body">
                   

					<form method="post" action="{{route('library.book.store')}}" >
						@csrf
                    <table class="table">
                    	<tr>
                    		<td>العنوان</td>
                    		<td><input name="title" class="form-control"></td>
                    	</tr>
                    	<tr>
                    		<td>المؤلف</td>
                    		<td><input name="author" class="form-control"></td>
                    	</tr>
                    	<tr>
                    		<td>الوصف</td>
                    		<td>
							<textarea name="description" cols="30" rows="10" class="form-control"></textarea>
							</td>
                    	</tr>
                    	<tr>
                    		<td>الطبعة</td>
                    		<td>
							<select name="edition" class="form-control">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
							</td>
                    	</tr>
                    	<tr>
                    		<td>الجزء إن وجد</td>
                    		<td>
							<select name="juz" class="form-control">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
							</td>
                    	</tr>
                    	<tr>
                    		<td>isbn</td>
                    		<td><input name="isbn" class="form-control"></td>
                    	</tr>
                    	<tr>
                    		<td>تحقيق أو إعداد</td>
                    		<td><input name="prepared" class="form-control"></td>
                    	</tr>
                    	<tr>
                            <td>عدد الصفحات</td>
                            <td><input name="pages" class="form-control" type="number" ></td>
                        </tr>
                    	<tr>
                    		<td>الصنف</td>
                    		<td>
                    			<select name="cate_id" class="form-control">
                                    @foreach($cates as $cate)
                    				<option value="{{$cate->id}}">{{$cate->title}}</option>
                                    @endforeach
                    			</select>
                    		</td>
                    	</tr>
                        <tr>
                            <td colspan="2">
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
