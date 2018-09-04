@extends('newAdmin.master')
@section('content')
    <div>
        @include('newAdmin.newAside')
        {{--@include('newAdmin.alertMessages')--}}
        <div class="page-container">
            @include('newAdmin.navHeader')
            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="row gap-20 masonry pos-r" style="position: relative; height: 1855px;">
                        <div class="masonry-sizer col-md-6">

                        </div>
                        <div class="masonry-item w-100" style="position: absolute; left: 0%; top: 0px;">
                            <div class="row gap-20">
                                <div class="col-md-12">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#new-primary-student">Add Student</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="modal fade" id="new-primary-student">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="bd p-15">
                                <h5 class="m-0">Add Student</h5>
                            </div>
                            <div class="modal-body">
                                <form role="form"  method="POST" action ="{{route('register')}}">
                                    {{ csrf_field() }}
                                    <input type ="hidden" value="{{$schoolLevel->id}}" name="schoolLevel" >
                                    <input type ="hidden" value="{{$type}}" name="userTypeId" >
                                    <div class="form-group">
                                        <input type ="text" class="form-control bdc-grey-200"  placeholder="Name" name="name" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <input type ="text" class="form-control bdc-grey-200"  placeholder="Surname" name="surname" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <input type ="email" class="form-control bdc-grey-200"  placeholder="Email" name="email" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <select name="gender" class="form-control bdc-grey-200">
                                            <option value="">Select Gender</option>
                                            <option value="Female">
                                                Female
                                            </option>
                                            <option value="Male">
                                                Male
                                            </option>
                                        </select>
                                    </div>

                                        <div class="form-group">
                                            <div class="timepicker-input input-icon form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon bgc-white bd bdwR-0">
                                                        <i class="ti-calendar">
                                                        </i></div>
                                                    <input type="text" class="form-control bdc-grey-200 start-date" name="dob" placeholder="Date of Birth" data-provide="datepicker" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>


                                    <div class="form-group">
                                        <input type ="text" class="form-control bdc-grey-200"  placeholder="Allergies" name="allergy" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <select name="level"  id ="level" class="form-control bdc-grey-200">
                                            <option value="">Select Grade</option>
                                            @foreach($data as $item)
                                            <option value="{{$item->id}}">
                                            {{$item->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select name="sublevel" id="subLevel" class="form-control bdc-grey-200">
                                            <option value="">Select Class</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input type ="text" class="form-control bdc-grey-200"  placeholder="Parent Name" name="parentname" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input type ="email" class="form-control bdc-grey-200"  placeholder="Parent Email" name="parentemail" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input type ="text" class="form-control bdc-grey-200"  placeholder="Parent Cellphone" name="cellphone" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input type ="text" class="form-control bdc-grey-200"  placeholder="Parent Address" name="address" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        @foreach($sports as $item)
                                            <label for="sports">
                                                {{$item->name}}
                                            </label>
                                            <input type="checkbox" name="sports[]" value="{{$item->id}}">
                                        @endforeach
                                    </div>

                                    <div class="text-right">
                                        <button class="btn btn-primary cur-p" data-dismiss="modal">Close</button>
                                        <button type="submit"  class="btn btn-primary cur-p">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            @include('newAdmin.masterFooter')
        </div>
    </div>
@stop