<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
     
      <form class="form-horizontal" action="{{ url('updatePwd') }}" method="post" id="changePwdForm">
          {{--{!! Form::open(['url' => 'updateSheet', 'method' => 'put', 'class' => 'form-horizontal', 'id'=>"updateFileForm" ,'files'=>'true']) !!}--}}
      {{ csrf_field() }}
          <input type="hidden" value="{{$user->email}}" name="email">

       {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
        {{--<label for="email" class="col-md-6 control-label">Current Password</label>--}}

                            {{--<div class="col-md-12">--}}
                                {{--<input id="email" type="password" class="form-control" name="old_password" autocomplete="off" autofocus style="margin-bottom: 5px">--}}
                                     {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}

                            {{----}}
                        {{--</div>--}}

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-6 control-label">New Password</label>

                            <div class="col-md-12">
                                <input  type="password" class="form-control" name="password" autocomplete="off"   autofocus style="margin-bottom: 5px">
                                
                                     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            
                        </div>


        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
        {{--<label for="password" class="col-md-6 control-label">Confirm Password</label>--}}

                            {{--<div class="col-md-12">--}}
                                {{--<input  type="password" class="form-control" name="confirm_password"  autocomplete="off"  autofocus style="margin-bottom: 5px">--}}
                                {{----}}
                                     {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}

                            {{----}}
                        {{--</div>--}}

      <div class="form-group" >
          <div class="col-md-offset-3 col-md-10">
              <button type="submit" type="button" class="btn btn-primary">
                  Update Password
              </button>
          </div>
      </div>
</form>

      </div>       
      <div class="col-md-4"></div>
</div>


