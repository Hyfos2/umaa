@extends('admin.master')
@section('content')

<div id="right-panel" class="right-panel">
       @include('admin.header')
       <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="{{url('accounts-dashboard')}}">Dashboard</a></li>
                                    <li  class="active"><a href="javascript:void(0);">Student Account</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">


                    <div class="col-lg-3 col-md-6">
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Search Student</strong>
                            </div>
                            <div class="card-body">

                                <form action="#" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Full Name</label>
                                                <input id="cc-payment" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Susan Mahachi" autocomplete="off">
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-outline-info">
                                        
                                                    <span id="payment-button-amount">Get Details</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div> 
                                        </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    </div>

    
                </div>
            
                <div class="clearfix"></div>

                 <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-12" style="padding:3px;">
                        
                           <input class="btn btn-outline-info" type="button" value="Add Transaction">
                            <input class="btn btn-outline-info" type="button" value="Activate">
                            <input class="btn btn-outline-info" type="button" value="De-activate">
                        
                    </div>
                </div>
            </div>


                <div class="row">
                <div class="col-lg-12">
                    <div class="card"> 
                     <div class="card-header">
                                <strong class="card-title">Student Details</strong>
                            </div> 
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Date and Time</th>
                                            <th>Transaction</th>
                                            <th>Reference Number</th>
                                            <th>Debit</th>
                                            <th>Credit</th>
                                            <th>Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>$320,800</td>
                                            <td>$320,800</td>
                                            <td>$320,800</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            
                        </div>
                        
                </div><!-- /# column -->
            </div>




               
            </div>
        </div>
        <div class="clearfix"></div>
      
        @include('admin.footer')
        <!-- /.site-footer -->
    </div>

@stop