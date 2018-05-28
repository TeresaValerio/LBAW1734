<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

////////////////////
///// HOMEPAGE /////
////////////////////

Route::get('/', function () {
    try{
    $userAuth = auth()->user()->id;
    return back()->withInput();;
    }
    catch (\Exception $e){
   
    return view('pages.welcome');
    }  
});


/////////////////////////
///// PERSONAL INFO /////
/////////////////////////

Route::get('/{userId}/personalInfo', function ($userId){
    try{
    $userAuth = auth()->user()->id;
    }
    catch (\Exception $e){
        return redirect ('/');
    }
    
    if ($userAuth == $userId){
    $person = DB::table('users')->find($userId);
    $picture=DB::table('profile_picture')->where('id_user',$userId)->value('path');

    return view('pages.userInfo', compact('person','picture'));
    }
    else{
    $userId=$userAuth;
    $person = DB::table('users')->find($userId);
    $picture=DB::table('profile_picture')->where('id_user',$userId)->value('path');
    return redirect ($userAuth.'/personalInfo');
    }
});


/////////////////////////
///// USER CALENDAR /////
/////////////////////////

Route::get('/{userId}/userCalendar', function ($userId){
    try{
    $userAuth = auth()->user()->id;
    }
    catch (\Exception $e){
        return redirect ('/');
    }
    
    if ($userAuth == $userId){
    $person = DB::table('users')->find($userId);
    
    $tasks_deadlines = DB::table('task')->where('id_creator',$userId)->pluck('deadline');
    echo("TASKS DEADLINES: ");
    echo ($tasks_deadlines);


    //foreach ($tasks_deadlines as $task_deadline) {
        //echo $task_deadline;
        //echo $tasks_deadlines()->where('deadline',$task_deadline)->pluck('deadline');
    //}






    
    
    

    


    /*$personal_events = DB::table('personal_event')->where('id_user',$userId)->pluck('date','name','place');
    echo("PERSONAL EVENTS: ");
    echo ($personal_events);


    $projects_deadlines = DB::table('projects')->where('id_coordinator',$userId)->pluck('end_date','name');
    echo("PROJECTS DEADLINES: ");
    echo ($projects_deadlines);

    $projects_deadlines2 = DB::table('projects')->join('project_team','projects.id','=','project_team.id_project')->where('id_user',$userId)->pluck('end_date','name');
    echo("PROJECTS DEADLINES 2: ");
    echo ($projects_deadlines2);

    $meetings = DB::table('meeting')->join('board_team','meeting.id_board','=','board_team.id_board')->where('id_user',$userId)->pluck('date','place');
    echo("MEETINGS: ");
    echo ($meetings);*/


    return view('pages.userCalendar', compact('person','picture','tasks_deadlines'));
    }
    else{
    $userId=$userAuth;
    $person = DB::table('users')->find($userId);
    return redirect ($userAuth.'/userCalendar');
    }
});


/////////////////////////
///// USER PROJECTS /////
/////////////////////////

Route::get('/{userId}/userProjects', function ($userId) {
    try{
    $userAuth = auth()->user()->id;
    }
    catch (\Exception $e){
        return redirect ('/');
    }

    if ($userAuth == $userId){
    $person=DB::table('users')->find($userId);
    $created_ids=DB::table('projects')->where('id_coordinator',$userId)->pluck('id');
    $working_ids=DB::table('project_team')->where('id_user',$userId)->pluck('id_project');

    return view('pages.userProjects', compact ('person', 'created_ids', 'working_ids'));
    }
    else{
    $userId=$userAuth;
    $person=DB::table('users')->find($userId);
    $created_ids=DB::table('projects')->where('id_coordinator',$userId)->pluck('id');
    $working_ids=DB::table('project_team')->where('id_user',$userId)->pluck('id_project');
    return redirect ($userAuth.'/userProjects');
    }
});


////////////////////
///// SETTINGS /////
////////////////////

Route::get('/{userId}/settings', function ($userId) {
    try{
    $userAuth = auth()->user()->id;
    }
    catch (\Exception $e){
        return redirect ('/');
    }

    if ($userAuth == $userId){
    $person = DB::table('users')->find($userId);
    
    return view('pages.settings', compact('person'));
    }
    else{
        $userId=$userAuth;
        $person = DB::table('users')->find($userId);
    return redirect ($userAuth.'/settings');    
    }

});


//////////////////////////
///// PROJECT BOARDS /////
//////////////////////////

Route::get('/{projectId}/projectBoards', function ($projectId) {
    $project = DB::table('projects')->find($projectId);
    $boards_ids = DB::table('board')->where('id_project',$projectId)->pluck('id');
    return view('pages.projectBoard', compact('project', 'boards_ids'));
});


////////////////////////
///// PROJECT TEAM /////
////////////////////////

Route::get('/{projectId}/projectTeam', function ($projectId) {
    $project = DB::table('projects')->find($projectId);
    $team_ids = DB::table('project_team')->where('id_project',$projectId)->pluck('id_user');
    return view('pages.projectTeam', compact('project', 'team_ids'));
});

Route::post('/project','ProjectsController@store');

Route::post('/loginme','Auth\LoginController@login');

Route::post('/register','Auth\RegisterController@register');

Route::get('/logout','Auth\LogoutController@logout');

Route::post('/changePassword','SettingsController@changePassword');
Route::post('/changeFullName','SettingsController@changeFullName');
Route::post('/changePrivacy','SettingsController@changePrivacy');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

