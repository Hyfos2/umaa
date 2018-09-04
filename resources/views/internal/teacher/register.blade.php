@extends('internal.welcome')
@section('content')
    <div class="pagehead repohead instapaper_ignore readability-menu experiment-repo-nav  ">
        <div class="repohead-details-container clearfix container">
        @include('internal.teacher.breadcrumbs')

        </div>

        <nav class="reponav js-repo-nav js-sidenav-container-pjax container" itemscope="" itemtype="http://schema.org/BreadcrumbList" role="navigation" data-pjax="#js-repo-pjax-container">

            <span itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement">
      <a itemprop="url" data-hotkey="g i" class="js-selected-navigation-item selected reponav-item" data-selected-links="repo_issues repo_labels repo_milestones /Hyfos2/eps-system/issues" href="{{url('class/'.encryptFormId($levelId).'/'.encryptSubjectId($subId))}}">
        <span itemprop="name">Register</span>
        <meta itemprop="position" content="2">
     </a>
            </span>

            <span itemscope="" itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a data-hotkey="g p" itemprop="url" class="js-selected-navigation-item reponav-item" data-selected-links="repo_pulls checks /Hyfos2/eps-system/pulls" href="{{url('dailyExercises/'.encryptFormId($levelId).'/'.encryptSubjectId($subId))}}">
            <span itemprop="name">Daily Exercises</span>
      <span class="Counter">0</span>
      <meta itemprop="position" content="3">
