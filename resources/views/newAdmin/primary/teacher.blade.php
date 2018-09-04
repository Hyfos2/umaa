@extends('newAdmin.master')
@section('content')
    <div>
        @include('newAdmin.newAside')
        {{--@include('newAdmin.alertMessages')--}}
        <div class="page-container">
            @include('newAdmin.navHeader')
            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="row gap-20 masonry pos-r" style="position: relative; height: 1855px;">
                        <div class="masonry-sizer col-md-6">

                        </div>
                        <div class="masonry-item w-100" style="position: absolute; left: 0%; top: 0px;">
                            <div class="row gap-20">
                                <div class="col-md-12">
                                    <div class="layers bd bgc-white p-20">
                                        <div class="layer w-100 mB-10">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#new-primary-student">Add Teacher</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row gap-20">
                                <div class="masonry-item col-12" style="position: absolute; left: 0%;">
                                    <div class="bd bgc-white">
                                        <div class="peers fxw-nw@lg+ ai-s">
                                <div class="peer peer-greed w-70p@lg+ w-100@lg- p-20" style="height: 1600px;">

                                    <div id="tabs">

                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#grade-1">Grade One</a></li>
                                            <li><a data-toggle="tab" href="#grade-2">Grade Two</a></li>
                                            <li><a data-toggle="tab" href="#grade-3">Grade Three</a></li>
                                            <li><a data-toggle="tab" href="#grade-4">Grade Four</a></li>
                                        </ul>

                                        <div class="tab-content">

                                        @include('newAdmin.primary.grades.gradeOne')
                                        @include('newAdmin.primary.grades.gradeTwo')
                                        @include('newAdmin.primary.grades.gradeThree')
                                        @include('newAdmin.primary.grades.gradeFour')
                                        @include('newAdmin.primary.grades.gradeFive')
                                        @include('newAdmin.primary.grades.gradeSix')
                                        @include('newAdmin.primary.grades.gradeSeven')
                                        </div>
                                    </div>



                                    {{--<nav class="reponav js-repo-nav js-sidenav-container-pjax container" itemscope=""  role="navigation" data-pjax="#js-repo-pjax-container">--}}

  {{--<span itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement">--}}
    {{--<a class="js-selected-navigation-item selected reponav-item" itemprop="url" data-hotkey="g c" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches repo_packages /Hyfos2/eps-system" href="https://github.com/Hyfos2/eps-system">--}}
      {{--<svg class="octicon octicon-code" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true">--}}
          {{--<path fill-rule="evenodd" d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5 3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z"></path></svg>--}}
      {{--<span itemprop="name">Code</span>--}}
      {{--<meta itemprop="position" content="1">--}}
{{--</a>  </span>--}}

                                        {{--<span itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement">--}}
      {{--<a itemprop="url" data-hotkey="g i" class="js-selected-navigation-item reponav-item" data-selected-links="repo_issues repo_labels repo_milestones /Hyfos2/eps-system/issues" href="https://github.com/Hyfos2/eps-system/issues">--}}
        {{--<svg class="octicon octicon-issue-opened" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true">--}}
            {{--<path fill-rule="evenodd" d="M7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7zm1 3H6v5h2V4zm0 6H6v2h2v-2z"></path></svg>--}}
        {{--<span itemprop="name">Issues</span>--}}
        {{--<span class="Counter">0</span>--}}
        {{--<meta itemprop="position" content="2">--}}
{{--</a>    </span>--}}

                                        {{--<span itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement">--}}
    {{--<a data-hotkey="g p" itemprop="url" class="js-selected-navigation-item reponav-item" data-selected-links="repo_pulls checks /Hyfos2/eps-system/pulls" href="https://github.com/Hyfos2/eps-system/pulls">--}}
      {{--<svg class="octicon octicon-git-pull-request" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true">--}}
          {{--<path fill-rule="evenodd" d="M11 11.28V5c-.03-.78-.34-1.47-.94-2.06C9.46 2.35 8.78 2.03 8 2H7V0L4 3l3 3V4h1c.27.02.48.11.69.31.21.2.3.42.31.69v6.28A1.993 1.993 0 0 0 10 15a1.993 1.993 0 0 0 1-3.72zm-1 2.92c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zM4 3c0-1.11-.89-2-2-2a1.993 1.993 0 0 0-1 3.72v6.56A1.993 1.993 0 0 0 2 15a1.993 1.993 0 0 0 1-3.72V4.72c.59-.34 1-.98 1-1.72zm-.8 10c0 .66-.55 1.2-1.2 1.2-.65 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"></path></svg>--}}
      {{--<span itemprop="name">Pull requests</span>--}}
      {{--<span class="Counter">0</span>--}}
      {{--<meta itemprop="position" content="4">--}}
{{--</a>  </span>--}}

                                        {{--<a data-hotkey="g b" class="js-selected-navigation-item reponav-item" data-selected-links="repo_projects new_repo_project repo_project /Hyfos2/eps-system/projects" href="https://github.com/Hyfos2/eps-system/projects">--}}
                                            {{--<svg class="octicon octicon-project" viewBox="0 0 15 16" version="1.1" width="15" height="16" aria-hidden="true">--}}
                                                {{--<path fill-rule="evenodd" d="M10 12h3V2h-3v10zm-4-2h3V2H6v8zm-4 4h3V2H2v12zm-1 1h13V1H1v14zM14 0H1a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z"></path></svg>--}}
                                            {{--Projects--}}
                                            {{--<span class="Counter">0</span>--}}
                                        {{--</a>--}}

                                        {{--<a class="js-selected-navigation-item reponav-item" data-hotkey="g w" data-selected-links="repo_wiki /Hyfos2/eps-system/wiki" href="https://github.com/Hyfos2/eps-system/wiki">--}}
                                            {{--<svg class="octicon octicon-book" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">--}}
                                                {{--<path fill-rule="evenodd" d="M3 5h4v1H3V5zm0 3h4V7H3v1zm0 2h4V9H3v1zm11-5h-4v1h4V5zm0 2h-4v1h4V7zm0 2h-4v1h4V9zm2-6v9c0 .55-.45 1-1 1H9.5l-1 1-1-1H2c-.55 0-1-.45-1-1V3c0-.55.45-1 1-1h5.5l1 1 1-1H15c.55 0 1 .45 1 1zm-8 .5L7.5 3H2v9h6V3.5zm7-.5H9.5l-.5.5V12h6V3z"></path></svg>--}}
                                            {{--Wiki--}}
                                        {{--</a>--}}

                                        {{--<a class="js-selected-navigation-item reponav-item" data-selected-links="repo_graphs repo_contributors dependency_graph pulse /Hyfos2/eps-system/pulse" href="https://github.com/Hyfos2/eps-system/pulse">--}}
                                            {{--<svg class="octicon octicon-graph" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">--}}
                                                {{--<path fill-rule="evenodd" d="M16 14v1H0V0h1v14h15zM5 13H3V8h2v5zm4 0H7V3h2v10zm4 0h-2V6h2v7z"></path></svg>--}}
                                            {{--Insights--}}
                                        {{--</a>--}}
                                        {{--<a class="js-selected-navigation-item reponav-item" data-selected-links="repo_settings repo_branch_settings hooks integration_installations repo_keys_settings issue_template_editor /Hyfos2/eps-system/settings" href="https://github.com/Hyfos2/eps-system/settings">--}}
                                            {{--<svg class="octicon octicon-gear" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true">--}}
                                                {{--<path fill-rule="evenodd" d="M14 8.77v-1.6l-1.94-.64-.45-1.09.88-1.84-1.13-1.13-1.81.91-1.09-.45-.69-1.92h-1.6l-.63 1.94-1.11.45-1.84-.88-1.13 1.13.91 1.81-.45 1.09L0 7.23v1.59l1.94.64.45 1.09-.88 1.84 1.13 1.13 1.81-.91 1.09.45.69 1.92h1.59l.63-1.94 1.11-.45 1.84.88 1.13-1.13-.92-1.81.47-1.09L14 8.75v.02zM7 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"></path></svg>--}}
                                            {{--Settings--}}
                                        {{--</a>--}}
                                    {{--</nav>--}}

                                    {{--</div>--}}




                                            {{--<div class="select-menu-filters">--}}
                                                {{--<div class="select-menu-text-filter">--}}
                                                    {{--<input type="text" aria-label="Find or create a branch…" id="context-commitish-filter-field" class="form-control js-filterable-field js-navigation-enable" placeholder="Find or create a branch…">--}}
                                                {{--</div>--}}
                                                {{--<div class="select-menu-tabs">--}}
                                                    {{--<ul>--}}
                                                        {{--<li class="select-menu-tab">--}}
                                                            {{--<a href="javascript:void(0);" data-tab-filter="branches" data-filter-placeholder="Find or create a branch…" class="js-select-menu-tab" role="tab">Branches</a>--}}
                                                        {{--</li>--}}
                                                        {{--<li class="select-menu-tab">--}}
                                                            {{--<a href="javascript:void(0);" data-tab-filter="tags" data-filter-placeholder="Find a tag…" class="js-select-menu-tab" role="tab">Tags</a>--}}
                                                        {{--</li>--}}
                                                    {{--</ul>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches" role="menu">--}}

                                                {{--<div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">--}}


                                                    {{--<a class="select-menu-item js-navigation-item js-navigation-open selected" href="https://github.com/Hyfos2/eps-system/tree/master" data-name="master" data-skip-pjax="true" rel="nofollow">--}}
                                                        {{--<svg class="octicon octicon-check select-menu-item-icon" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5L12 5z"></path></svg>--}}
                                                        {{--<span class="select-menu-item-text css-truncate-target js-select-menu-filter-text">--}}
                {{--master--}}
              {{--</span>--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}

                                                {{--<!-- '"` --><!-- </textarea></xmp> --><form class="js-create-branch select-menu-item select-menu-new-item-form js-navigation-item js-new-item-form" action="https://github.com/Hyfos2/eps-system/branches" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="75TC+5lUCa310/U7lgRVqN/5kTItNq3bd0b5zG8m0q8A78Wlv1xKvScVWm/FdaketEpZY5syQh50k0neVqoA4A==">--}}
                                                    {{--<svg class="octicon octicon-git-branch select-menu-item-icon" viewBox="0 0 10 16" version="1.1" width="10" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M10 5c0-1.11-.89-2-2-2a1.993 1.993 0 0 0-1 3.72v.3c-.02.52-.23.98-.63 1.38-.4.4-.86.61-1.38.63-.83.02-1.48.16-2 .45V4.72a1.993 1.993 0 0 0-1-3.72C.88 1 0 1.89 0 3a2 2 0 0 0 1 1.72v6.56c-.59.35-1 .99-1 1.72 0 1.11.89 2 2 2 1.11 0 2-.89 2-2 0-.53-.2-1-.53-1.36.09-.06.48-.41.59-.47.25-.11.56-.17.94-.17 1.05-.05 1.95-.45 2.75-1.25S8.95 7.77 9 6.73h-.02C9.59 6.37 10 5.73 10 5zM2 1.8c.66 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2C1.35 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2zm0 12.41c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm6-8c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"></path></svg>--}}
                                                    {{--<div class="select-menu-item-text">--}}
                                                        {{--<span class="select-menu-item-heading">Create branch: <span class="js-new-item-name"></span></span>--}}
                                                        {{--<span class="description">from ‘master’</span>--}}
                                                    {{--</div>--}}
                                                    {{--<input type="hidden" name="name" id="name" class="js-new-item-value">--}}
                                                    {{--<input type="hidden" name="branch" id="branch" value="master">--}}
                                                    {{--<input type="hidden" name="path" id="path" value="">--}}
                                                {{--</form>--}}
                                            {{--</div>--}}

                                            {{--<div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">--}}
                                                {{--<div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">--}}


                                                {{--</div>--}}

                                                {{--<div class="select-menu-no-results">Nothing to show</div>--}}
                                            {{--</div>--}}

                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="new-primary-student">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="bd p-15">
                                <h5 class="m-0">Add Teacher</h5>
                            </div>
                            <div class="modal-body">
                                <form role="form"  method="POST" action ="{{route('register')}}">
                                    {{ csrf_field() }}
                                    <input type ="hidden" value="{{$schoolLevel->id}}" name="schoolLevel" >
                                    <input type ="hidden" value="{{$type}}" name="userTypeId" >
                                    <div class="form-group">
                                        <input type ="text" class="form-control bdc-grey-200"  placeholder="Name" name="name" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <input type ="text" class="form-control bdc-grey-200"  placeholder="Surname" name="surname" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <input type ="email" class="form-control bdc-grey-200"  placeholder="Email" name="email" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <select name="gender" class="form-control bdc-grey-200">
                                            <option value="">Select Gender</option>
                                            <option value="Female">
                                                Female
                                            </option>
                                            <option value="Male">
                                                Male
                                            </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <div class="timepicker-input input-icon form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon bgc-white bd bdwR-0">
                                                    <i class="ti-calendar">
                                                    </i></div>
                                                <input type="text" class="form-control bdc-grey-200 start-date" name="dob" placeholder="Date of Birth" data-provide="datepicker" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <select name="level"  id ="level" class="form-control bdc-grey-200">
                                            <option value="">Select Grade</option>
                                            @foreach($data as $item)
                                                <option value="{{$item->id}}">
                                                    {{$item->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select name="sublevel" id="subLevel" class="form-control bdc-grey-200">
                                            <option value="">Select Class</option>
                                        </select>
                                    </div>

                                    <div class="text-right">
                                        <button class="btn btn-primary cur-p" data-dismiss="modal">Close</button>
                                        <button type="submit"  class="btn btn-primary cur-p">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            @include('newAdmin.masterFooter')
        </div>
    </div>
@stop
