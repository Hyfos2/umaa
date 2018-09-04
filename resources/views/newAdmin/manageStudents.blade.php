@extends('newAdmin.master')
@section('content')
    <div class="wrapper">
        @include('newAdmin.header')
        @include('newAdmin.aside')
        <div class="content-wrapper">
            <section class="content-header">
                @include('newAdmin.alertMessages')
            </section>
            <div class="container-fluid container-fullw bg-white">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="over-title margin-bottom-15 label label-primary pull-left">Manage Students</h5>
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
                                <div class="box-body"  style="margin-top:-15px;">
                                    <div class="direct-chat-messages">

                                        <table class="table table-hover" id="sample-table-1">
                                            <thead>
                                            <tr>
                                                <th class="center">Name</th>
                                                <th>Surname</th>
                                                <th>Email</th>
                                                <th>Creation Date</th>
                                                <th>Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $item)
                                                <tr>
                                                    <td class="center">{{ucwords($item->name)}}</td>
                                                    <td>{{ucfirst($item->surname)}}</td>
                                                    <td>{{$item->email}}</td>
                                                    <td>{{$item->created_at->diffForHumans()}}</td>
                                                    <td >
                                                        <a href="{{url('stdntprof/'.$item->id)}}"   data-toggle="tooltip" title="View Profile"><u>view</u> </a>     |
                                                        <a href="{{url('dctvtUser/'.$item->id)}}"  style="color:red;" data-toggle="tooltip" title="De-activate User"><u>de-activate </u></a>
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