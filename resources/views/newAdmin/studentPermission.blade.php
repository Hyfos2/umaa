@extends('newAdmin.master')
@section('content')
    <div class="wrapper">
        @include('newAdmin.header')
        @include('newAdmin.aside')
        <div class="content-wrapper">
            <section class="content-header">
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Teachers</li>
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
                                            <h5 class="panel-title">Add Teacher</h5>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form" name="adddoc" method="POST" action="{{url('setStdPermission')}}">
                                                {{csrf_field()}}
                                                <input type="hidden" name="userType" value="3">
                                                <div class="form-group">
                                                    <label>
                                                      Permissions
                                                    </label>
                                                </div>

                                                <div class="row">

                                                    @foreach($data   as $item)
                                                    <div class="col-md-12 form-group">
                                                        <label for="doctorname">
                                                            {{$item->name}}
                                                            </label>
                                                        <input type="checkbox" name="permission[]" value="{{$item->id}}">
                                                    </div>
                                                        @endforeach
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12 form-group">
                                                        {{--@foreach($classes as $item)--}}
                                                            {{--<label for="doctorname">--}}
                                                                {{--{{$item->name}}--}}
                                                            {{--</label>--}}
                                                            {{--<input type="checkbox" name="classes[]" value="{{$item->id}}">--}}
                                                        {{--@endforeach--}}

                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-o btn-primary">
                                                    Submit
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="panel panel-white">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        @include('newAdmin.footer')
    </div>
@stop