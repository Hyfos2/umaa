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
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-8">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <span class="badge">{{$userDetails->name[0]}} {{$userDetails->surname}}'s Permissions</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
            @include('newAdmin.masterFooter')
        </div>
    </div>
@stop
