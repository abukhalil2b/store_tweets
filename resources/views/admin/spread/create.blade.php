@extends('layouts.master')

@section('content')
<style>
	.pull-left{
		float: left;
	}
	select{
		height: 37px !important;
	}
</style>
<link href="{{asset('css/select2.min.css')}}" rel="stylesheet" />

<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-12 mt-3">
    		@if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @if($errors->any())
            	@foreach($errors->all() as $error)
            	<li>{{$error}}</li>
            	@endforeach
            @endif
    		<form action="{{route('spread.store')}}" method="post" >
				@csrf
				<center><h3>انتشار التغريدة في الدول</h3></center>
				<div class="row">
					<div class="col-md-6">
						الدولة
						<select name="country_id" class="form-control js-example-basic-single">
							<option></option>
							@foreach($countries as $county)
						  	<option value="{{$county->id}}">{{$county->ar_name}}  ({{$county->en_name}})</option>
						  	@endforeach
						</select>
					</div>
					<div class="col-md-6">
						العدد
						<input name="number" class="form-control" type="number">
					</div>
					<div class="col-md-12 mt-3">
						<input type="hidden" name="twitte_id" value="{{$twitte_id}}">
						<button class="btn btn-block btn-info">حفظ</button>
					</div>
				</div>
			</form>
    	</div>

    </div>
    <div class="row">
		<div class="col-md-12 mt-3">
			<table class="table">
			@foreach($spreads as $spread)
					<tr>
						<td>
							{{$spread->country->ar_name}}
						</td>
						<td>
							{{$spread->number}}
						</td>
						<td>
							<a href="" >تعديل</a>
						</td>
					</tr>
			@endforeach
			</table>
		</div>
    </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>
  <script src="{{asset('js/select2.min.js')}}"></script>
<script>
	$(document).ready(function() {
    	$('.js-example-basic-single').select2();
	});
</script>
@endsection
