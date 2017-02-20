<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'FrontendController@index')->name('index');

Route::get('macros', 'FrontendController@macros')->name('macros');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');


        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');

        Route::post('newprofile/profile','ProfileController@newstudent')->name('profile.new');

        //Study plan register sart with meeing pl

        
        Route::post('meet','StudyPlanController@meet')->name('meet');
        Route::post('course','StudyPlanController@courses')->name('course');
        Route::post('plan','StudyPlanController@plan')->name('plan');
        Route::get('planedit','StudyPlanController@planedit')->name('planedit');
        Route::get('showstudy','StudyPlanController@showstudy')->name('showstudy');
        Route::get('showcourse','StudyPlanController@showcourse')->name('showcourse');
        Route::get('showmeet','StudyPlanController@showmeet')->name('showmeet');
         Route::get('showengage','StudyPlanController@showengagement')->name('showengage');

        
        Route::post('activity_create','StudyPlanController@activity_create')->name('activity_create');
        Route::post('engage','StudyPlanController@engage')->name('engage');
        
    });
});
