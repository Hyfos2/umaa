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
                                    <li><a href="{{url('education-dashboard')}}">Dashboard</a></li>
                                    <li  class="active"><a href="javascript:void(0);">Subjects</a></li>
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

                <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-12" style="padding:3px;">
                        <input class="btn btn-outline-info" type="button"  data-toggle="modal" data-target="#new-subject"  value="New Subject">
                           <!--  <input class="btn btn-outline-info" type="button" value="Activate">
                            <input class="btn btn-outline-info" type="button" value="De-activate"> -->
                        
                    </div>
                </div>
            </div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                <strong class="card-title">All Subjects</strong>
                            </div>

                                <div class="card-body">


                                   
                                <table id="subjects" class="display" style="width:100%;margin-top:10px;">
                                        <thead>
                                            <tr>
                                                <th>Subject Name</th>
                                                <th>Subject Code</th>
                                                <th>Board</th>
                                                <th>Level</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                            @foreach($subjects  as $i)
                                        <tbody>
                                            <tr>
                                                <td>{{$i->name}}</td>
                                                <td>{{$i->subjectCode}}</td>
                                                <td>{{$i->board->name}}</td>
                                                <td>{{$i->level->name}}</td>
                                                <td>
                                                      <a class="btn btn-outline-info" href="javascript:void(0);" onclick="deleteFxn();">edit</a>
                                                </td>
                                              
                                            </tr>
                                        </tbody>
                            @endforeach

                        </table>


                                </div>
                            </div> 
                        </div> 
                    </div>
                </div>
            
            </div>
        </div>
        <div class="clearfix"></div>
              <div id="snackbar">Coming soon.</div>
        @include('admin.footer')
        @include('education.subjects.new')
    </div>

@stop
@push('scripts')
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#subjects').DataTable(
            {
              columnDefs: [],
              "iDisplayLength": 10,
               "aaSorting": [],
               "processing": true,
            });
    });
</script>
@endpush
