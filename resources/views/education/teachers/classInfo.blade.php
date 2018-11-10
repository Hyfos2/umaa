@extends('admin.master')
@section('content')
<div id="right-panel" class="right-panel">
       @include('admin.header')
       <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            @if(Auth::user()->userTypeId ===1)
                            <div class="page-title">
                                <h1> Education Dashboard</h1>
                            </div>@endif 
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                         @if(Auth::user()->userTypeId ===1)
                                    <li><a href="{{url('education-dashboard')}}">Home</a></li>
 @endif
  @if(Auth::user()->userTypeId ===5)
  <li><a href="{{url('education-dashboard')}}">My Dashboard</a></li>
  @endif
                                    <li><a href="{{url('teachers')}}">Teachers</a></li>
                                       <li><a href="{{url('teacher-classes/'.$id)}}">Teacher Profile</a></li>
                                       <li  class="active"><a href="javascript:void(0);">Class Info</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row"> 
                            <div class="col-lg-6 col-xl-12">
                                <div class="card br-0"> 
                                     <div class="card-header">
                                <strong class="card-title">English Lessons</strong>
                            </div>

                                    <div class="card-body" style="height: 480px">
                                        <div class="chart-container ov-h">
                                            
                                            <div id="listA"></div>
                                    <div id="listB"></div>
                                    <div id="listC"></div>
                                        </div>
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
    </div>
@stop
@push('scripts')
<script type="text/javascript">

        webix.ready(function(){
          webix.ui({
            container:"listA",
                view:"grouplist",
                scroll:true,
                width:950,
                height:400,
                data:[
    { id: "1", type: "folder", value: "Oral Communication", data: [
        { id: "m_0", type: "folder", value: "Speaking", data: [
            { id: "m_0_1", type: "file", value: "Expressing ideas orally"},
            { id: "m_0_2", type: "file", value: "conversation skills"}
        ]},
        { id: "m_1", type: "folder", value: "Listening", data: [
            { id: "m_1_0", type: "file", value: "concentration and patience"},
            { id: "m_1_1", type: "file", value: "answer  factual,interpretive and  evaluative based  on what they have listened to"}
        ]}
    ]},

    { id:"2", type: "folder", value:"Reading", data:[
        { id: "p_0", type: "folder", value: "reading material and  Skills", data: [
            { id: "p_0_0", type: "file", value: "understand different reading materials" },
            { id: "p_0_1", type: "file", value: "read at appropriate text speed" }
        ]},
        { id: "p_1", type: "folder", value: "Intensive  Reading", data: [
            { id: "p_1_0", type: "file", value: "read and comprehend text" },
            { id: "p_1_1", type: "file", value: "students should have skills sufficient to writing summaries" },
            { id: "p_1_2", type: "file", value: "synthesize information and ideas  from a text" }
        ]},
        { id: "p_2", type: "folder", value: "extensive reading", data: [
            { id: "p_2_0", type: "file", value: "reading  any english material" }
        ]}
    ]},
    { id: "3", type: "folder", value: "Writing", data:[
        { id: "v_0", type: "folder", value: "General Writing", data: [
            { id: "v_0_0", type: "file", value: "Students must write compositions logically" },
            { id: "v_0_1", type: "file", value: "Write with correct grammar" },
            { id: "v_0_2", type: "file", value: "Write coherent and cohensive paragraphs" }
        ]},
        { id: "v_1", type: "folder", value: "Free Compositions", data: [
            { id: "v_1_0", type: "file", value: "Should write narrative compositions" },
            { id: "v_1_1", type: "file", value: "Should write argumentative compositions" }
        ]},
        { id: "v_2", type: "folder", value: "Guided Compositions", data: [
            { id: "v_2_0", type: "file", value: "Should follow instructions"},
            { id: "v_2_1", type: "file", value: "Assemble and  arrange information grammatically"}
        ]}
    ]}
]
                });

    });

    
</script>
@endpush