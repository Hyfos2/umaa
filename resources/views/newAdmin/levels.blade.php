@extends('newAdmin.master')
@section('content')

    <div class="wrapper">
        @include('newAdmin.header')
        @include('newAdmin.aside')
        <div class="content-wrapper">
            <div>
                <div class="container-fluid container-fullw bg-white" >
                    <div class="row">
                        <div class="col-md-12" style="margin-top:10px;">

                            <div class="row margin-top-30">
                                <div class="col-lg-8 col-md-12">
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">New</h5>
                                        </div>
                                        <div class="panel-body">

                                            <form role="form" name="adddoc" method="POST" action ="{{url('new-subLevel')}}">

                                                {{ csrf_field() }}

                                                <div class="form-group">
                                                    <label for="DoctorSpecialization">
                                                        Level
                                                    </label>
                                                    <select name="level" class="form-control" required="required">
                                                        <option value="">Select Level</option>
                                                        @foreach($level as $item)
                                                            <option value="{{$item->id}}">
                                                                {{$item->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>


                                                <div class="form-group">

                                                    <label for="fess">
                                                      Sub Level
                                                    </label>
                                                    <input type="text"  autocomplete="off" name="name" class="form-control"  placeholder="Enter Sub Level">
                                                </div>

                                                <button type="submit"  class="btn btn-o btn-primary">
                                                    Submit
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid container-fullw bg-white">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="over-title margin-bottom-15 label label-primary pull-left">Manage Sub Levels</h5>

                        <div class='col-md-12'>
                            <!-- DIRECT CHAT -->
                            <div id="myDirectChat" class="box box-warning direct-chat direct-chat-warning">
                                <div class="box-header with-border">
                                    <h3 class="box-title"></h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
                                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body"  style="margin-top:-9px;">
                                    <div class="direct-chat-messages">

                                        <table class="table table-hover" id="sample-table-1">
                                            <thead>
                                            <tr>
                                                <th class="center">Sub Level Name</th>
                                                <th>Level</th>
                                                <th>Creation Date</th>
                                                <th>Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $item)
                                                <tr>
                                                    <td class="center">{{$item->name}}</td>
                                                    <td>{{$item->levelId}}</td>
                                                    <td>{{$item->created_at->diffForHumans()}}</td>

                                                    <td >
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>


                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">

                                </div><!-- /.box-footer-->
                            </div><!--/.direct-chat -->
                        </div>


                    </div>
                </div>
            </div>
        </div>
        @include('newAdmin.footer')
    </div>
@stop