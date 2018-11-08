@extends('newAdmin.master')
@section('content')
    <div>
        @include('newAdmin.newAside')
        <div class="page-container">
            @include('newAdmin.alertMessages')
            @include('newAdmin.navHeader')

            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="row gap-20">
                        <div class="col-md-3">
                            <h6 class="badge"> {{$userDetails->name[0]}}.{{$userDetails->surname}}'s Activity Details</h6>
                        </div>
                    </div>

                    <div class="row gap-20">


                        <div class="col-md-12">

                            <div class="layers bd bgc-white p-20">
                                <div class="layer w-100 mB-10">
                                    <h6 class="badge"> Log in Graph</h6>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="layers bd bgc-white p-20">
                                <div class="layer w-100 mB-10">
                                    <h6 class="badge">Activity History</h6>
                                </div>

                                {{--<div class="container mt-10">--}}
                                    <div class="col-md-12">

                                            <div class="col-md-6">
                                                <div class="panel-group" id="accordion8" role="tablist" aria-multiselectable="true">

                                                    @if(empty($latestActivities))
                                                    <div class="panel panel-default" style="display: none">
                                                        <div class="panel-heading" role="tab" id="headingOne8">
                                                            <h4 class="panel-title">
                                                                <a role="button" data-toggle="collapse" data-parent="#accordion8" href="#collapseOne8" aria-expanded="true" aria-controls="collapseOne8">
                                                                   Today
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseOne8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne8">
                                                            <div class="panel-body">
                                                                @foreach($latestActivities as $item)
                                                                <ul class="list-group">
                                                                    <li class="list-group-item">{{$item->name}}</li>
                                                                </ul>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                        @else
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingOne8">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse" data-parent="#accordion8" href="#collapseOne8" aria-expanded="true" aria-controls="collapseOne8">
                                                                        Today
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne8">
                                                                <div class="panel-body">
                                                                    @foreach($latestActivities as $item)
                                                                        <a href="javascript:void(0);">
                                                                            <ul class="list-group" id="activityDetails">
                                                                               <li class="list-group-item">{{$item->name}}</li>
                                                                            </ul>
                                                                        </a>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif


                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingTwo8">
                                                            <h4 class="panel-title">
                                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion8" href="#collapseTwo8" aria-expanded="false" aria-controls="collapseTwo8">
                                                                     Older
                                                                </a>
                                                            </h4>
                                                        </div>

                                                        <div id="collapseTwo8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                            <div class="panel-body">
                                                                @foreach($oldActivities as $item)
                                                                    <a href="javascript:void(0);"  onClick="getActivityInfo({{$item->id}});">
                                                                <ul class="list-group " >
                                                                    <li class="list-group-item" >{{$item->name}} <i class="badge">[created at - {{$item->date}}]</i></li>
                                                                </ul>
                                                                    </a>
                                                                @endforeach
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                            <table style="width:100%;margin-top:10px;" >
                                                <tr>
                                                    <th id="date"><u></u></th>
                                                </tr>
                                            </table>
                                            <table style="width:100%;margin-top:45px;">
                                                <tr>
                                                    <th id="date"></th>
                                                </tr>
                                                <tr>
                                                    <td id="name"></td>
                                                </tr>
                                                <tr>
                                                    <td id="deviceInfo"></td>
                                                </tr>
                                                <tr>
                                                    <td id="IpAdress"></td>
                                                </tr>
                                                <tr>
                                                    <td id="physicalLocation"></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                {{--</div>--}}


                                {{--<div class="panel-group col-md-4">--}}
                                    {{--<div class="panel panel-default">--}}
                                        {{--<div class="panel-heading">--}}
                                            {{--<h4 class="panel-title">--}}
                                                {{--<a data-toggle="collapse" href="#collapse1">Today</a>--}}
                                            {{--</h4>--}}
                                        {{--</div>--}}
                                        {{--<div id="collapse1" class="panel-collapse collapse">--}}
                                            {{--<ul class="list-group">--}}
                                                {{--<li class="list-group-item">One</li>--}}
                                                {{--<li class="list-group-item">Two</li>--}}
                                                {{--<li class="list-group-item">Three</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-8">shgdsgdhsgdgh</div>--}}
                            </div>

                        </div>
                    </div>

                </div>
            </main>
            @include('newAdmin.masterFooter')
        </div>
    </div>
@stop

