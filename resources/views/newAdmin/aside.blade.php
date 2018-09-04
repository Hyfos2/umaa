  <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left info">
                    <p>{{ucfirst(\Auth::user()->name)}} {{ucfirst(\Auth::user()->surname)}}</p>
                    {{--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>--}}
                </div>
            </div>
            <!-- search form -->
            {{--<form action="#" method="get" class="sidebar-form">--}}
                {{--<div class="input-group">--}}
                    {{--<input type="text" name="q" class="form-control" placeholder="Search..."/>--}}
                    {{--<span class="input-group-btn">--}}
                {{--<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>--}}
              {{--</span>--}}
                {{--</div>--}}
            {{--</form>--}}
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('admin')}}"><i class="fa fa-circle-o"></i>Home</a></li>
                       
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Teachers</span>
                        <span  data-toggle="tooltip" title="{{teachers() }} teachers" class="label label-primary pull-right">{{teachers()}}</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('add-teacher')}}"><i class="fa fa-circle-o"></i>New Teacher</a></li>
                        <li><a href="{{url('manage-teachers')}}"><i class="fa fa-circle-o"></i>Manage Teachers</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Students</span>
                        <span  data-toggle="tooltip" title="{{students() }} students" class="label label-primary pull-right">{{students()}}</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('add-student')}}"><i class="fa fa-circle-o"></i>New Student</a></li>
                        <li><a href="{{url('manage-students')}}"><i class="fa fa-circle-o"></i>Manage Students</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('levels')}}">
                        <i class="fa fa-th"></i> <span>Levels</span> <small class="label pull-right bg-green"></small>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Subjects Details</span>
                        <span  data-toggle="tooltip" title="{{totalSubjects() }} subjects" class="label label-primary pull-right">{{totalSubjects()}}</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('new-subjects')}}"><i class="fa fa-circle-o"></i>New</a></li>
                      {{--e-o"></i> Inline charts</a></li>--}}
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Sports Details</span>
                        <span data-toggle="tooltip" title="{{sports() }} sports" class="label label-primary pull-right">{{sports()}}</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('sport')}}"><i class="fa fa-circle-o"></i>New</a></li>
                        {{--e-o"></i> Inline charts</a></li>--}}
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>User Logs</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('teacher-logs')}}"><i class="fa fa-circle-o"></i>Teachers</a></li>
                        <li><a href="{{url('student-logs')}}"><i class="fa fa-circle-o"></i>Students</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Settings</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('set-permission')}}"><i class="fa fa-circle-o"></i>Set Permissions</a></li>
                        <li><a href="{{url('student-permission')}}"><i class="fa fa-circle-o"></i>Student Permissions</a></li>
                        <li><a href="{{url('teacher-permission')}}"><i class="fa fa-circle-o"></i>Teacher Permissions</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>