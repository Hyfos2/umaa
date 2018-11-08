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
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#new-subject">Add Subject</button>
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
                                                        <li class="active"><a data-toggle="tab" href="#cambridgeSubjects">Cambridge Subjects</a></li>
                                                        <li><a data-toggle="tab" href="#zimsecSubjects">Zimsec Subjects</a></li>
                                                    </ul>

                                                    <div class="tab-content">
                                                        @include('newAdmin.subjects.cambridge')
                                                        @include('newAdmin.subjects.zimsec')
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
                @include('newAdmin.subjects.newSubject')
            </main>
            @include('newAdmin.masterFooter')
        </div>
    </div>
@stop
