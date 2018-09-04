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
                                        <h5 class="panel-title">Add Student</h5>
                                    </div>
                                    <div class="panel-body">

                                        <form role="form" name="adddoc" method="POST" action ="{{route('register')}}">

                                            {{ csrf_field() }}
                                            <input type="hidden" name="userTypeId" value="{{$userTypeId}}">
                                            <input type="hidden" name="schoolLevel" value="2">
                                            {{--<input type="hidden" name="subUserTypeId" value="{{$subTypeId}}">--}}

                                            <div class="form-group">
                                                <label for="doctorname">
                                                    Name
                                                </label>
                                                <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Enter  Name">
                                            </div>

                                            <div class="form-group">
                                                <label for="doctorname">
                                                    Surname
                                                </label>
                                                <input type="text" name="surname" class="form-control" autocomplete="off" placeholder="Enter  Surname">
                                            </div>

                                            <div class="form-group">
                                                <label for="DoctorSpecialization">
                                                    Gender
                                                </label>
                                                <select name="gender" class="form-control" required="required">
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
                                                <label for="DoctorSpecialization">
                                                    Mode of Entry
                                                </label>
                                                <select name="moe" class="form-control" required="required">
                                                    <option value="">Select MOE</option>

                                                    @foreach($entype as $item)
                                                        <option value="{{$item->id}}">
                                                            {{$item->name}}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="doctorname">
                                                    Date of Birth
                                                </label>
                                                <input type="text" name="dob" class="form-control" autocomplete="off" placeholder="Enter Date of Birth">
                                            </div>

                                            <div class="form-group">
                                                <label for="fess">
                                                    Email
                                                </label>
                                                <input type="text" autocomplete="off" name="email" class="form-control"  placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="fess">
                                                    Allergies
                                                </label>
                                                <input type="text" autocomplete="off" name="allergy" class="form-control"  placeholder="Enter allergy">
                                            </div>

                                            <div class="form-group">
                                                <label for="DoctorSpecialization">
                                                    Level
                                                </label>
                                                <select name="level"  id ="level" class="form-control">
                                                    <option value="">Select Level</option>
                                                    @foreach($levels as $item)
                                                        <option value="{{$item->id}}">
                                                            {{$item->name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="DoctorSpecialization">
                                                    Sub Level
                                                </label>

                                                <select name="sublevel" id="subLevel" class="form-control" required="required">
                                                    <option value="">Select Sub Level</option>

                                                    <option value="">
                                                    </option>

                                                </select>
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
                                            <div class="form-group">
                                                <label>
                                                    <u>Sports</u>
                                                </label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    @foreach($sports as $item)
                                                        <label for="doctorname">
                                                            {{$item->name}}
                                                        </label>

                                                        <input type="checkbox" name="sports[]" value="{{$item->id}}">
                                                    @endforeach

                                                </div>
                                            </div>
                                            <div class="form-group">

                                                <label for="fess">
                                                    Parent Name
                                                </label>
                                                <input type="text" autocomplete="off" name="parent" class="form-control"  placeholder="Enter Parent Name">
                                            </div>
                                            <div class="form-group">

                                                <label for="fess">
                                                    Parent Email
                                                </label>
                                                <input type="text"  autocomplete="off" name="parentemail" class="form-control"  placeholder="Enter Parent Email">
                                            </div>
                                            <div class="form-group">

                                                <label for="fess">
                                                    Parent phone
                                                </label>
                                                <input type="text" autocomplete="off" name="phone" class="form-control"  placeholder="Enter Parent Phone">
                                            </div>
                                            <div class="form-group">

                                                <label for="fess">
                                                    Parent Address
                                                </label>
                                                <input type="text" autocomplete="off" name="address" class="form-control"  placeholder="Enter Address">
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
        </div>
        @include('newAdmin.footer')
    </div>
@stop
{{--@push('scripts')--}}
    {{--<script>--}}
        {{----}}
    {{--</script>--}}
{{--@endpush--}}