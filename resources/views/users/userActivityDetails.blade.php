@extends('admin.master')
@section('content')
<div id="right-panel" class="right-panel">
       @include('admin.header')
       <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="{{url('admin-dashboard')}}">Dashboard</a></li>
                                    <li><a href="{{url('userLogs')}}">User Logs</a></li>
                                       <li  class="active"><a href="javascript:void(0);">User Activities</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row"> 
                            <div class="col-lg-6 col-xl-12">
                                <div class="card br-0"> 
                                     <div class="card-header">
                                <strong class="card-title">Logged in Dates for <u>{{$user->name}} {{$user->surname}}</u></strong>
                                            </div>

                                    <div class="card-body" style="height: 480px">
                                        <div class="chart-container ov-h">
                                            
                                            <div id="userActivites"></div>
                                    <div id="listB"></div>
                                    <div id="listC"></div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div> 
        <div id="userID" style="display: none;">{{$id}}</div>
        @include('admin.footer')
    </div>
@stop
@push('scripts')
<script type="text/javascript">
     var userID  =document.getElementById("userID").innerHTML;
            webix.ready(function(){
                  webix.ui({
                    container:"userActivites",
                        view:"grouplist",
                        scroll:true,
                        width:870,
                        height:400,
                         url:"/activity-details/"+userID,
                         ready:function(){
                                if (!this.count()){ // if no data is available
                                    webix.extend(this, webix.OverlayBox);
                                    this.showOverlay("<div style='...'>There is no data</div>");
                                }
                            }
                 });
            });
     webix.extend($$("userActivites"), webix.ProgressBar);
     $$("userActivites").showProgress({
                        type:"bottom",
                        delay:3000,
                        hide:true
                    });
</script>
@endpush