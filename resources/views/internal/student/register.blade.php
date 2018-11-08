@extends('internal.welcome')
@section('content')
    <div class="pagehead repohead instapaper_ignore readability-menu experiment-repo-nav  ">
        <div class="repohead-details-container clearfix container">
            @include('internal.student.breadcrumb')
        </div>

        <nav class="reponav js-repo-nav js-sidenav-container-pjax container" itemscope="" itemtype="http://schema.org/BreadcrumbList" role="navigation" data-pjax="#js-repo-pjax-container">
            <span itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement">
      <a itemprop="url" data-hotkey="g i" class="js-selected-navigation-item selected reponav-item" data-selected-links="repo_issues repo_labels repo_milestones /Hyfos2/eps-system/issues" href="{{url('studentreg/'.encryptFormId($studentID))}}">
        <span itemprop="name">Register</span>
        <meta itemprop="position" content="2">
     </a>
            </span>

            {{--<span itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement">--}}
    {{--<a data-hotkey="g p" itemprop="url" class="js-selected-navigation-item reponav-item" data-selected-links="repo_pulls checks /Hyfos2/eps-system/pulls" href="{{url('dailyExercises/'.encryptFormId($levelId).'/'.encryptSubjectId($subId))}}">--}}
            {{--<span itemprop="name">Daily Exercises</span>--}}
      {{--<span class="Counter">0</span>--}}
      {{--<meta itemprop="position" content="3">--}}
{{--</a>  </span>--}}

            {{--<a data-hotkey="g b" class="js-selected-navigation-item reponav-item" data-selected-links="repo_projects new_repo_project repo_project /Hyfos2/eps-system/projects" href="{{url('studentendOfTerm/'.encryptFormId($studentID))}}">--}}
                {{--End of Term Marks--}}
                {{--<span class="Counter">0</span>--}}
            {{--</a>--}}
        </nav>


    </div>


    <div class="container new-discussion-timeline experiment-repo-nav  ">
        <div class="repository-content ">

            <div class="overall-summary overall-summary-bottomless">
                <div class="stats-switcher-viewport js-stats-switcher-viewport">
                </div>
            </div>


            <div class="mb-3 mt-2">
                <div class="js-socket-channel js-updatable-content" data-channel="repo:132959192:post-receive:25744257" data-url="/Hyfos2/eps-system/show_partial?partial=tree%2Frecently_touched_branches_list">
                </div>

            </div>

            <div class="commit-tease js-details-container Details d-flex">

                {{--<div class="AvatarStack flex-self-start ">--}}
                {{--<div class="AvatarStack-body" aria-label="hyfos2">--}}

                {{--<img src="{{asset('img/male.png')}}" width="20" height="20" class="avatar" alt="hyfos2">--}}
                {{--</div>--}}
                {{--</div>--}}

                <div class="flex-auto f6 no-wrap mr-3">
                    <span class="commit-author user-mention">Students Names</span>
                </div>
                <div style="margin-left:350px;">
                    <span class="commit-author user-mention">Present</span>
                </div>

                <div  style="margin-left:50px;">
                    <span class="commit-author user-mention">Absent</span>
                </div>

                <div class="flex-auto f6 no-wrap mr-3"  style="margin-left:50px;">
                </div>


            </div>


            <div class="file-wrap">
                <a class="d-none js-permalink-shortcut" data-hotkey="y" href="https://github.com/Hyfos2/eps-system/tree/9a16981172d3a17d4397b5746236088481517e07">Permalink</a>

                <form class="starred js-social-form" id="classRegister" action="{{url('signregister')}}" accept-charset="UTF-8" method="POST">
                    {{csrf_field()}}
                    <table class="files js-navigation-container js-active-navigation-container" data-pjax="" id="registerTable">

                        <tbody>

                            <tr class="js-navigation-item">
                                <td class="icon">
                                </td>

                                <td class="content">
                            <span class="css-truncate css-truncate-target">
                                {{--<a class="js-navigation-open" title="app"  href="">{{$student->username}} {{$student->surname}}({{$student->gender}})</a>--}}
                            </span>
                                </td>

                                <td class="message">
                                    <input type="checkbox" name="presentStudents[]"  value="present" id="present">
                                    {{--<input type="hidden" name="studentId" value="{{$student->studentId}}" id="student">--}}
                                    {{--<input type="hidden" name="subjectId" value="{{$student->subjectId}}" id="subject">--}}
                                    {{--<input type="radio" name="presentStudents[]"  value="absent" id="absent">--}}
                                    {{--<input type="text"  name="reason" id="absenceReason" class="dontShow" placeholder="Absent Reason">--}}
                                </td>

                                <td class="message">
                                    {{--<input type="hidden" name="studentId" value="{{$student->studentId}}" id="student">--}}
                                    {{--<input type="hidden" name="subjectId" value="{{$student->subjectId}}" id="subject">--}}
                                    <input type="checkbox" name="absentStudents[]"  value="absent" id="absent">
                                    {{--<input type="text"  name="reason" id="absenceReason" class="dontShow" placeholder="Absent Reason">--}}
                                </td>
                                <td class="age">
                                    {{--<button type="submit"   class="btn btn-sm btn-with-count js-toggler-target" aria-label="Unstar this repository" title="Save for {{$student->username}}" data-ga-click="Repository, click unstar button, action:files#disambiguate; text:Unstar">Save</button>--}}
                                </td>

                            </tr>


                        </tbody>
                    </table>
                </form>

            </div>



            <div id="readme" class="Box Box--condensed instapaper_body md">
                <div class="Box-header px-2 clearfix">

                    <button  onclick=" submitRegisterInfo();"  style="margin-right:65px;" class="btn btn-sm btn-with-count float-right" aria-label="Unstar this repository" title="Save All" data-ga-click="Repository, click unstar button, action:files#disambiguate; text:Unstar">Save</button>
                </div>
            </div>



            <div id="snackbar">Saving...</div>
        </div>
        <div class="modal-backdrop js-touch-events"></div>
    </div>

@stop