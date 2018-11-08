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
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#new-admin">Add Admin</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row gap-20">
                                <div class="masonry-item col-12" style="position: absolute; left: 0%;">
                                    <div class="bd bgc-white">
                                        <div class="peers fxw-nw@lg+ ai-s">
                                            <div class="peer peer-greed w-70p@lg+ w-100@lg- p-20" style="height: 1600px;">

                                                <div id="formteachers-1" class="tab-pane fade in active">
                                                    <div class="block-area grade" id="responsiveTable">
                                                        <div id="MeetingNotification"><span class="badge">Admin Users information</span></div>
                                                        <div class="table-responsive overflow">



                                                            <table class="table tile table-striped" id="adminUsersTable">
                                                                <thead>
                                                                <tr>
                                                                    <th>Record Id</th>
                                                                    <th>User Name</th>
                                                                    <th>User Surname</th>
                                                                    <th>Email</th>
                                                                    <th>Gender</th>
                                                                    <th>Action</th>

                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                               <!--  @foreach($admins  as $admin)
                                                                <tr>
                                                                    <td>{{$admin->id}}</td>
                                                                    <td>{{$admin->user->name}}</td>
                                                                    <td>{{$admin->user->surname}}</td>
                                                                    <td>{{$admin->user->email}}</td>
                                                                    <td>{{$admin->user->gender}}</td>
                                                                    {{--onclick="location.href='{{url('set-permission/'.$admin->user->id)}}'"--}}
                                                                    <td> <button class="edit-modal btn btn-info" data-toggle="modal"  data-info="{{$admin->user->id}}" data-target="#set-permissions">
                                                                            set permission
                                                                        </button>
                                                                        <button class="edit-modal btn btn-info" data-toggle="modal"  data-info="{{$admin->user->id}}" onclick="location.href='{{url('view-permission/'.$admin-$>user->id)}}'">
                                                                            view permission
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                    @endforeach -->
                                                                </tbody>
                                                            </table>

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
                </div>

            </main>
            @include('newAdmin.masterFooter')
            @include('newAdmin.users.setPermissions')
        </div>
    </div>
@stop
