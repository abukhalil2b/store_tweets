@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6 mt-3">
			<a href="/" class="text-secondary btn-block">عودة</a>
		</div>
	</div>
</div>
<div class="container">
    <div class="row justify-content-center">
		<div class="col-md-12 mt-3">
			<div class="alert alert-info pb-1">
		    		<p>
		    			{{$replay->name}}
		    			<span class="name-info"> ({{$replay->info}})</span>
		    		</p>
		    		{{$replay->body}}
		    		<small class="date">{{$replay->date}}</small>
		    		<p>
		    			<span class="cate">{{__('cates.'.$replay->category)}}</span>
		    		</p>
		    		@if($replay->img)
		    			<a href="{{asset('storage/'.$replay->img)}}" >
		    				صورة
		    			</a>
		    		@endif
				إعادة التغريدة <span class="number">{{$replay->retweet_number}}</span>
				الإعجاب <span class="number">{{$replay->like_number}}</span>
			</div>
		</div>
    </div>
</div>
@endsection
