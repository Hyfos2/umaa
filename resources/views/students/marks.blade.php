@extends('internal.welcome')
@section('content')
<div class="row">
	<div class="col-md-4">
	</div>
	

		<div class="col-md-4">
			<div class="card" id="poorStudents">
           <span class="cardHeading"> <strong> Record {{$subName}} Marks</strong> </span>
            <div class="card-body">
                <div class="card-block ">

                     <form class="form-horizontal" method="POST" action="{{ url('newmark')}}">
                        {{ csrf_field()}}

                         <input type="hidden"  name ="email" value="{{$userDetails->email}}"/>
                         <input type="hidden"  name ="sub" value="{{$sub}}"/>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-10 col-md-offset-2">
                                <label for="email">Student name</label>
                                <input  type="text" class="form-control" name="name" value="{{ ucfirst($userDetails->name) }} {{ ucfirst($userDetails->surname)}}" disabled>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mark') ? ' has-error' : '' }}">
                            <div class="col-md-10 col-md-offset-2">
                                 <label for="mark">Mark</label>
                                <input id="mark" type="text" class="form-control" name="mark">

                                @if ($errors->has('mark'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mark') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-10 col-md-offset-2">
                                <label for="password">Comment</label>
                                <input id="comment" type="text" class="form-control" name="comment">

                                @if ($errors->has('comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary recordBtn" style="margin-bottom: 5px; margin-right:;">
                                    Record
                                </button>
                            </div>
                        </div>
                    </form>

                    
                </div>
            </div>
        </div>
		</div>

        <div class="col-md-3">
    </div>
</div>

@stop