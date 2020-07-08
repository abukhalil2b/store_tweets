@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
					<form method="post" action="{{route('library.cate.store')}}">
						@csrf
                        <table class="table">
                        	<tr>
                        		<td>اسم الصنف</td>
                        		<td><input name="title" class="form-control"></td>
                        	</tr>
                        	
                        	<tr>
                        		<td>وصف الصنف</td>
                        		<td><input name="description" class="form-control"></td>
                        	</tr>
                           <tr>
                               <td colspan="2">
                                   <button class="btn btn-info btn-block">حفظ</button>
                               </td>
                           </tr>
                        </table>
                    </form>
                </div>
                <table class="table ">
                    @foreach($cates as $key => $cate)
                    <tr>
                        <td>{{$key+1}} - {{$cate->title}}</td>
                        <td>{{$cate->description}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
