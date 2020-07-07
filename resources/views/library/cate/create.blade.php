@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">cate</div>

                <div class="card-body">
                   

					<form method="post" action="{{route('library.cate.store')}}">
						@csrf
                        <table>
                        	<tr>
                        		<td>title</td>
                        		<td><input name="title" class="form-control"></td>
                        	</tr>
                        	
                        	<tr>
                        		<td>description</td>
                        		<td><input name="description" class="form-control"></td>
                        	</tr>
                           <tr>
                               <td colspan="2">
                                   <button class="btn btn-info btn-block">save</button>
                               </td>
                           </tr>
                        </table>
                    </form>
                </div>
                <table class="table table-bordered table-striped">
                    @foreach($cates as $cate)
                    <tr>
                        <td>{{$cate->title}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
