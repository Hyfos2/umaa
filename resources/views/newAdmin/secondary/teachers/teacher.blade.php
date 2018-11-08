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
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#new-student">Add Teacher</button>
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#new-time-table">Create Time table</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row gap-20">
                                <div class="masonry-item col-12" style="position: absolute; left: 0%;">
                                    <div class="bd bgc-white">
                                        <div class="peers fxw-nw@lg+ ai-s">
                                            <div class="peer peer-greed w-70p@lg+ w-100@lg- p-20" style="height: 1600px;">
                                                <div id="MeetingNotification" style="margin-bottom: 10px"><span class="badge">School Teachers</span></div>
                                                <div id="tabs">

                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a data-toggle="tab" href="#formteachers-1">Form One</a></li>
                                                        <li><a data-toggle="tab" href="#formteachers-2">Form Two</a></li>
                                                        <li><a data-toggle="tab" href="#formteachers-3">Form  Three</a></li>
                                                        <li><a data-toggle="tab" href="#formteachers-4">Form Four</a></li>
                                                    </ul>

                                                    <div class="tab-content">

                                                        @include('newAdmin.secondary.levels.formOne')
                                                        @include('newAdmin.secondary.levels.formTwo')
                                                        @include('newAdmin.secondary.levels.formThree')
                                                        @include('newAdmin.secondary.levels.formFour')
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

                @include('newAdmin.secondary.teachers.addTeacher')
                @include('newAdmin.secondary.teachers.timetable')
            </main>
            @include('newAdmin.masterFooter')
        </div>
    </div>
@stop