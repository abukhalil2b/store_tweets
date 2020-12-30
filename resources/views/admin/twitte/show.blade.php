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
			<b>التغريدة</b>
			<div class="alert alert-info pb-1">
					<center class="title text-xl">{{$twitte->title}}</center>
		    		<b class="body text-lg">{{$twitte->body}}</b>
		    		<small class="date">{{$twitte->date}}</small>
		    		<p>
		    			<span class="cate">[{{__('sources.'.$twitte->source)}}]</span>
		    			<span class="cate">[{{__('cates.'.$twitte->category)}}]</span>
		    		</p>
		    		@if($twitte->img)
		    			<a href="{{asset('storage/'.$twitte->img)}}" >
		    				صورة
		    			</a>
		    		@endif
				إعادة التغريدة <span class="number">{{$twitte->retweet_number}}</span>
				الإعجاب <span class="number">{{$twitte->like_number}}</span>
				الردود <span class="number">{{$twitte->replay_number}}</span>
			</div>
			<div class="alert alert-secondary mt-1">
				تصنيف الردود
				<span class="badge badge-primary">
					مفكر {{$twitte->replays->where('job','thinker')->count()}}
				</span>
				<span class="badge badge-primary">
					دكتور أكاديمي {{$twitte->replays->where('job','dr_academy')->count()}}
				</span>
				<span class="badge badge-primary">
					طبيب {{$twitte->replays->where('job','dr_hospital')->count()}}
				</span>
				<span class="badge badge-primary">
					مهندس {{$twitte->replays->where('job','engineer')->count()}}
				</span>
				<span class="badge badge-primary">
					داعية {{$twitte->replays->where('job','da3ya')->count()}}
				</span>
				<span class="badge badge-primary">
					سياسي {{$twitte->replays->where('job','political')->count()}}
				</span>
				<span class="badge badge-primary">
					قناة رسمية {{$twitte->replays->where('job','officail_channel')->count()}}
				</span>
				<span class="badge badge-primary">
					قناة غير رسمية {{$twitte->replays->where('job','unofficial_channel')->count()}}
				</span>
				<span class="badge badge-primary">
					منظمة {{$twitte->replays->where('job','organization')->count()}}
				</span>
				<span class="badge badge-primary">
					صحفي {{$twitte->replays->where('job','reporter')->count()}}
				</span>
			</div>
		</div>
    	<div class="col-md-12 mt-3">
    		<b>الردود</b>
    		@foreach($twitte->replays as $replay)
	    		<div class="mt-1 card p-1">
		    		<p>
		    			<span class="badge badge-primary">{{$replay->id}}</span>
		    			{{$replay->name}}
		    			<span class="name-info">@if($replay->info) ({{$replay->info}}) @endif</span>
		    			<span class="job"> @if($replay->job) ({{__('job.'.$replay->job)}}) @endif</span>
		    		</p>
		    		{{$replay->body}}
		    		<small class="date">{{$replay->date}}</small>
		    		<p class="cate">
		    			{{__('cates.'.$replay->category)}}
		    		</p>
		    		@if($replay->img)
		    			<a href="{{asset('storage/'.$replay->img)}}" >
		    				صورة
		    			</a>
		    		@endif
	    		</div>
    		@endforeach
    	</div>
    </div>
</div>
@endsection
