 <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    @if(Auth::user()->userTypeId ===1)
                    <li class="active">
                        <a href="{{url('admin-dashboard')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard</a>
                    </li> 
                    @endif
                     @if(Auth::user()->userTypeId ===2)
                    <li class="active">
                        <a href="{{url('accounts-dashboard')}}"><i class="menu-icon fa fa-laptop"></i>Account Dashboard</a>
                    </li>
                    @endif
                     @if(Auth::user()->userTypeId ===2)

                    <li class="active">
                        <a href="{{url('communication-dashboard')}}"><i class="menu-icon fa fa-laptop"></i>Comm Dashboard</a>
                    </li>
                    @endif
 @if(Auth::user()->userTypeId ===2)
                     <li class="active">
                        <a href="{{url('education-dashboard')}}"><i class="menu-icon fa fa-laptop"></i>Education Dashboard</a>
                    </li>
                    @endif

                    @if(Auth::user()->userTypeId ===2)
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Accounting</a>
                        <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>

                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                        </ul>
                    </li>
                    @endif
@if(Auth::user()->userTypeId ===2)
                      <li>
                        <a href="{{url('student-account')}}"><i class="menu-icon fa fa-laptop"></i>Student Accounts</a>
                    </li>
                    @endif
                    @if(Auth::user()->userTypeId ===2)

                     <li class="menu-item-has-children dropdown">
                        <a  class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Student Accounts</a>
                        <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>

                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                        </ul>
                    </li>
                    @endif



@if(Auth::user()->userTypeId ===2)

                    <li class="menu-item-has-children dropdown">
                        <a  class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-email"></i>Messages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{url('compose-message')}}">Compose</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="{{url('new-messages')}}">Inbox</a></li>
                            <li><i class="fa fa-bars"></i><a href="{{url('sent-messages')}}">Sent</a></li>
                        </ul>
                    </li>
@endif
@if(Auth::user()->userTypeId ===2)

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Communication</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                            <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                        </ul>
                    </li>
                    @endif
                    @if(Auth::user()->userTypeId ===2)
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Education</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                        </ul>
                    </li>
                    @endif

@if(Auth::user()->userTypeId ===1)
<li>
                        <a href="{{url('staffMembers')}}"><i class="menu-icon fa fa-users"></i>Staff</a>
                    </li>

                    @endif

@if(Auth::user()->userTypeId ===1)
<li>
                        <a href="{{url('userLogs')}}"><i class="menu-icon fa fa-user"></i>User Logs</a>
                    </li>
                    @endif
                    @if(Auth::user()->userTypeId ===2)
                    <li>
                        <a href="widgets.html"> <i class="menu-icon ti-email"></i>Settings </a>
                    </li>
@endif
@if(Auth::user()->userTypeId ===2)
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                            <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                        </ul>
                    </li>
                    @endif
                    @if(Auth::user()->userTypeId ===2)

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>
                    @endif

            @if(Auth::user()->userTypeId ===2)
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>