</a>  </span>

            <a data-hotkey="g b" class="js-selected-navigation-item reponav-item" data-selected-links="repo_projects new_repo_project repo_project /Hyfos2/eps-system/projects" href="{{url('endOfTerm/'.encryptFormId($levelId).'/'.encryptSubjectId($subId))}}">
                End of Term Marks
                <span class="Counter">0</span>
            </a>
        </nav>


    </div>


    <div class="container new-discussion-timeline experiment-repo-nav  ">
        <div class="repository-content ">

            <div class="js-repo-meta-container">
                <div class="repository-meta mb-0  js-repo-meta-edit js-details-container ">
                    <div class="repository-meta-content col-11 mb-1">
                          <span class="col-11 text-gray-dark mr-2" itemprop="about">
                            Students List
                          </span>
                    </div>
                    </div>
            </div>
            <div class="overall-summary overall-summary-bottomless">
                <div class="stats-switcher-viewport js-stats-switcher-viewport">
                    <div class="stats-switcher-wrapper">
                        <ul class="numbers-summary">
                            <li class="commits">
                                <a data-pjax="" href="javascript:void(0);">
                                    <svg class="octicon octicon-history" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M8 13H6V6h5v2H8v5zM7 1C4.81 1 2.87 2.02 1.59 3.59L0 2v4h4L2.5 4.5C3.55 3.17 5.17 2.3 7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-.34.03-.67.09-1H.08C.03 7.33 0 7.66 0 8c0 3.86 3.14 7 7 7s7-3.14 7-7-3.14-7-7-7z"></path></svg>
                                    @if($girls ==1)
                                    <span class="num text-emphasized">
                {{$girls}}
              </span>
                                    Girl

                                        @else
                                        <span class="num text-emphasized">
                                        {{$girls}}
                                        </span>
                                        Girls
                                    @endif
                                </a>
                            </li>
                            <li>
                                <a data-pjax="" href="javascript:void(0);">
                                    <svg class="octicon octicon-git-branch" viewBox="0 0 10 16" version="1.1" width="10" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M10 5c0-1.11-.89-2-2-2a1.993 1.993 0 0 0-1 3.72v.3c-.02.52-.23.98-.63 1.38-.4.4-.86.61-1.38.63-.83.02-1.48.16-2 .45V4.72a1.993 1.993 0 0 0-1-3.72C.88 1 0 1.89 0 3a2 2 0 0 0 1 1.72v6.56c-.59.35-1 .99-1 1.72 0 1.11.89 2 2 2 1.11 0 2-.89 2-2 0-.53-.2-1-.53-1.36.09-.06.48-.41.59-.47.25-.11.56-.17.94-.17 1.05-.05 1.95-.45 2.75-1.25S8.95 7.77 9 6.73h-.02C9.59 6.37 10 5.73 10 5zM2 1.8c.66 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2C1.35 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2zm0 12.41c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm6-8c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"></path></svg>
                                   @if($boys ==1)
                                    <span class="num text-emphasized">
                 {{$boys}}
            </span>
                                    Boy
                                       @else<span class="num text-emphasized">
                 {{$boys}}
            </span>
                                    Boys
                                       @endif

                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <svg class="octicon octicon-tag" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.685 1.72a2.49 2.49 0 0 0-1.76-.726H3.48A2.5 2.5 0 0 0 .994 3.48v2.456c0 .656.269 1.292.726 1.76l6.024 6.024a.99.99 0 0 0 1.402 0l4.563-4.563a.99.99 0 0 0 0-1.402L7.685 1.72zM2.366 7.048A1.54 1.54 0 0 1 1.9 5.925V3.48c0-.874.716-1.58 1.58-1.58h2.456c.418 0 .825.159 1.123.467l6.104 6.094-4.702 4.702-6.094-6.114zm.626-4.066h1.989v1.989H2.982V2.982h.01z"></path></svg>
                                    <span class="num text-emphasized">
              0
            </span>
                                    releases
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0);">
                                    <svg class="octicon octicon-organization" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M16 12.999c0 .439-.45 1-1 1H7.995c-.539 0-.994-.447-.995-.999H1c-.54 0-1-.561-1-1 0-2.634 3-4 3-4s.229-.409 0-1c-.841-.621-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.442.58 2.5 3c.058 2.41-.159 2.379-1 3-.229.59 0 1 0 1s1.549.711 2.42 2.088C9.196 9.369 10 8.999 10 8.999s.229-.409 0-1c-.841-.62-1.058-.59-1-3 .058-2.419 1.367-3 2.5-3s2.437.581 2.495 3c.059 2.41-.158 2.38-1 3-.229.59 0 1 0 1s3.005 1.366 3.005 4z"></path></svg>
                                    <span class="num text-emphasized">
      1
    </span>
                                    New Comer
                                </a>
                            </li>
                        </ul>

                        <div class="repository-lang-stats">
                            <ol class="repository-lang-stats-numbers">
                                <li>
                                    <a href="https://github.com/Hyfos2/eps-system/search?l=html" data-ga-click="Repository, language stats search click, location:repo overview">
                                        <span class="color-block language-color" style="background-color:#e34c26;"></span>
                                        <span class="lang">HTML</span>
                                        <span class="percent">57.7%</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/Hyfos2/eps-system/search?l=php" data-ga-click="Repository, language stats search click, location:repo overview">
                                        <span class="color-block language-color" style="background-color:#4F5D95;"></span>
                                        <span class="lang">PHP</span>
                                        <span class="percent">41.9%</span>
                                    </a>
                                </li>
                                <li>
                <span>
                  <span class="color-block language-color" style="background-color:#ededed;"></span>
                  <span class="lang">Other</span>
                  <span class="percent">0.4%</span>
                </span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="repository-lang-stats-graph js-toggle-lang-stats" title="Click for language details" data-ga-click="Repository, language bar stats toggle, location:repo overview">
                <span class="language-color" aria-label="HTML 57.7%" style="width:57.7%; background-color:#e34c26;" itemprop="keywords">HTML</span>
                <span class="language-color" aria-label="PHP 41.9%" style="width:41.9%; background-color:#4F5D95;" itemprop="keywords">PHP</span>
                <span class="language-color" aria-label="Other 0.4%" style="width:0.4%; background-color:#ededed;" itemprop="keywords">Other</span>
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

                <form class="starred js-social-form" id="register-form" action="{{url('signregister')}}" accept-charset="UTF-8" method="post">
                <table class="files js-navigation-container js-active-navigation-container" data-pjax="" id="registerTable">


                    <tbody>

                    @foreach($students as $student)
                    <tr class="js-navigation-item">


                        <td class="icon">
                            <svg class="octicon octicon-file-directory" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true">
                                <path fill-rule="evenodd" d="M13 4H7V3c0-.66-.31-1-1-1H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zM6 4H1V3h5v1z"></path></svg>
                            <img width="16" height="16" class="spinner" alt="" src="{{asset('img/octocat-spinner-32.gif')}}">
                        </td>

                        <td class="content">
                            <span class="css-truncate css-truncate-target">
                                <a class="js-navigation-open" title="app"  href="">{{$student->username}} {{$student->surname}}({{$student->gender}})</a></span>
                        </td>



                            <td class="message">
                                <input type="radio" name="absentism[]" value="present" id="present">
                            </td>

                        <td class="message">
                           <input type="hidden" name="studentId" value="{{$student->studentId}}" id="student">
                           <input type="hidden" name="subjectId" value="{{$student->subjectId}}" id="subject">
                           <input type="radio" name="absentism[]"  value="absent" id="absent">
                            <input type="text"  name="reason" id="absenceReason" class="dontShow" placeholder="Absent Reason">

                        </td>
                        <td class="age">
                            <button type="submit"  onclick="submitRegisterInfo();" class="btn btn-sm btn-with-count js-toggler-target" aria-label="Unstar this repository" title="Unstar Hyfos2/eps-system" data-ga-click="Repository, click unstar button, action:files#disambiguate; text:Unstar">Save</button>
                        </td>


                    </tr>
                    @endforeach

                    </tbody>
                </table>
                </form>

            </div>



            <div id="readme" class="Box Box--condensed instapaper_body md">
                <div class="Box-header px-2 clearfix">

                    <button type="submit"  style="margin-right:65px;" class="btn btn-sm btn-with-count float-right" aria-label="Unstar this repository" title="Save All" data-ga-click="Repository, click unstar button, action:files#disambiguate; text:Unstar">Save</button>
                </div>
            </div>




        </div>
        <div class="modal-backdrop js-touch-events"></div>
    </div>

@stop