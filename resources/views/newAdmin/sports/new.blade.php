{{--@extends('newAdmin.master')--}}
{{--@section('content')--}}
    {{--<div>--}}
        {{--@include('newAdmin.newAside')--}}
        {{--@include('newAdmin.alertMessages')--}}
        {{--<div class="page-container">--}}
            {{--@include('newAdmin.navHeader')--}}
            {{--<main class="main-content bgc-grey-100">--}}
                {{--<div id="mainContent">--}}
                    {{--<div class="row gap-20 masonry pos-r" style="position: relative; height: 1855px;">--}}
                        {{--<div class="masonry-sizer col-md-6">--}}

                        {{--</div>--}}
                        {{--<div class="masonry-item w-100" style="position: absolute; left: 0%; top: 0px;">--}}
                            {{--<div class="row gap-20">--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<div class="layers bd bgc-white p-20">--}}
                                        {{--<div class="layer w-100 mB-10">--}}
                                            {{--<button class="btn btn-primary" data-toggle="modal" data-target="#new-sport">Add Sport</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row gap-20">--}}
                            {{--<div class="masonry-item col-12" style="position: absolute; left: 0%;">--}}
                                {{--<div class="bd bgc-white">--}}
                                    {{--<div class="peers fxw-nw@lg+ ai-s">--}}
                                        {{--<div class="peer peer-greed w-70p@lg+ w-100@lg- p-20" style="height: 1600px;">--}}

                                            {{--<div id="formteachers-1" class="tab-pane fade in active">--}}
                                                {{--<div class="block-area grade" id="responsiveTable">--}}
                                                    {{--<div id="MeetingNotification"><span class="badge">School Sports</span></div>--}}
                                                    {{--<div class="table-responsive overflow">--}}
                                                        {{--<table class="table tile table-striped" id="schoolSportTable">--}}
                                                            {{--<thead>--}}
                                                            {{--<tr>--}}
                                                                {{--<th>Record Id</th>--}}
                                                                {{--<th>Sport Name</th>--}}
                                                                {{--<th>Created At</th>--}}
                                                                {{--<th>Action</th>--}}
                                                            {{--</tr>--}}
                                                            {{--</thead>--}}
                                                        {{--</table>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</main>--}}
        {{--</div>--}}
        {{--@include('newAdmin.sports.AddSport')--}}
        {{--@include('newAdmin.masterFooter')--}}

    {{--</div>--}}
{{--@stop--}}



@extends('newAdmin.master')
@section('content')
    <div>
        @include('newAdmin.newAside')
        @include('newAdmin.alertMessages')
        <div class="page-container">
            @include('newAdmin.navHeader')
            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="row gap-20 masonry pos-r" style="position: relative; height: 1855px;">
                        <div class="masonry-sizer col-md-6">

                        </div>
                        <div class="masonry-item w-100" style="position: absolute; left: 0%; top: 0px;">

                            <div class="row gap-20">
                                <div class="col-md-12">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#new-sport">Add Sport</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row gap-20">
                                <div class="masonry-item col-12" style="position: absolute; left: 0%;">
                                    <div class="bd bgc-white">
                                        <div class="peers fxw-nw@lg+ ai-s">
                                            <div class="peer peer-greed w-70p@lg+ w-100@lg- p-20" style="height: 1600px;">

                                                <div class="block-area grade" id="responsiveTable">
                                                    <div id="MeetingNotification"><span class="badge">School Sports</span></div>
                                                    <div class="table-responsive overflow">
                                                        <table class="table tile table-striped" id="schoolSportTable">
                                                            <thead>
                                                            <tr>
                                                                <th>Record Id</th>
                                                                <th>Sport Name</th>
                                                                <th>Created At</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                @include('newAdmin.sports.AddSport')
            </main>
            @include('newAdmin.masterFooter')
        </div>
    </div>
@stop

