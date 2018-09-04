<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="{{asset('css/welcome.css')}}" rel="stylesheet">
    <link href="{{asset('css/secondWelcome.css')}}" rel="stylesheet">
    <link href="{{asset('css/display.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/chart.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width">
    <title>Wise Owl</title>
</head>

<body class="logged-in env-production">


<div class="position-relative js-header-wrapper ">
    <div id="js-pjax-loader-bar" class="pjax-loader-bar">
        <div class="progress">
        </div>
    </div>

    <header class="Header  f5" role="banner">
        <div class="d-flex flex-justify-between px-3 container-lg">
            <div class="d-flex flex-justify-between ">
                <div class="">
                    <a class="header-logo-invertocat" href="javascript:void(0);" data-hotkey="g d" aria-label="Homepage" data-ga-click="Header, go to dashboard, icon:logo">
                        <svg height="32" class="octicon octicon-mark-github" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true">
                            <img alt="@Hyfos2" class="avatar float-left mr-1" src="{{asset('img/download.jpg')}}" height="32" width="32">
                        </svg>
                    </a>

                </div>

            </div>

            <div class="HeaderMenu d-flex flex-justify-between flex-auto">
                <div class="d-flex">
                    <div class="">
                        <div class="header-search scoped-search site-scoped-search js-site-search position-relative js-jump-to" role="search combobox" aria-owns="jump-to-results" aria-label="Search or jump to" aria-haspopup="listbox" aria-expanded="true">
                            <div class="position-relative">
                                </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex">

                    <ul class="user-nav d-flex flex-items-center list-style-none" id="user-links">
                        <li class="dropdown">
    <span class="d-inline-block  px-2">

    <a aria-label="You have no unread notifications" class="notification-indicator tooltipped tooltipped-s  js-socket-channel js-notification-indicator" data-hotkey="g n" data-ga-click="Header, go to notifications, icon:read" data-channel="notification-changed:25744257" href="javascript:void(0);notifications">
        <span class="mail-status "></span>
        <svg class="octicon octicon-bell" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true">
            <path fill-rule="evenodd" d="M13.99 11.991v1H0v-1l.73-.58c.769-.769.809-2.547 1.189-4.416.77-3.767 4.077-4.996 4.077-4.996 0-.55.45-1 .999-1 .55 0 1 .45 1 1 0 0 3.387 1.229 4.156 4.996.38 1.879.42 3.657 1.19 4.417l.659.58h-.01zM6.995 15.99c1.11 0 1.999-.89 1.999-1.999H4.996c0 1.11.89 1.999 1.999 1.999z"></path></svg>
</a>
    </span>
                        </li>


                        <li class="dropdown">

                            <details class="details-overlay details-reset d-flex pl-2 flex-items-center">
                                <summary class="HeaderNavlink name mt-1" aria-label="View profile and more" data-ga-click="Header, show menu, icon:avatar" aria-haspopup="menu">
                                    <img alt="@Hyfos2" class="avatar float-left mr-1" src="{{asset('img/download.jpg')}}" height="20" width="20">
                                    <span class="dropdown-caret"></span>
                                </summary>
                                <details-menu class="dropdown-menu dropdown-menu-sw" role="menu">
                                    <ul>
                                        <li class="header-nav-current-user css-truncate">
                                            <a role="menuitem" class="no-underline user-profile-link px-3 pt-2 pb-2 mb-n2 mt-n1 d-block" href="javascript:void(0)" data-ga-click="Header, go to profile, text:Signed in as">Welcome <strong class="css-truncate-target"> {{ucfirst(\Auth::user()->name)[0]}}. {{ucfirst(\Auth::user()->surname)}}</strong></a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a role="menuitem" class="dropdown-item" href="javascript:void(0);" data-ga-click="Header, go to profile, text:your profile">Your profile</a></li>
                                        <li><a role="menuitem" class="dropdown-item" href="javascript:void(0);" data-ga-click="Header, go to settings, icon:settings">Settings</a></li>

                                        <li>
                                             <form class="logout-form" id="logout-form" action="{{ route('logout') }}" method="POST" accept-charset="UTF-8">
                                                {{ csrf_field() }}
                                                <a role="menuitem" class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();
                                            loggingOut();">
                                                    Log out
                                                </a>

                                            </form>
                                        </li>

                                    </ul>
                                </details-menu>
                            </details>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </header>



</div>

<div id="start-of-content" class="show-on-focus"></div>

<div id="js-flash-container">
</div>

<div role="main" class="application-main ">
    <div itemscope="" itemtype="http://schema.org/SoftwareSourceCode" class="">
        <div id="js-repo-pjax-container" data-pjax-container="">
            @yield('content')
        </div>
    </div>

</div>
@include('internal.footer')
<script type="text/javascript" src="{{asset('js/welcome.js')}}"></script>
<script type="text/javascript" src="{{asset('js/secondWelcome.js')}}"></script>
<script type="text/javascript" src="{{asset('calendar.js.download')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script  type="text/javascript" src="{{asset('newAdmin/js/demo.js')}}" ></script>

<template id="site-details-dialog"></template>
<div class="Popover js-hovercard-content position-absolute" style="display: none; outline: none;" tabindex="0">
    <div class="Popover-message Popover-message--bottom-left Popover-message--large Box box-shadow-large" style="width:360px;">
    </div>
</div>

</body>
</html>