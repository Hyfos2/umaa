@extends('internal.welcome')
@section('content')

    <div class="pagehead repohead instapaper_ignore readability-menu experiment-repo-nav  ">
        <div class="repohead-details-container clearfix container">
            @include('internal.teacher.breadcrumbs')
        </div>

        <nav class="reponav js-repo-nav js-sidenav-container-pjax container" itemscope="" itemtype="http://schema.org/BreadcrumbList" role="navigation" data-pjax="#js-repo-pjax-container">

            <span itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement">
      <a itemprop="url" data-hotkey="g i" class="js-selected-navigation-item reponav-item" data-selected-links="repo_issues repo_labels repo_milestones /Hyfos2/eps-system/issues" href="{{url('class/'.encryptFormId($levelId).'/'.encryptSubjectId($subId))}}">
        <span itemprop="name">Register</span>
        <meta itemprop="position" content="2">
</a>    </span>

            <span itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a data-hotkey="g p" itemprop="url" class="js-selected-navigation-item selected reponav-item" data-selected-links="repo_pulls checks /Hyfos2/eps-system/pulls" href="{{url('dailyExercises/'.encryptFormId($levelId).'/'.encryptSubjectId($subId))}}">
      <span itemprop="name">Daily Exercises</span>
      <span class="Counter">0</span>
      <meta itemprop="position" content="3">
</a>  </span>

            <span itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement">
      <a itemprop="url" data-hotkey="g i" class="js-selected-navigation-item reponav-item" data-selected-links="repo_issues repo_labels repo_milestones /Hyfos2/eps-system/issues" href="{{url('endOfTerm/'.encryptFormId($levelId).'/'.encryptSubjectId($subId))}}">
        <span itemprop="name">End of Term Marks</span>
        <span class="Counter">0</span>
        <meta itemprop="position" content="2">
</a>    </span>

        </nav>


    </div>



    <div class="container new-discussion-timeline experiment-repo-nav  ">
        <div class="repository-content ">

    <div class="js-repo-meta-container">
        <div class="repository-meta mb-0  js-repo-meta-edit js-details-container ">
            <div class="repository-meta-content col-11 mb-1">
          <span class="col-11 text-gray-dark mr-2" itemprop="about">
               <strong>{{$subjectDetails->name}}</strong>
          </span>
            </div>

            <span class="edit-link">
        <button type="button" class="btn btn-sm float-right js-details-target js-edit-repo-meta-button js-edit-repo-meta-toggle" aria-expanded="false">Add Topic</button>
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

                <div class="AvatarStack flex-self-start ">
                    <div class="AvatarStack-body" aria-label="hyfos2">

                        <img src="{{asset('img/male.png')}}" width="20" height="20" class="avatar" alt="hyfos2">
                    </div>
                </div>

                <div class="flex-auto f6 no-wrap mr-3">
                    <span class="commit-author user-mention">Students Names</span>
                </div>

                {{--<div class="no-wrap">--}}
                {{--Latest commit--}}
                {{--<a class="commit-tease-sha" href="https://github.com/Hyfos2/eps-system/commit/9a16981172d3a17d4397b5746236088481517e07" data-pjax="">--}}
                {{--9a16981--}}
                {{--</a>--}}
                {{--<span itemprop="dateModified"><relative-time datetime="2018-05-11T03:43:12Z" title="May 11, 2018, 5:43 AM GMT+2">on May 11</relative-time></span>--}}
                {{--</div>--}}
            </div>

            <div class="file-wrap">
                <a class="d-none js-permalink-shortcut" data-hotkey="y" href="https://github.com/Hyfos2/eps-system/tree/9a16981172d3a17d4397b5746236088481517e07">Permalink</a>

                <table class="files js-navigation-container js-active-navigation-container" data-pjax="">


                    <tbody>
                    <tr class="warning include-fragment-error">
                        <td class="icon">
                        </td>
                        <td class="content" colspan="3">Failed to load latest commit information.</td>
                    </tr>



                    @foreach($students as $student)
                        <tr class="js-navigation-item">


                            <td class="icon">
                                <svg class="octicon octicon-file-directory" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M13 4H7V3c0-.66-.31-1-1-1H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zM6 4H1V3h5v1z"></path></svg>
                                <img width="16" height="16" class="spinner" alt="" src="{{asset('img/octocat-spinner-32.gif')}}">
                            </td>

                            <td class="message">
                            <span class="css-truncate css-truncate-target">
                                <a class="js-navigation-open" title="app" id="d2a57dc1d883fd21fb9951699df71cc7-465ec0896745a3dfb42d2a67ae3c11a5e49b3833" href="https://github.com/Hyfos2/eps-system/tree/master/app">{{$student->username}} {{$student->surname}}({{$student->gender}})</a></span>
                            </td>

                            <form class="starred js-social-form" id="register-form" action="{{url('recordExercise')}}" accept-charset="UTF-8" method="post">
                                    {{csrf_field()}}
                                <td class="content">
                                    <input   type="hidden" value="{{$levelId}}"    name="levelId" >
                                    <input type="hidden" value="{{$subjectDetails->id}}" name="subjectId">
                                    <input type="text" name="mark"  id="mark" placeholder="Enter mark" autocomplete="off">
                                    <input type="text" name="comment" id ="comment" placeholder="Enter comment" autocomplete="off">
                                    <input type="hidden" name="studentId" value="{{$student->studentId}}" id="student">

                                </td>
                                <td class="age">
                                    <button type="submit"  onclick="event.preventDefault();document.getElementById('register-form').submit();" class="btn btn-sm btn-with-count js-toggler-target" aria-label="Unstar this repository" title="Unstar Hyfos2/eps-system" data-ga-click="Repository, click unstar button, action:files#disambiguate; text:Unstar">Save</button>
                                </td>

                            </form>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>




















        </div></div>







@stop