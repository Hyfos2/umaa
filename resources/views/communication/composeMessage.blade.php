@extends('admin.master')
@section('content')
<div id="right-panel" class="right-panel">
       @include('admin.header')


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
                                    <li><a href="{{url('communication-dashboard')}}">Go Back</a></li>
                                    <li  class="active"><a href="javascript:void(0);">Compose</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


         <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header"><strong>New Message</strong></div>
                                <div class="card-body">

                            
                <form role="form"  method="POST">
                    {{ csrf_field() }}
                   
                    <div class="form-group">
                        <input type ="text" class="form-control"  placeholder="To" name="name" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <input type ="text" class="form-control"  placeholder="Subject" name="code" autocomplete="off">
                    </div>

                     <div class="form-group">
                       <textarea  name="textarea-input" id="textarea-input" rows="9" placeholder="Message.." class="form-control"></textarea>
                    </div>

                    <div class="text-left">
                       
                        <button type="submit"  class="btn btn-outline-info">Send</button> <button class="btn btn-outline-info">Attach File</button>
                    </div>
                </form>
            </div>
                                
                            </div> 
                        </div> 
                    </div>
                </div>
            
            </div>
        </div>
        <div class="clearfix"></div>
        @include('admin.footer')
    </div>

@stop