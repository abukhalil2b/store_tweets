@extends('layouts.admin_master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<div class="col-lg-12">

    		@if (session('status'))
                <div class="alert alert-{{session('status')}}" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            @if($errors->any())
            	@foreach($errors->all() as $error)
            	<li>{{$error}}</li>
            	@endforeach
            @endif

    		<form action="{{route('country.store')}}" method="post">
    		@csrf
    		<input type="text" class="form-control mt-5" name="name">
    		<button class="btn btn-outline-primary btn-block mt-3">حفظ</button>
    	</form>
    	</div>
    	<div class="col-lg-12">
    		<ol>
    		@foreach($countries as $country)
    		<li class="country-name">{{$country->name}} - 
                <a class="pull-left" href="{{route('country.edit',['country'=>$country->id])}}">تعديل</a></li>
    		@endforeach
    		</ol>
    	</div>
    </div>

</div>
@endsection
