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
                                    <li  class="active"><a href="javascript:void(0);">User Logs</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


         <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                
                <div class="clearfix"></div>

                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                 <div class="card-header">
                                <strong class="card-title">User Logs</strong>
                            </div>
                                <div class="card-body">


                <table id="userLogs" class="display" style="width:100%;margin-top:10px;">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Device Information</th>
                                    <th>Device Ip Address</th>
                                    <th>Last Login</th>
                                    <th>Last Logout</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
        
                            <tbody>
                                @foreach($user as $item)
                                <tr>
                                    <td>{{$item->user->name}}</td>
                                    <td>{{$item->user->surname}}</td>
                                    <td>{{$item->deviceInformation}}</td>
                                    <td>{{$item->deviceIpAddress}}</td>
                                    <td>{{$item->logIn}}</td>
                                    <td>{{$item->logOut}}</td>
                                    <td>
                                         <a class="btn btn-outline-info"  data-toggle="tooltip" title="view more activites" href="{{url('user-activity-log/'.$item->user->id)}}">view</a>
                                     </td>
                                </tr>
                                @endforeach

                            </tbody>
    </table>



                                </div>
                            </div> 
                        </div> 
                    </div>
                </div>
            
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.footer')
    </div>
@stop
@push('scripts')
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#userLogs').DataTable(
            {
          
          columnDefs: [],
          "iDisplayLength": 10,
           "aaSorting": [],
           "processing": true,
            });
    });
</script>
@endpush