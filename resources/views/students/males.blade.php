@extends('internal.welcome')
@section('content')

    @include('newAdmin.alertMessages')
<div class="row">


    <div class="col-md-3">
    </div>

	<div class="col-md-6">

		<div class="card" id="bestStudents">
			<div class="well"><span style="margin:20px 0 -5px 10px;"><strong><u>Form {{$id}} Student Names</u></strong></span></div>
            <div class="card-body">
                <div class="card-block ">
                    @if(count($data) ==0)

                        <ul class="list-group" id="listGroup">
                            <li class="list-group-item grpList">
                                <h6><strong>No student names at the moment</strong></h6>
                            </li>
                        </ul>
                        @else
                    @foreach($data as $item)
             <ul class="list-group" id="listGroup">
            <li class="list-group-item grpList">
                <div id="stdntName">
                    <strong> {{ucfirst($item->username)}}   {{ucfirst($item->surname)}}</strong>
                </div>
                <div id="stdntBtn">
                    {{--<a   class="btn btn-primary studentBtn"  href="{{url('report/'.$item->stdntId)}}">Report</a>--}}
                    <a   class="btn btn-primary generateBtn" href="{{url('recordMarks/'.$item->stdntId.'/'.$item->subId)}}">Record marks</a>
                </div>
            </li>
        </ul>
                    @endforeach
                        @endif
                </div>
            </div>
        </div>
	</div>
        <div class="col-md-3">
		</div>
</div>
@stop