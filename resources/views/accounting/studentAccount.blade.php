
@extends('admin.master')
@section('content')


<div id="right-panel" class="right-panel">
       @include('admin.header')


 @if(Auth::user()->userTypeId ===1)
       <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                      

                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Accounting Department</h1>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="{{url('accounts-dashboard')}}">Go back</a></li>
                                    <li  class="active"><a href="javascript:void(0);">Student Account</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
      
        @if(Auth::user()->userTypeId ===5)
       <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                        
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="{{url('accounts-dashboard')}}">Home</a></li>
                                    <li  class="active"><a href="javascript:void(0);">Student Account</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif


         <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                 <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-12" style="padding:3px;">
                        
                    <input class="btn btn-outline-info" type="button"  data-toggle="modal" data-target="#add-transaction" value="Add Transaction">
                    
                    </div>
                </div>
            </div>
                
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-12">
                             <div class="card-header">
                                <strong>Transaction History</strong>
                            </div>
                            <div class="card">
                                <div class="card-body">

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
                                        @foreach($transactionHistory as $item)
                                        <tr>
                                            <td>{{$item->created_at}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->reference}}</td>
                                            <td>{{$item->debit}}</td>
                                            <td>{{$item->credit}}</td>
                                            <td>{{$item->balance}}</td>
                                            
                                        </tr>
                                        @endforeach
                                       
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
        <div class="clearfix"></div>
        @include('admin.footer')
        @include('accounting.addTransaction')
    </div>

@stop
@push('scripts')

@endpush