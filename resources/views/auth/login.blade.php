@extends('layouts.app')
@section('section_style')class="hero hero-panel" style="background-image: url(https://static.wixstatic.com/media/c152f3_dfedd2e927aa4d589234d4c316e0831f.jpg);"@endsection
@section('content')
        <div class="hero-bg"></div>
        <div class="container relative">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-none margin-auto">
                    <div class="panel panel-default panel-login">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-user"></i> Sign In to AusExile</h3>
                        </div>
                        <div class="panel-body">

                            <a class="btn btn-block btn-social btn-github" disabled=""><i class="fa fa-steam"></i> Connect with Steam</a>
                            <div class="separator"><span>or</span></div>

                            <form role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                                <div class="form-group input-icon-left {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <i class="fa fa-user"></i>
                                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group input-icon-left {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>

                                <div class="form-actions">
                                    <div class="checkbox checkbox-primary">
                                        <input type="checkbox" id="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}>
                                        <label for="checkbox">Remember me</label>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                        Forgot Your Password?
                                    </a>
                            </div>
                        </div>
                        <div class="panel-footer">
                            Don't have an AusExile account? <a href="{{ url('/register') }}">Sign Up Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
