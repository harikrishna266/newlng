<?php



//for login form and login action
  Route::get('/login','LoginController@ShowLoginPage')->name('login');
  Route::post('/login','LoginController@createlogin')->name('createlogin');

//for registeration form and registeration action
  Route::get('/register','RegisterController@ShowRegisterationForm')->name('showregistration')->name('registerform');
  Route::post('/register','RegisterController@CreateRegistration')->name('registerform');

  Route::group(['middleware' => 'adminauth'], function () {
  Route::get('/home','HomeController@Home')->name('home');  
  Route::get('/logout','LoginController@Logout')->name('logout');  
  Route::get('/sessions','SessionController@listAllSessions')->name('listAllSessions');  
  Route::get('/students','StudentController@listAllStudents')->name('listAllStudents');  

  
  
  //for paid students
  Route::get('/programs/{id}/add','ProgramStudentsController@addStudentToProgram')->name('addStudentToProgram');  
  Route::get('/program/activate/{id}','ProgramStudentsController@activateStudent')->name('activateStudent');

  //for sessions
  Route::get('/sessions/add/{id?}','SessionController@showSessionForm')->name('showSessionForm');  
  Route::post('/sessions/add','SessionController@createSessions')->name('createSessions');  


  Route::get('/programs','ProgramController@listAllPrograms')->name('listAllPrograms');  
  Route::get('/programs/add','ProgramController@ShowProgramFrom')->name('ShowProgramFrom');  
  Route::post('/programs/add','ProgramController@createProgram')->name('createprogram');  
  Route::get('/programs/edit/{id}','ProgramController@ShowEditPage')->name('ShowEditPage');  
  Route::post('/programs/edit/{id}','ProgramController@UpdateProgram')->name('UpdateProgram');  
  Route::get('/programs/delete/{id}','ProgramController@deleteProgram')->name('delete');  
  



  Route::get('/test', 'TestController@listAllTests')->name('listAllTests');
  Route::get('/test/add','TestController@add')->name('addtest');  
  Route::post('/test/save','TestController@save')->name('savetest');  

  Route::get('/questions/add', 'TestQuestionController@addForm')->name('addQeustionForm');
  Route::post('/questions/add', 'TestQuestionController@create')->name('addquestions');
  Route::get('/questions', 'TestQuestionController@index')->name('listAllQuestion');


});
