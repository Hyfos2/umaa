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
                                    <li><a href="{{url('communication-dashboard')}}">Dashboard</a></li>
                                    <li  class="active"><a href="javascript:void(0);">Messages</a></li>
                                    <li  class="active"><a href="javascript:void(0);">Inbox</a></li>
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
                                <div class="card-header">
                                   
                                                        <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">
                                            

                                    <strong></strong>
                                </div>
                                <div class="card-body">


                                    <div class="custom-tab">

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="custom-nav-inbox-tab" data-toggle="tab" href="#custom-nav-inbox" role="tab" aria-controls="custom-nav-inbox" aria-selected="true">Inbox</a>

                                <a class="nav-item nav-link" id="custom-nav-read-tab" data-toggle="tab" href="#custom-nav-read" role="tab" aria-controls="custom-nav-read" aria-selected="false">Read</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                            @include('communication.inbox')
                                            @include('communication.read')
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




    var film_set = [
    { id:1, title:"The Shawshank Redemption", year:1994, rank:1, markCheckbox:1},
    { id:2, title:"The Godfather", year:1972,  rank:2, markCheckbox:0},
    { id:3, title:"The Godfather: Part II", year:1974, rank:3},
    { id:4, title:"The Good, the Bad and the Ugly", year:1966, rank:4, markCheckbox:1},
    { id:5, title:"My Fair Lady", year:1964, rank:5, markCheckbox:1},
    { id:6, title:"12 Angry Men", year:1957, rank:6, markCheckbox:0}
];

/*Create a new view that extends List and webix.ActiveContent*/


webix.ui({
  view:"activeList",
  id:"mylist",
  width:650,
  autoheight:true,
  select:true,
  data:film_set,
  activeContent:{
    deleteButton:{
      id:"deleteButtonId",
      view:"button",
      label:"Delete",
      width:80
    },
    editButton:{
      id:"editButtonId",
      view:"button",
      label:"Edit",
      width:80,
      click:editClick
    },
    markCheckbox:{
      view:"checkbox",
      width:50,
      on:{ /*checkbox onChange handler*/
        "onChange":function(newv, oldv){
          var item_id = this.config.$masterId;
          var state = this.getValue()?"Check ":"Uncheck ";
          webix.message(state+item_id);
        }
      }
    }
  },
  template: "<div class='rank'>#rank#.</div><div class='title'>#title#<br>#year# year</div>"+
  "<div class='buttons'>{common.deleteButton()}</div><div class='buttons'>{common.editButton()}</div>"+
  "<div class='checkbox'>{common.markCheckbox()}</div>",
  type: {
    height:65
  }
});
/*Edit click handling*/
function editClick(id, e){
  var item_id = $$("mylist").locate(e);
  webix.message("Edit "+item_id);
};
/*Delete click handling*/
$$("deleteButtonId").attachEvent("onItemClick", function(id, e){
  var item_id = $$("mylist").locate(e);
  webix.message("Delete "+item_id);
});

    
</script>
@endpush