@extends('layouts.admin_master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<div class="col-lg-12">
    		<form action="{{route('country.update')}}" method="post">
    		@csrf
    		<input type="text" class="form-control mt-5" name="name" value="{{$country->name}}">
    		<input type="hidden" name="id" value="{{$country->id}}">
    		<button class="btn btn-outline-primary btn-block mt-3">حفظ</button>
    	</form>
    	</div>
    </div>

</div>
@endsection
