@extends('newAdmin.master')
@section('content')
    <div>
        @include('newAdmin.newAside')
        <div class="page-container">
            @include('newAdmin.alertMessages')
            @include('newAdmin.navHeader')

            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="row gap-20 masonry pos-r" style="position: relative; height: 1855px;">
                        <div class="masonry-sizer col-md-6">
                        </div>

                        <div class="masonry-item col-md-6" style="position: absolute; left: 0%; top: 0;">
                            <div class="bd bgc-white">
                                <div class="layers">
                                    <div class="layer w-100 pX-20 pT-20">
                                        <h6 class="lh-1"> <span class="badge">Communicators Logs</span></h6>
                                    </div>
                                    <div class="table-responsive overflow">
                                        <table class="table" id="communication">
                                            <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">FULL NAME</th>
                                                <th class="text-center">LOG IN</th>
                                                <th class="text-center">LOG OUT</th>
                                                <th class="text-center">ACTIONS</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($users AS $user)
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->user->name}} {{$user->user->surname}}</td>
                                                    <td> {{$user->logIn}}</td>
                                                    <td>{{$user->logOut}}</td>
                                                    <td>
                                                        <button class="edit-modal btn btn-info" onclick="location.href='{{url('communicator-profile/'.$user->user->id)}}'">
                                                            <span class="glyphicon  glyphicon-eye-open"></span> view
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="masonry-item col-md-6" style="position: absolute; left: 50%; top: 0;">
                            <div class="bd bgc-white p-20">
                                <div class="layers">
                                    <div class="layer w-100 mB-10">
                                        <h6 class="badge">Communication Time-line</h6>
                                    </div>
                                    <div class="layer w-100">
                                        <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
                                    </div>
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