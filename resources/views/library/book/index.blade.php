@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="flex flex-sp">
                        <a class="btn btn-info" href="{{route('library.book.create')}}">كتاب جديد</a>
                        <a class="btn btn-info" href="{{route('library.cate.create')}}">صنف جديد</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>قائمة الكتب</td>
                        </tr>
                    	
                    	@foreach($books as $book)
                    	<tr>
                    		<td>{{$book->title}}</td>
                    	</tr>
                    	@endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection