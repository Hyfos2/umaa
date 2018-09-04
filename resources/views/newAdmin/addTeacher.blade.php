@extends('newAdmin.master')
@section('content')
    <div class="wrapper">
    @include('newAdmin.header')
    @include('newAdmin.aside')
        <div class="content-wrapper">
            <section class="content-header">
                @include('newAdmin.alertMessages')
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
                                            <form role="form" name="adddoc" method="POST" action="{{route('register')}}">
                                                {{csrf_field()}}

                                                <input type="hidden" name="userTypeId" value="{{$userTypeId}}">
                                                <div class="form-group">
                                                    <label for="doctorname">
                                                        Name
                                                    </label>
                                                    <input type="text" name="name" class="form-control"  placeholder="Enter  Name" autocomplete="off">
                                                </div>


                                                <div class="form-group">
                                                    <label for="doctorname">
                                                        Surname
                                                    </label>
                                                    <input type="text" name="surname" class="form-control"  placeholder="Enter  Surname" autocomplete="off">
                                                </div>


                                                <div class="form-group">
                                                    <label for="DoctorSpecialization">
                                                        Gender
                                                    </label>
                                                    <select name="gender" class="form-control">
                                                        <option value="">Select Gender</option>

                                                        <option value="male">
                                                            Male
                                                        </option>
                                                        <option value="female">
                                                            Female
                                                        </option>


                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="doctorname">
                                                        Email
                                                    </label>
                                                    <input type="email" name="email" class="form-control"  placeholder="Enter Email" autocomplete="off">
                                                </div>
                                                <div>
                                                    <label>
                                                        <u>Classes</u>
                                                    </label>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 form-group" >
                                                        @foreach($classes as $item)
                                                            <label for="doctorname">
                                                                {{$item->name}}
                                                            </label>
                                                            <input type="radio" name="classes" value="{{$item->id}}">
                                                        @endforeach

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>
                                                        <u>Zimsec Subjects</u>
                                                    </label>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 form-group" style="margin-bottom:13px;">
                                                        @foreach($zimsec as $item)
                                                            <label for="doctorname">
                                                                {{$item->name}}
                                                            </label>

                                                            <input type="checkbox" name="zimsec[]" value="{{$item->id}}">
                                                        @endforeach

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>
                                                        <u>Cambridge Subjects</u>
                                                    </label>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12 form-group" style="margin-bottom:13px;">
                                                        @foreach($cambridge as $item)
                                                            <label for="doctorname">
                                                                {{$item->name}}
                                                            </label>

                                                            <input type="checkbox" name="cambridge[]" value="{{$item->id}}">
                                                        @endforeach

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

                    </div>
                </div>

            </div>
        </div>
        @include('newAdmin.footer')
    </div>
@stop