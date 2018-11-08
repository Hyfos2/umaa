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
                                <div class="col-md-7">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <span class="badge">{{$teacherDetails->name[0]}} {{$teacherDetails->surname}}'s Classes</span>
                                        </div>
                                        <div class="table-responsive overflow">



                                        <table class="table tile table-striped">
                                            <tr> 
                                            <th>Level</th>
                                            <th>Class</th>
                                            <th>Subject</th>
                                            <th>Examination Board</th>
                                              </tr>

                                            @foreach($teacherWork as $item)
                                            <tr>
                                                <td>{{$item->levelName}}</td>
                                                <td>{{$item->subLevelName}}</td>
                                                <td>{{$item->subName}}</td>
                                                <td>{{$item->board}}</td>
                    
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>

                                    </div>
                                </div>

                                <div class="col-md-5">
                                     <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <span class="badge">Attendance</span>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>


                            <div class="row gap-20">
                                <div class="col-md-12">
                                     <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <span class="badge">Time table</span>
                                            <div class="timetable"></div>


                                        </div>
                                    </div>
                                </div>

                            
                            </div>
                            
                            <!-- <div class="row gap-20">
                                <div class="col-md-7">
                                </div>

                                <div class="col-md-5">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <span class="badge">Marking Scheme</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
 -->


                        </div>
                    </div>
                    <div id="monday" style="display: none">{{$mondayData}}</div> 
                    <div id="tuesday" style="display: none">{{$tuesdayData}}</div> 
                    <div id="wednesday" style="display: none">{{$wednesdayData}}</div> 
                    <div id="thursday" style="display: none">{{$thursdayData}}</div> 
                    <div id="friday" style="display: none">{{$fridayData}}</div> 

                </div>
            </main>
            @include('newAdmin.masterFooter')
        </div>
    </div>
@stop