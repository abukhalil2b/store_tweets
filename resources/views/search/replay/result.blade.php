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
		@foreach($searchResults as $replay)
		<div class="col-md-12 mt-3">
			{{$replay->body}}
			<a href="{{route('replay.show',['id'=>$replay->id])}}">
				التفاصيل
			</a>
		</div>
		@endforeach
	</div>
</div>



@endsection
