@extends('newAdmin.master')
@section('content')
    <div>
        @include('newAdmin.newAside')
        <div class="page-container">
            @include('newAdmin.navHeader')
            @include('newAdmin.alertMessages')
            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4" id="calenderEvents">
                                <div class="bdrs-3 ov-h bgc-white bd">
                                    <div class="bgc-deep-purple-500 ta-c p-30">
                                        <h1 class="fw-300 mB-5 lh-1 c-white">{{curreantDate()}}<span class="fsz-def"></span>
                                        </h1><h3 class="c-white">{{presentDay()}}</h3>
                                    </div>
                                    <div class="pos-r">
                                        <button type="button" class="mT-nv-50 pos-a r-10 t-2 btn cur-p bdrs-50p p-0 w-3r h-3r btn-warning" data-toggle="modal" data-target="#calendar-edit">
                                            <i class="ti-plus">

                                            </i>
                                        </button>
                                        <ul class="m-0 p-0 mT-20 ">
                                            @foreach($events as $event)

                                                @if(count($events) ===0)
                                                <li class="bdB peers ai-c jc-sb fxw-nw">

                                                </li>
                                                    @else
                                                    <li class="bdB peers ai-c jc-sb fxw-nw">

                                                        <a class="td-n p-20 peers fxw-nw mR-20 peer-greed c-grey-900" href="javascript:void(0);">
                                                            <div class="peer mR-15">
                                                                <i class="fa fa-fw fa-clock-o c-green-500">
                                                                </i>
                                                            </div>
                                                            <div class="peer">
                                                                <span class="fw-600">{{ucfirst($event->title)}}</span>
                                                                <div><small><i>{{ucfirst($event->description)}}</i></small></div>

                                                                <div class="c-grey-600">
                                                                    <span class="c-grey-700">{{date('d-M-y',strtotime($event->start))}} to {{date('d-M-y',strtotime($event->end))}}</span>
                                                                    <i></i>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <form action="" id="eventForm" name="eventForm">
                                                           {{csrf_field()}}

                                                        <div class="peers mR-15">
                                                            <div class="peer">
                                                                {{--<a href="javascript:void(0)" class="td-n c-deep-purple-500 cH-blue-500 fsz-md p-5" onclick="testFxn()">--}}
                                                                    {{--<i class="ti-pencil">--}}

                                                                    {{--</i>--}}
                                                                {{--</a>--}}
                                                            </div>
                                                            <div class="peer">
                                                                <a href="javascript:void(0)" class="td-n c-red-500 cH-blue-500 fsz-md p-5" onclick="deleteEvent({{$event->id}})">


                                                                        <i class="ti-trash">
                                                                        </i>


                                                                </a>
                                                            </div>
                                                        </div>
                                                        </form>


                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div id="full-calendar" class="fc fc-unthemed fc-ltr">

                                    <div class="fc-view-container" style=""></div>

                                    {{--creata an event modal--}}
                                    <div class="modal fade" id="calendar-edit">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="bd p-15">
                                                    <h5 class="m-0">Add Event</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form role="form"  method="POST" action ="{{url('calendar')}}">
                                                        {{ csrf_field() }}
                                                        <div class="form-group">
                                                            <label class="fw-500">Event title</label>
                                                            <input type ="text" class="form-control bdc-grey-200" name="event" autocomplete="off">
                                                        </div><div class="row">
                                                            <div class="col-md-6">
                                                                <label class="fw-500">Start</label>
                                                                <div class="timepicker-input input-icon form-group">
                                                                    <div class="input-group">
                                                                        {{--<div class="input-group-addon bgc-white bd bdwR-0">--}}
                                                                            {{--<i class="ti-calendar">--}}
                                                                            {{--</i>--}}
                                                                        {{--</div>--}}
                                                                        <input type="text" class="form-control bdc-grey-200 start-date" name="start" placeholder="Datepicker" data-provide="datepicker" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="fw-500">End</label>
                                                                <div class="timepicker-input input-icon form-group">
                                                                    <div class="input-group">
                                                                        {{--<div class="input-group-addon bgc-white bd bdwR-0">--}}
                                                                            {{--<i class="ti-calendar"></i>--}}
                                                                        {{--</div>--}}
                                                                        <input type="text" class="form-control bdc-grey-200 end-date"  name ="end" placeholder="Datepicker" data-provide="datepicker" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="fw-500">Event Description</label>
                                                            <textarea type ="text" class="form-control bdc-grey-200" rows="5" name="description" autocomplete="off" style="padding-left: -5px;">
                                        </textarea>
                                                        </div>

                                                        <div class="text-right">
                                                            <button class="btn btn-primary cur-p" data-dismiss="modal">Close</button>
                                                            <button type="submit"  class="btn btn-primary cur-p">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- End of modal--}}
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </main>

            @include('newAdmin.masterFooter')
            <div id="snackbar">deleting an event...</div>
        </div>
    </div>
@stop

