{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Reset Password</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('password.request') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<input type="hidden" name="token" value="{{ $token }}">--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">--}}
                            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}
                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}

                                {{--@if ($errors->has('password_confirmation'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password_confirmation') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Reset Password--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

@extends('auth.master')
@section('content')
    {{--<div class="limiter">--}}
        {{--<div class="container-login100">--}}
            {{--<div class="wrap-login100">--}}
                {{--<form  class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="{{ route('password.request') }}">--}}
                    {{--{{ csrf_field() }}--}}
                    {{--<span class="login100-form-title">--}}
                        {{--New Password--}}
					{{--</span>--}}

                    {{--<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">--}}
                        {{--<input class="input100" type="text" name="email" value="{{ $email or old('email') }}" placeholder="Email">--}}

                        {{--<span class="focus-input100"></span>--}}
                    {{--</div>--}}
                    {{--@if ($errors->has('email'))--}}
                        {{--<span class="help-block-fb">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                    {{--@endif--}}

                    {{--<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter password">--}}
                        {{--<input class="input100" type="password" name="password"  placeholder="Password">--}}

                        {{--<span class="focus-input100"></span>--}}
                    {{--</div>--}}
                    {{--@if ($errors->has('password'))--}}
                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                    {{--@endif--}}

                    {{--<div class="wrap-input100 validate-input m-b-16" data-validate="Please confirm password">--}}
                        {{--<input class="input100" type="password" name="password_confirmation"  placeholder="Confirm Password">--}}

                        {{--<span class="focus-input100"></span>--}}
                    {{--</div>--}}
                    {{--@if ($errors->has('password_confirmation'))--}}
                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password_confirmation') }}</strong>--}}
                                    {{--</span>--}}
                    {{--@endif--}}


                    {{--<div class="text-right p-t-13 p-b-23">--}}

                        {{--<label>--}}
                        {{--<input type="checkbox" class="chck" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                        {{--</label>--}}
                        {{--<span class="txt1">--}}
							{{--Back to--}}
						{{--</span>--}}

                        {{--<a href="{{ route('login') }}" class="txt2">--}}
                            {{--Log in--}}
                        {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="container-login100-form-btn">--}}
                        {{--<button class="login100-form-btn">--}}
                            {{--New Password--}}
                        {{--</button>--}}
                    {{--</div>--}}

                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div id="frm1">
        <form method="POST" action="{{ route('password.request') }}">
            {{ csrf_field() }}
            <div style="text-align:center; margin-top:-10px; margin-bottom: 25px;">
             <span >
                 <h5>Reset Password</h5>
             </span>
            </div>
            <p>
                <input type ="email" id="user" name="email" placeholder="Email"  autocomplete="off">
            </p>
            <input type ="submit" id="okbtn" name="okbtn" value="RESET">
            <input type ="submit" id="cancelbtn" name="cancelbtn" value="CANCEL">
            <br />
            <br />
            <span style="margin-top: 5px;">
              <a  href="{{ route('login') }}">Login</a>
        </span>
            <br />
        </form>
    </div>
@stop