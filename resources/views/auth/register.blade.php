@extends('layouts.app')
@section('section_style')class="hero hero-panel" style="background-image: url(https://static.wixstatic.com/media/c152f3_dfedd2e927aa4d589234d4c316e0831f.jpg);"@endsection
@section('content')
    <div class="hero-bg"></div>
    <div class="container relative">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-none margin-auto">
                <div class="panel panel-default panel-login">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user"></i> Sign Up to AusExile</h3>
                    </div>
                    <div class="panel-body">

                        <a class="btn btn-block btn-social btn-github"><i class="fa fa-steam"></i> Connect with Steam</a>
                        <div class="separator"><span>or</span></div>

                        <form role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}
                            <div class="form-group input-icon-left {{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <i class="fa fa-user"></i>
                                <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required autofocus>
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group input-icon-left {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <i class="fa fa-user"></i>
                                <input type="text" class="form-control" name="first_name" placeholder="Last Name" value="{{ old('last_name') }}" required autofocus>
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group input-icon-left {{ $errors->has('email') ? ' has-error' : '' }}">
                                <i class="fa fa-envelope"></i>
                                <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group input-icon-left {{ $errors->has('password') ? ' has-error' : '' }}">
                                <i class="fa fa-lock"></i>
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group input-icon-left">
                                <i class="fa fa-check"></i>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Repeat Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>

                        </form>
                    </div>
                    <div class="panel-footer">
                        Already have an account? <a href="{{ url('/login') }}">Sign In Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
