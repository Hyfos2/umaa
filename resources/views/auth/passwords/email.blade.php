@extends('auth.master')
@section('content')
    <div class="peers ai-s fxw-nw h-100vh">
        <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style="background-image:url(../img/05.jpg)">
            <div class="pos-a centerXY">
                <div class="bgc-white bdrs-50p pos-r" style="width:120px;height:120px">
                    <img class="pos-a centerXY" src="{{asset('img/logo.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r ps" style="min-width:320px">
            <h4 class="fw-300 c-grey-900 mB-40">Reset Password</h4>
            <form method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="text-normal text-dark">Email</label>
                    <input  name ="email" type="email" class="form-control" placeholder="student@wiseowlschool.co.zw" autocomplete="off">
                    @if ($errors->has('email'))
                        <span>
                    <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <div style="margin-bottom:10px;">
                        <a  href="{{ route('login') }}"> <u>Back to Login</u></a>
                    </div>

                    <div class="peers ai-c jc-sb fxw-nw">
                        <div class="peer">
                            <button class="btn btn-primary">Reset Password</button>

                        </div>

                    </div>
                </div>
            </form>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;">

                </div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;">

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('vendor.js.download')}}">
    </script>
    <script type="text/javascript" src="{{asset('bundle.js.download')}}"></script>
@stop