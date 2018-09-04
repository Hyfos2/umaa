
<div class="row">

    <div class="col-md-2">

    </div>
    <div class="col-md-3">
        <div>
            <img id="picture" src="{{asset('img/download.jpg')}}">
        </div>

        <table class="responsive" style="margin-top:10px; margin-left:45px;">
            <tr>
                <th>Name</th>
                <td>{{ucfirst($user->name)}}</td>
            </tr>
            <tr>
                <th>Surname</th>
                <td>{{ucfirst($user->surname)}}</td>
            </tr>

            <tr>
                <th>Gender</th>
                <td>{{ucfirst($user->gender)}}</td>
            </tr>
        </table>
    </div>

    <div class="col-md-5 uploadPhoto">

        <form class="form-horizontal"  method="POST" action="{{ url('settings') }}">
            {{--{{method_field('PUT')}}--}}
            {{ csrf_field()}}
            <input type="hidden" value="{{$user->email}}" name="email">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-6 control-label">Upload Photo</label>
                <div class="col-md-12">
                    <input id="email" type="file" class="form-control" name="image" autocomplete="off" autofocus style="margin-bottom: 5px">
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group" >
                <div class="col-md-offset-3 col-md-10">
                    <button type="submit" type="button" class="btn btn-primary">
                        Upload Image
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-2"></div>


</div>



