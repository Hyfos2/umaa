<?php

Auth::routes();
//Internal  core of the Application

Route::resource('/','MainController');


Route::group(['middleware'=>['auth']], function()
{
    //Gateway to the app
    Route::get('welcome','MainController@welcome');

    //Teacher

    //Primary
    Route::get('primarystdnt','PrimaryController@primaryStudent');
    Route::get('primarytchr','PrimaryController@primaryTeacher');
    Route::resource('primaryschool','PrimaryController');

    //Secondary

    Route::get('stdnts','SecondaryController@students');
    Route::get('tcher','SecondaryController@teachers');
    Route::get('primarytchr','PrimaryController@primaryTeacher');
    Route::resource('secondary','SecondaryController');
    //Accounts
    Route::resource('accounts','AccountsController');
    //School fees
    Route::resource('fees','SchoolFeesController');
    //Subjects
    Route::get('new-subjects','SubjectController@newSubjects');
    Route::get('manage-subjects','SubjectController@manageSubjects');
    Route::resource('subject','SubjectController');

//Student Subjects
    Route::resource('std-subject','StudentSubjectsController');
//StudentSports
    Route::resource('std-sport','StudentSportsController');
//subject mark
    Route::resource('sbj-mark','SubjectMarksController');
    //Students Routes
    Route::get('stdntprof/{id}','StudentsController@stdntprof');
    Route::get('maleStudents/{levelId}/{sub}','StudentsController@male')->name('maleStudents');
    Route::get('femaleStudents/{levelId}/{sub}','StudentsController@female')->name('femaleStudents');
    Route::get('recordMarks/{id}/{sub}','StudentsController@newMarks')->name('recordMarks');
    Route::post('newmark','StudentsController@recordNewMarks');
    Route::post('student','StudentsController@newStudent');
    Route::get('report/{studId}','StudentsController@report')->name('report');
    Route::get('results','StudentsController@results')->name('results');

    //Admin
    Route::get('manage-teachers','AdminController@manageTeachers');
    Route::get('manage-students','AdminController@manageStudents');
    Route::get('add-student','AdminController@addStudents');
    Route::get('add-teacher','AdminController@addTeacher');
    Route::get('student-logs','AdminController@studentLogs');
    Route::get('teacher-logs','AdminController@teacherLogs');
    Route::get('set-permission','AdminController@setPermission');
    Route::get('student-permission','AdminController@studentPermission');
    Route::get('teacher-permission','AdminController@teacherPermission');
    Route::post('new-student','AdminController@newStudents');
    Route::post('new-teacher','AdminController@newTeacher');
    Route::post('setStdPermission','AdminController@setStdPermission');
    Route::post('new-permission','AdminController@newPermission');
    Route::get('dctvtUser/{id}','AdminController@dctvtUser');
    //Route::post('','AdminController@dctvtUser');
    Route::resource('adminpnl','AdminController');
//Sport
    Route::resource('sport','SportController');
//Teachers
    Route::get('department','TeachersController@department');
    Route::post('dailyExercise','TeachersController@dailyExerciseTopic');
    Route::post('recordExercise','TeachersController@recordExercise');
    Route::post('classignregister','TeachersController@signRegister');
    Route::get('dailyExercises/{levelId}/{subId}','TeachersController@dailyExercises');
    Route::get('endOfTerm/{levelId}/{subId}','TeachersController@endOfTerm');
    Route::get('class/{levelId}/{subId}','TeachersController@getClass');
    Route::get('tchrprof/{id}','TeachersController@teacherProf');
    Route::get('getprimaryteachers','TeachersController@primaryTeachers');
    Route::get('getteachers','TeachersController@secondaryTeachers');
    Route::resource('classes','TeachersController');

//Settings
    Route::post('updatePwd','SettingsController@updatePwd');
    Route::resource('settings','SettingsController');

//Levels
//Route::any('form/{id}','LevelsController@getFormStudents');

    Route::get('levels','AdminController@levels');
    Route::post('primary-subLevel','LevelsController@createPrimarySubLevels');
    Route::post('edit-subLevel','LevelsController@editPrimarySubLevel');
    Route::get('primaryLevels','LevelsController@showPrimaryLevels');
    Route::post('new-subLevel','LevelsController@createLevel');
    Route::get('getSubLevel/{id}','LevelsController@subLevels');

//Users
    Route::get('userLogs','UsersController@userLogs');
    Route::resource('users','UsersController');

//Types
    Route::post('createType','TypeController@createType');

//Position
    Route::resource('position','PositionsController');

//SubLevel
    Route::resource('sub-level','SubLevelController');
//Domitory
    Route::post('allocate-rooms','DomitoryController@allocateRooms');
    Route::resource('hostel','DomitoryController');
//Subject level

    Route::resource('sbj-level','SubjectLevelsController');
//Staff

    Route::post('new-working-area','StaffController@createWorkingArea');
    Route::get('get-roaster','StaffController@getRoaster');
    Route::post('new-roaster','StaffController@createRoaster');
    Route::post('sign-register','StaffController@staffRegister');
    Route::get('show-staff-register','StaffController@getCleanersRegister');
    Route::resource('staff','StaffController');

//StaffWork
    Route::resource('staff-work','StaffWorkController');
    //Calendar
    Route::get('calendarEvents','CalendarController@calendarEvents');
    Route::get('allCalendarEvents','CalendarController@allCalendarEvents');
    Route::resource('calendar','CalendarController');
});




