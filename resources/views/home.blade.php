@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
		<div class="col-md-12 mt-3">
			@if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            	<a class="btn btn-block btn-danger"
            	href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        تسجيل الخروج
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="{{route('twitte.create')}}" class="btn btn-info btn-block mt-3">اضف تغريدة</a>

				عدد التغريدات
				<div class="badge badge-primary mt-3">
					{{count($twittes)}}
				</div>
				@foreach($twittes as $twitte)
				<div class="alert alert-info pb-1">
					<div class="badge badge-primary">{{$twitte->id}}</div>
					<p>
						{{$twitte->body}}
						<div>{{$twitte->date}}</div>
					</p>
					@if($twitte->img)
					<a href="{{asset('storage/'.$twitte->img)}}">صورة</a>
					@endif
					<a href="{{route('replay.create',['twitte_id'=>$twitte->id])}}">الردود {{$twitte->replays->count()}}</a>
				</div>
				@endforeach
				{{ $twittes->links() }}
		</div>
    </div>
</div>
@endsection
