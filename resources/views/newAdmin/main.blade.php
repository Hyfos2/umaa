@extends('newAdmin.master')
@section('content')
    <div>
        @include('newAdmin.newAside')
        <div class="page-container">
            {{--@include('newAdmin.alertMessages')--}}
            @include('newAdmin.navHeader')
            @include('newAdmin.masterBody')
            @include('newAdmin.masterFooter')
        </div>
    </div>
@stop