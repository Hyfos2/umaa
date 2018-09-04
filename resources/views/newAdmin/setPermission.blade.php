@extends('newAdmin.master')
@section('content')
    <div class="wrapper">
        @include('newAdmin.header')
        @include('newAdmin.aside')
        <div class="content-wrapper">
            <section class="content-header">
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Levels</li>
                </ol>
            </section>
            <div>
                <div class="container-fluid container-fullw bg-white">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="row margin-top-30">
                                <div class="col-lg-8 col-md-12">
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">New</h5>
                                        </div>
                                        <div class="panel-body">

                                            <form role="form" name="adddoc" method="POST" action ="{{url('new-permission')}}">
                                                {{ csrf_field() }}

                                                <div class="form-group">

                                                    <label for="fess">
                                                       Name
                                                    </label>
                                                    <input type="text"  autocomplete="off" name="name" class="form-control"  placeholder="Name">
                                                </div>
                                                <div class="form-group">

                                                    <label for="fess">
                                                        Display Name
                                                    </label>
                                                    <input type="text"  autocomplete="off" name="display_name" class="form-control"  placeholder="Display Name">
                                                </div>
                                                <div class="form-group">

                                                    <label for="fess">
                                                        Description
                                                    </label>
                                                    <input type="text"  autocomplete="off" name="description" class="form-control"  placeholder="Description">
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
                        <h5 class="over-title margin-bottom-15">Manage Sub Levels</h5>
                        <p style="color:red;"></p>
                        <table class="table table-hover" id="sample-table-1">
                            <thead>
                            <tr>
                                <th class="center"> Name</th>
                                <th>Display Name</th>
                                <th>Description</th>
                                <th>Creation Date</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $item)
                                <tr>
                                    <td class="center">{{$item->name}}</td>
                                    <td>{{$item->display_name}}
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->created_at->diffForHumans()}}</td>

                                    <td >
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include('newAdmin.footer')
    </div>
@stop