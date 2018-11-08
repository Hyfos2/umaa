@extends('internal.welcome')
@section('content')
    <div class="pagehead repohead instapaper_ignore readability-menu experiment-repo-nav  ">
        <div class="repohead-details-container clearfix container">
            @include('internal.teacher.breadcrumbs')
            @include('newAdmin.alertMessages')

        </div>

        <nav class="reponav js-repo-nav js-sidenav-container-pjax container" itemscope="" itemtype="http://schema.org/BreadcrumbList" role="navigation" data-pjax="#js-repo-pjax-container">

            <span itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement">
      <a itemprop="url" data-hotkey="g i" class="js-selected-navigation-item reponav-item" data-selected-links="repo_issues repo_labels repo_milestones /Hyfos2/eps-system/issues" href="{{url('class/'.encryptFormId($levelId).'/'.encryptSubjectId($subId))}}">
        <span itemprop="name">Register</span>
        <meta itemprop="position" content="2">
      </a>
            </span>

            <span itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a data-hotkey="g p" itemprop="url" class="js-selected-navigation-item reponav-item" data-selected-links="repo_pulls checks /Hyfos2/eps-system/pulls" href="{{url('dailyExercises/'.encryptFormId($levelId).'/'.encryptSubjectId($subId))}}">
      <span itemprop="name">Daily Exercises</span>
      <span class="Counter">0</span>
      <meta itemprop="position" content="3">
    </a>
            </span>


            <span itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a data-hotkey="g p" itemprop="url" class="js-selected-navigation-item selected reponav-item" data-selected-links="repo_pulls checks /Hyfos2/eps-system/pulls" href="{{url('endOfTerm/'.encryptFormId($levelId).'/'.encryptSubjectId($subId))}}">
      <span itemprop="name">End of Term Marks</span>
      <span class="Counter">0</span>
      <meta itemprop="position" content="3">
    </a>
            </span>

        </nav>


    </div>

    <div class="container new-discussion-timeline experiment-repo-nav  ">
        <div class="repository-content ">

            <div class="js-repo-meta-container">
                <div class="repository-meta mb-0  js-repo-meta-edit js-details-container ">

            <span class="edit-link">
      </span>

                    <form class="edit-repository-meta js-edit-repository-meta" action="{{url('dailyExercise')}}" accept-charset="UTF-8" method="post">
                        <input   type="hidden" value="{{$levelId}}"    name="levelId" >
                        <input type="hidden" value="{{$subjectDetails->id}}" name="subjectId">
                        {{csrf_field()}}
                        <div class="field">
                            <label for="repo_description">Topic</label>
                            <input type="text" autocomplete="off" id="repo_description" class="form-control input-contrast repo-description-field" name="topic"  placeholder="Short description of the topic">
                        </div>
                        <div class="field">
                            <label for="repo_homepage">Total Marks</label>
                            <input type="type" autocomplete="off" id="repo_homepage" class="form-control input-contrast repo-website-field" name="total" value="" placeholder="Exercise total mark">
                        </div>
                        <button class="btn" type="submit">Save</button>
                        or <button type="button" class="btn-link js-details-target    " aria-expanded="true">Cancel</button>
                    </form>

                </div>

            </div>

            <div class="mb-3 mt-2">
                <div class="js-socket-channel js-updatable-content" data-channel="repo:132959192:post-receive:25744257" data-url="/Hyfos2/eps-system/show_partial?partial=tree%2Frecently_touched_branches_list">
                </div>

            </div>

            <div class="commit-tease js-details-container Details d-flex">


                <div class="flex-auto f6 no-wrap mr-3">
                    <span class="commit-author user-mention">Students Names</span>
                </div>

            </div>

            <div class="file-wrap">

                <table class="files js-navigation-container js-active-navigation-container" data-pjax="" id="exercises">

                    <form class="starred js-social-form" id="dailyExercises"  method="POST">
                        {{csrf_field()}}
                        <tbody>

                        @foreach($students as $student)
                            <tr class="js-navigation-item" id="studentNames">

                                <td class="icon">
                                </td>

                                <td class="message">
                            <span class="css-truncate css-truncate-target">
                                <a class="js-navigation-open" title="app"  href="java:void(0);">{{$student->username}} {{$student->surname}}({{$student->gender}})</a></span>
                                </td>


                                <td class="content">
                                    <input   type="hidden" value="{{$levelId}}"    name="levelId" >
                                    <input type="hidden" value="{{$subjectDetails->id}}" name="subjectId" id="subjectId">
                                    <input type="text" name="mark"  id="mark" placeholder="Enter mark" autocomplete="off">
                                    <input type="text" name="comment" id ="comment" placeholder="Enter comment" autocomplete="off">
                                    <input type="hidden" name="studentId" value="{{$student->studentId}}" id="student">
                                </td>
                                <td class="age">
                                    <button   onclick=" event.preventDefault();" id="individualRecord"  class="btn btn-sm btn-with-count js-toggler-target" aria-label="Unstar this repository" data-ga-click="Repository, click unstar button, action:files#disambiguate; text:Unstar">Save</button>
                                </td>


                            </tr>
                        @endforeach

                        </tbody>
                    </form>
                </table>

            </div>

            <div id="readme" class="Box Box--condensed instapaper_body md">
                <div class="Box-header px-2 clearfix">

                    <button  onclick=" event.preventDefault();"   id="allRecords" form ="dailyExercises" style="margin-right:65px;" class="btn btn-sm btn-with-count float-right" aria-label="Unstar this repository" title="Save All" data-ga-click="Repository, click unstar button, action:files#disambiguate; text:Unstar">Save</button>
                </div>
            </div>

        </div></div>

@stop