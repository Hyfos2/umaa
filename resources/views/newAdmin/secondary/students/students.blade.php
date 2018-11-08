@extends('newAdmin.master')
@section('content')
<div>
    @include('newAdmin.newAside')
    @include('newAdmin.alertMessages')
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
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#new-student">Add Student</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row gap-20">
                            <div class="masonry-item col-12" style="position: absolute; left: 0%;">
                                <div class="bd bgc-white">
                                    <div class="peers fxw-nw@lg+ ai-s">
                                        <div class="peer peer-greed w-70p@lg+ w-100@lg- p-20" style="height: 1600px;">

                                            <div id="tabs">

                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a data-toggle="tab" href="#formstudents-1">Form One</a></li>
                                                    <li><a data-toggle="tab" href="#formstudents-2">Form Two</a></li>
                                                    <li><a data-toggle="tab" href="#formstudents-3">Form Three</a></li>
                                                    <li><a data-toggle="tab" href="#formstudents-4">Form Four</a></li>
                                                </ul>

                                                <div class="tab-content">

                                                    <div id="formstudents-1" class="tab-pane fade in active">
                                                        <div class="block-area grade" id="responsiveTable">
                                                            <div class="table-responsive overflow">
                                                                <table class="table tile table-striped" id="form-1studentTable">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Record Id</th>
                                                                        <th>Student Name</th>
                                                                        <th>Student Surname</th>
                                                                        <th>Email</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                </table>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    {{--@include('newAdmin.secondary.formOne')--}}
                                                    <div id="formstudents-2" class="tab-pane fade in active">
                                                        <div class="block-area grade" id="responsiveTable">
                                                            <div class="table-responsive overflow">
                                                                <table class="table tile table-striped" id="form-2studentTable">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Record Id</th>
                                                                        <th>Student Name</th>
                                                                        <th>Student Surname</th>
                                                                        <th>Email</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                </table>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    {{--@include('newAdmin.secondary.formTwo')--}}
                                                    <div id="formstudents-3" class="tab-pane fade in active">
                                                        <div class="block-area grade" id="responsiveTable">
                                                            <div class="table-responsive overflow">
                                                                <table class="table tile table-striped" id="form-3studentTable">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Record Id</th>
                                                                        <th>Student Name</th>
                                                                        <th>Student Surname</th>
                                                                        <th>Email</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                </table>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    {{--@include('newAdmin.secondary.formThree')--}}
                                                    <div id="formstudents-4" class="tab-pane fade in active">
                                                        <div class="block-area grade" id="responsiveTable">
                                                            <div class="table-responsive overflow">
                                                                <table class="table tile table-striped" id="form-4studentTable">
                                                                    <thead>
                                                                    <tr>
                                                                        <th>Record Id</th>
                                                                        <th>Student Name</th>
                                                                        <th>Student Surname</th>
                                                                        <th>Email</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                    </thead>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--@include('newAdmin.secondary.formFour')--}}
                                                </div>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
    </div>

   @include('newAdmin.secondary.students.addStudent')
    </main>
    @include('newAdmin.masterFooter')
</div>
</div>
@stop
