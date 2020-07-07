@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">bookindex</div>

                <div class="card-body">
                   

					<form method="post" action="{{route('library.book.store')}}" enctype="multipart/form-data">
						@csrf
                    <table>
                    	<tr>
                    		<td>title</td>
                    		<td><input name="title" class="form-control"></td>
                    	</tr>
                    	<tr>
                    		<td>author</td>
                    		<td><input name="author" class="form-control"></td>
                    	</tr>
                    	<tr>
                    		<td>description</td>
                    		<td><input name="description" class="form-control"></td>
                    	</tr>
                    	<tr>
                    		<td>edition</td>
                    		<td><input name="edition" class="form-control"></td>
                    	</tr>
                    	<tr>
                    		<td>juz</td>
                    		<td><input name="juz" class="form-control"></td>
                    	</tr>
                    	<tr>
                    		<td>isbn</td>
                    		<td><input name="isbn" class="form-control"></td>
                    	</tr>
                    	<tr>
                    		<td>prepared</td>
                    		<td><input name="prepared" class="form-control"></td>
                    	</tr>
                    	<tr>
                            <td>pages</td>
                            <td><input name="pages" class="form-control" type="number" ></td>
                        </tr>
                    	<tr>
                    		<td>cate</td>
                    		<td>
                    			<select name="cate_id">
                                    @foreach($cates as $cate)
                    				<option value="{{$cate->id}}">{{$cate->title}}</option>
                                    @endforeach
                    			</select>
                    		</td>
                    	</tr>
                        <tr>
                            <td colspan="2">
                                <button class="btn btn-info btn-block">save</button>
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
