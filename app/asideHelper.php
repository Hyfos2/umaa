<?php


use App\User;
use App\Admin;

function primaryTeachers()
{
    return User::where('userTypeId',2)->count();
}
function secondaryTeachers()
{
    return User::where('userTypeId',2)->count();
}

function students()
{
   return User::where('userTypeId',3)->count();
}
function accountants()
{
   return User::where('userTypeId',4)->count();
}
function communicators()
{
   return User::where('userTypeId',6)->count();
}
function educationManagers()
{
   return User::where('userTypeId',5)->count();
}
function parent()
{
   return User::where('userTypeId',7)->count();
}

function admins()
{
   return Admin::count();
}

function sports()
{
    return \App\Sport::count();
}

function currentYear()
{
    return Carbon\Carbon::now()->year;
}
function totalSubjects()
{
    return \App\Subject::count();
}
function curreantDate()
{
    return Carbon\Carbon::now()->format('d');
}
function presentDay()
{
    return Carbon\Carbon::now()->format('l');
}