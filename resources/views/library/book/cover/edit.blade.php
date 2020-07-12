@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

				</div>
                <div class="card-body">
                    <h4>كتاب جديد</h4>
					<form method="post" action="{{route('library.book.update')}}" enctype="multipart/form-data">
						@csrf
                    <table class="table">
						<tr>
                    		<td>
                    			<img src="{{$book->url}}{{$book->cover}}" width="80" alt="cover">
                    		</td>
                    		<td><input name="cover" type="file" class="form-control"></td>
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
