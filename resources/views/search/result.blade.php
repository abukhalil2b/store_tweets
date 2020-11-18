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
			@foreach($searchResults as $twitte)
			<div class="alert alert-info pb-1">
				<div class="badge badge-primary">{{$twitte->id}}</div>
				<p>
					{{$twitte->body}}
					<span class="date">{{$twitte->date}}</span>
				</p>
				@if($twitte->img)
				<a href="{{asset('storage/'.$twitte->img)}}">صورة</a>
				@endif
				<a href="{{route('replay.create',['twitte_id'=>$twitte->id])}}">الردود {{$twitte->replays->count()}}</a>
			</div>
			@endforeach
		</div>
    </div>
</div>
@endsection
