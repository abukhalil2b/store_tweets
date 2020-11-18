@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group ">
                            <input type="radio" name="email" value="admin@mail.com">
                            <span>الإدارة</span>
                            <input class="mr-3" type="radio" name="email" value="admin">
                            <span>مستخدم آخر</span>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <input class="form-control @error('password') is-invalid @enderror" name="password" placeholder="كلمة المرور">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-block btn-primary">
                                   دخول
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
