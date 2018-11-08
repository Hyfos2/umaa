@extends('newAdmin.master')
@section('content')
    <div>
        @include('newAdmin.newAside')
        <div class="page-container">
            @include('newAdmin.navHeader')
            @include('newAdmin.alertMessages')
            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-6" id="calenderEvents">
                                <canvas id="myChart" width="400" height="400"></canvas>
                            </div>

                            <div class="col-md-3">

                            </div>

                        </div>
                    </div>
                </div>
            </main>

            @include('newAdmin.masterFooter')
            <div id="snackbar">deleting an event...</div>
        </div>
    </div>
    <div style="display: none;">
        <div id="credit">
            {{$totalCredit}}
        </div>
        <div id="debit">
            {{$totalDebit}}
        </div>
    </div>
@stop

