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

@stop