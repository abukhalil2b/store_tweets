@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>قائمة الكتب</h4>
                    [{{count($books)}}]
                </div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>العنوان</td>
                                <td>المؤلف</td>
                                <td>الوصف</td>
                                <td>الطبعة</td>
                                <td>الجزء</td>
                                <td>ISBN</td>
                                <td>إعداد</td>
                                <td>عدد الصفحات</td>
                                <td>الصنف</td>
                                <td>الصورة</td>
                            </tr>
                        </thead>
                    	@foreach($books as $key => $book)
                    	<tr>
                            <td>{{$key + 1}}</td>
                            <td>
                                <a
                                    href="{{route('library.book.edit',['id'=>$book->id])}}"
                                    title="{{$book->title}}"
                                    class="btn btn-secondary btn-block">
                                    {{$book->title}}
                                </a>
                            </td>
                            <td>{{$book->author}}</td>
                            <td>{{$book->description}}</td>
                            <td>{{$book->edition}}</td>
                            <td>{{$book->juz}}</td>
                            <td>{{$book->isbn}}</td>
                            <td>{{$book->preparedby}}</td>
                            <td>{{$book->pages}}</td>
                            <td>{{$book->cate->title}}</td>
                    		<td>
                                <img src="{{$book->cover_url}}" width="80" alt="cover">
                            </td>
                    	</tr>
                    	@endforeach
                        <tr>
                            <td colspan="11">
                                {{ $books->links() }}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
