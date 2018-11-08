@extends('internal.welcome')
@section('content')

    <div role="main" class="application-main ">

        <div id="js-pjax-container" data-pjax-container="">
            <div class="container">
                <div id="dashboard" class="dashboard columns">


                    <div class="dashboard-sidebar column one-third pr-5 pt-3">

                        <div class="Box Box--condensed Details js-repos-container my-3" data-pjax-container="" role="navigation">
                            <div class="Box-header">
                                @if(\Auth::user()->userTypeId ==2)
                                <h3 class="Box-title d-flex flex-justify-between flex-items-center">
                                    My Classes
                                    {{--<a class="btn btn-sm btn-primary text-white" data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;NEW_REPOSITORY_BUTTON&quot;,&quot;dashboard_context&quot;:&quot;user&quot;,&quot;dashboard_version&quot;:1,&quot;user_id&quot;:25744257,&quot;client_id&quot;:&quot;337399298.1534854537&quot;,&quot;originating_request_id&quot;:&quot;1D55:60A0:BEAB64:16E8BE2:5B7C05B9&quot;}}" data-hydro-click-hmac="afd272219efec735cfd6eaefab936abcdf57265bd91c347f332953124f77710e" data-ga-click="Dashboard, click, Sidebar header new repo button - context:user" href="https://github.com/new">New repository</a>--}}
                                </h3>
                                @elseif(\Auth::user()->userTypeId ==3)
                                <h3 class="Box-title d-flex flex-justify-between flex-items-center">
                                    My Subjects
                                    {{--<a class="btn btn-sm btn-primary text-white" data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;NEW_REPOSITORY_BUTTON&quot;,&quot;dashboard_context&quot;:&quot;user&quot;,&quot;dashboard_version&quot;:1,&quot;user_id&quot;:25744257,&quot;client_id&quot;:&quot;337399298.1534854537&quot;,&quot;originating_request_id&quot;:&quot;1D55:60A0:BEAB64:16E8BE2:5B7C05B9&quot;}}" data-hydro-click-hmac="afd272219efec735cfd6eaefab936abcdf57265bd91c347f332953124f77710e" data-ga-click="Dashboard, click, Sidebar header new repo button - context:user" href="https://github.com/new">New repository</a>--}}
                                </h3>
                                @endif
                            </div>
                            <div class="Box-body">
                                <div class="mt-2 mb-3" role="search">
                                    @if(\Auth::user()->userTypeId ==2)
                                    <input type="text" class="form-control f5 input-block mb-3 js-filterable-field js-your-repositories-search" id="dashboard-repos-filter" placeholder="Find a class…" aria-label="Find a repository…" data-url="https://github.com/" data-query-name="q" value="">
                                    @elseif(\Auth::user()->userTypeId ==3)
                                    <input type="text" class="form-control f5 input-block mb-3 js-filterable-field js-your-repositories-search" id="dashboard-repos-filter" placeholder="Find a subject…" aria-label="Find a repository…" data-url="https://github.com/" data-query-name="q" value="">
                                    @endif
                                    </div>

                                @if(\Auth::user()->userTypeId ==2)
                                <ul class="list-style-none" data-filterable-for="dashboard-repos-filter" data-filterable-type="substring">

                                        @foreach($teacherData as $value)
                                        @if($teacherData ===[])
                                        <li class="public source ">
                                            <div class="width-full text-bold">
                                                <a class="d-flex flex-items-baseline f5 mb-2" data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:132959192,&quot;dashboard_context&quot;:&quot;user&quot;,&quot;dashboard_version&quot;:1,&quot;user_id&quot;:25744257,&quot;client_id&quot;:&quot;337399298.1534854537&quot;,&quot;originating_request_id&quot;:&quot;1D55:60A0:BEAB64:16E8BE2:5B7C05B9&quot;}}" data-hydro-click-hmac="e228211f90b8925dbda256aaa3f672c076e8fb5291cc1aab078914e7190a0642" data-ga-click="Dashboard, click, Repo list item click - context:user visibility:public fork:false" href="{{url('class/'.encryptFormId($value).'/'.encryptSubjectId($value))}}">
                                                    <div class="text-gray-light mr-2">
                                                        <svg aria-label="Repository" class="octicon octicon-repo flex-shrink-0" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"></path></svg>
                                                    </div>

                                                    <span class="css-truncate css-truncate-target flex-shrink-0" style="max-width: 48%"></span>/<span class="css-truncate css-truncate-target" style="max-width: inherit" title="">No class Assigned</span>
                                                </a>      </div>
                                        </li>
                                        @endif
                                    <li class="public source ">
                                        <div class="width-full text-bold">
                                            <a class="d-flex flex-items-baseline f5 mb-2" data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:132959192,&quot;dashboard_context&quot;:&quot;user&quot;,&quot;dashboard_version&quot;:1,&quot;user_id&quot;:25744257,&quot;client_id&quot;:&quot;337399298.1534854537&quot;,&quot;originating_request_id&quot;:&quot;1D55:60A0:BEAB64:16E8BE2:5B7C05B9&quot;}}" data-hydro-click-hmac="e228211f90b8925dbda256aaa3f672c076e8fb5291cc1aab078914e7190a0642" data-ga-click="Dashboard, click, Repo list item click - context:user visibility:public fork:false" href="{{url('class/'.encryptFormId($value).'/'.encryptSubjectId($value))}}">
                                                <div class="text-gray-light mr-2">
                                                    <svg aria-label="Repository" class="octicon octicon-repo flex-shrink-0" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"></path></svg>
                                                </div>

                                                <span class="css-truncate css-truncate-target flex-shrink-0" style="max-width: 48%" title="{{$value->levelname}}">{{$value->levelname}}</span>/<span class="css-truncate css-truncate-target" style="max-width: inherit" title="">{{$value->subname}}</span>
                                            </a>      </div>
                                    </li>
                                            @endforeach

                                </ul>
                            @elseif(\Auth::user()->userTypeId ==3)
                                    <ul class="list-style-none" data-filterable-for="dashboard-repos-filter" data-filterable-type="substring">

                                        @foreach($studentData as $value)
                                            <li class="public source ">
                                                <div class="width-full text-bold">
                                                    <a class="d-flex flex-items-baseline f5 mb-2" data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:132959192,&quot;dashboard_context&quot;:&quot;user&quot;,&quot;dashboard_version&quot;:1,&quot;user_id&quot;:25744257,&quot;client_id&quot;:&quot;337399298.1534854537&quot;,&quot;originating_request_id&quot;:&quot;1D55:60A0:BEAB64:16E8BE2:5B7C05B9&quot;}}" data-hydro-click-hmac="e228211f90b8925dbda256aaa3f672c076e8fb5291cc1aab078914e7190a0642" data-ga-click="Dashboard, click, Repo list item click - context:user visibility:public fork:false" href="{{url('studentreg/'.encryptFormId($value->studentID))}}">
                                                        <div class="text-gray-light mr-2">
                                                            <svg aria-label="Repository" class="octicon octicon-repo flex-shrink-0" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"></path></svg>
                                                        </div>
                                                        @if(count($studentData) !==0)
                                                        <span class="css-truncate css-truncate-target" style="max-width: inherit" title="">{{$value->subname}}</span>
                                                       @endif
                                                        @if(count($studentData) ==null)

                                                            <div class="Box-body">
                                                                <span class="css-truncate css-truncate-target flex-shrink-0" style="max-width: 48%" title="test data">No subjects yet!</span>
                                                            </div>

                                                    @endif

                                                    </a>      </div>
                                            </li>
                                        @endforeach

                                    </ul>

                            @endif
                            </div>
                        </div>

                        @if(\Auth::user()->userTypeId ==3)
                        <div class="Box Box--condensed Details js-repos-container my-3" data-pjax-container="" role="navigation">
                            <div class="Box-header">

                                    <h3 class="Box-title d-flex flex-justify-between flex-items-center">
                                       My Fees Account
                                    </h3>

                            </div>
                            <div class="Box-body">

                                    <ul class="list-style-none" data-filterable-for="dashboard-repos-filter" data-filterable-type="substring">
                                            <li class="public source ">
                                                <div class="width-full text-bold">
                                                    <a class="d-flex flex-items-baseline f5 mb-2" data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:132959192,&quot;dashboard_context&quot;:&quot;user&quot;,&quot;dashboard_version&quot;:1,&quot;user_id&quot;:25744257,&quot;client_id&quot;:&quot;337399298.1534854537&quot;,&quot;originating_request_id&quot;:&quot;1D55:60A0:BEAB64:16E8BE2:5B7C05B9&quot;}}" data-hydro-click-hmac="e228211f90b8925dbda256aaa3f672c076e8fb5291cc1aab078914e7190a0642" data-ga-click="Dashboard, click, Repo list item click - context:user visibility:public fork:false" href="{{url('pay-fees')}}">

                                                            <span class="css-truncate css-truncate-target" style="max-width: inherit" title="">Pay Fees</span>

                                                    </a>      </div>
                                            </li>
                                        <li class="public source ">
                                                <div class="width-full text-bold">
                                                    <a class="d-flex flex-items-baseline f5 mb-2" data-hydro-click="{&quot;event_type&quot;:&quot;dashboard.click&quot;,&quot;payload&quot;:{&quot;event_context&quot;:&quot;REPOSITORIES&quot;,&quot;target&quot;:&quot;REPOSITORY&quot;,&quot;record_id&quot;:132959192,&quot;dashboard_context&quot;:&quot;user&quot;,&quot;dashboard_version&quot;:1,&quot;user_id&quot;:25744257,&quot;client_id&quot;:&quot;337399298.1534854537&quot;,&quot;originating_request_id&quot;:&quot;1D55:60A0:BEAB64:16E8BE2:5B7C05B9&quot;}}" data-hydro-click-hmac="e228211f90b8925dbda256aaa3f672c076e8fb5291cc1aab078914e7190a0642" data-ga-click="Dashboard, click, Repo list item click - context:user visibility:public fork:false" href="{{url('balance-statement')}}">

                                                            <span class="css-truncate css-truncate-target" style="max-width: inherit" title="">View Balance Statement</span>

                                                    </a>      </div>
                                            </li>


                                    </ul>
                            </div>
                        </div>
                        @endif


                        <div id="your_teams" class="js-repos-container user-repos" data-pjax-container="">
                        </div>


                    </div>


                    <div class="border-bottom border-gray-dark d-flex py-3 flex-items-center mb-3">
                        <h3 class="f5 flex-auto">School Calendar</h3>
                    </div>

                    <div class="news column two-thirds">
                        <div class="Box p-3 my-3">
                            <div id="full-calendar" class="fc fc-unthemed fc-ltr">

                                <div class="fc-view-container" style=""></div>
                        </div>

                            {{--@if(\Auth::user()->userTypeId ==2)--}}
                        {{--<div class="border-bottom border-gray-dark d-flex py-3 flex-items-center mb-3">--}}
                            {{--<h3 class="f5 flex-auto">School Memos</h3>--}}
                        {{--</div>--}}

                        {{--<div class="Box p-5">--}}
                            {{--<h3 class="h2 lh-condensed mb-2">Discover interesting projects and people to populate your personal news feed.</h3>--}}
                            {{--<p class="f4">--}}
                                {{--Your news feed helps you keep up with recent activity on repositories you--}}
                                {{--<a data-ga-click="activity_feed, currently_starred_repos_count:0;currently_following_users_count:0;events_shown:false;banner_shown:true;banner_dismissable:true;page_type:activity" data-octo-click="activity_feed" data-octo-dimensions="actor_id:25744257,request_id:1D55:60A0:BEAB64:16E8BE2:5B7C05B9,action:banner-click-watch,currently_starred_repos_count:0,currently_following_users_count:0,events_shown:false,banner_shown:true,banner_dismissable:true,page_type:activity" href="https://github.com/trending">watch</a>--}}
                                {{--and people you--}}
                                {{--<a data-ga-click="activity_feed, currently_starred_repos_count:0;currently_following_users_count:0;events_shown:false;banner_shown:true;banner_dismissable:true;page_type:activity" data-octo-click="activity_feed" data-octo-dimensions="actor_id:25744257,request_id:1D55:60A0:BEAB64:16E8BE2:5B7C05B9,action:banner-click-follow,currently_starred_repos_count:0,currently_following_users_count:0,events_shown:false,banner_shown:true,banner_dismissable:true,page_type:activity" href="https://github.com/trending/developers">follow</a>.--}}
                            {{--</p>--}}
                            {{--<a class="btn btn-outline mt-2" data-ga-click="activity_feed, currently_starred_repos_count:0;currently_following_users_count:0;events_shown:false;banner_shown:true;banner_dismissable:true;page_type:activity" data-octo-click="activity_feed" data-octo-dimensions="actor_id:25744257,request_id:1D55:60A0:BEAB64:16E8BE2:5B7C05B9,action:banner-click-explore,currently_starred_repos_count:0,currently_following_users_count:0,events_shown:false,banner_shown:true,banner_dismissable:true,page_type:activity" href="https://github.com/explore">Explore GitHub</a>--}}
                        {{--</div>--}}
                                {{--@endif--}}

                    </div>
                </div>
            </div>

        </div>
        <div class="modal-backdrop js-touch-events"></div>
    </div>
@stop