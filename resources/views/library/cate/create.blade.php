@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">bookindex</div>

                <div class="card-body">
                   

					<form method="post" action="{{route('library.book.store')}}">
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
                    		<td>cover</td>
                    		<td><input name="cover" class="form-control"></td>
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
                    		<td>cate</td>
                    		<td>
                    			<select name="cate">
                    				<option value=""></option>
                    			</select>
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
