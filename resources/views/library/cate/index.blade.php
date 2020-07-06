@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	<p>index</p>
                	<a class="btn btn-info" href="{{route('library.book.create')}}">create book</a>
                	<a class="btn btn-info" href="{{route('library.cate.create')}}">create cate</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					
                    <table>
                    	<tr>
                    		<td>title</td>
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
