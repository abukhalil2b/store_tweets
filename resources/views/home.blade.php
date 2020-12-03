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
            	<a class="btn btn-block btn-danger "
            	href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                تسجيل الخروج
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <a href="{{route('twitte.create')}}" class="btn btn-info btn-block mt-3">+اضف تغريدة</a>
				@foreach($twittes as $twitte)
				<div class="alert alert-info pb-1 mt-1">
					<p>
						{{$twitte->body}}
					</p>
					@if($twitte->img)
					<a href="{{asset('storage/'.$twitte->img)}}">
						<i class="fas fa-image"></i>
						صورة
					</a>
					@endif
					@if($twitte->vid)
					<a href="{{$twitte->vid}}">
						<i class="fas fa-video"></i>
						مقطع
					</a>
					@endif
					<a href="{{route('replay.create',['twitte_id'=>$twitte->id])}}">
						<i class="fas fa-plus-square"></i>
						اضف الردود
					</a>
					<a href="{{route('spread.create',['twitte_id'=>$twitte->id])}}">
					<i class="fas fa-plus-square"></i>
					اضف الإنتشار
					</a>
				</div>
				@endforeach
				{{ $twittes->links() }}
		</div>
    </div>
</div>
@endsection
