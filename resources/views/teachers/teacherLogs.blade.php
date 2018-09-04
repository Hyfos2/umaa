@extends('newAdmin.master')
@section('content')
    <div class="wrapper">
        @include('newAdmin.header')
        @include('newAdmin.aside')
        <div class="content-wrapper">
            <section class="content-header">
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Teacher Logs</li>
                </ol>
            </section>

            <div class="container-fluid container-fullw bg-white">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="over-title margin-bottom-15">Teacher Logs</h5>
                        <p style="color:red;"></p>
                        <table class="table table-hover" id="sample-table-1">
                            <thead>
                            <tr>
                                <th class="center">Name</th>
                                <th>Creation Date</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            {{--@foreach($data as $item)--}}
                                {{--<tr>--}}
                                    {{--<td class="center">{{$item->name}}</td>--}}
                                    {{--<td>{{$item->created_at->diffForHumans()}}</td>--}}

                                    {{--<td >--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include('newAdmin.footer')
    </div>
@stop