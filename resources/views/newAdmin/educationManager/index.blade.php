@extends('newAdmin.master')
@section('content')
    <div>
        @include('newAdmin.newAside')
        <div class="page-container">
            @include('newAdmin.alertMessages')
            @include('newAdmin.navHeader')
            <h1>Education manager</h1>
            @include('newAdmin.masterFooter')
        </div>
    </div>
@stop