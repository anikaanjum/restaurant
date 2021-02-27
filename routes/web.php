<?php



Route::get('/', 'User\HomeController@front');
//cart
Route::get('add-cart', 'User\CartController@add_cart');
Route::get('show-cart', 'User\CartController@show_list');

Route::get('/about', function () {
    return view('user.about');
});
Route::get('/service', function () {
    return view('user.service');
});
Route::get('/contact', function () {
   return view('user.contact');
});


//Dashbord
Route::get('/admin','DashboardController@index');

Route::group(['prefix' => 'admin'],function(){

//Employees
Route::get('employees','EmployeesController@employees');   
Route::get('employee/create','EmployeesController@create');   
Route::post('employee/store','EmployeesController@store');   
Route::get('employee/del/{id}','EmployeesController@del');
Route::get('employee/update/{id}','EmployeesController@update_page');
Route::post('employee/update','EmployeesController@update');   

//Invest
Route::get('invest','InvestController@invest');    
Route::get('invest/create','InvestController@create');    
Route::post('invest/store','InvestController@store');    
Route::get('invest/del/{id}','InvestController@del');    
Route::post('invest/update','InvestController@update');    
Route::get('invest/update_page/{id}','InvestController@update_page');    

//expense
Route::get('expense','ExpenseController@expense');
Route::get('expense/create','ExpenseController@create');
Route::post('expense/store','ExpenseController@store');
Route::get('expense/del/{id}','ExpenseController@del');
Route::post('expense/update/','ExpenseController@update');
Route::get('expense/update_page/{id}','ExpenseController@update_page');

//Income
Route::get('income','IncomeController@income');
Route::get('income/create','IncomeController@create');
Route::post('income/store','IncomeController@store');
Route::get('income/del/{id}','IncomeController@del');
Route::get('income/update_page/{id}','IncomeController@update_page');
Route::post('income/update','IncomeController@update');

//category
Route::get('menu/category','MenuCategoryController@index');
Route::get('menu/category/create','MenuCategoryController@create');
Route::post('menu/category/store','MenuCategoryController@store');
Route::get('menu/category/del/{id}','MenuCategoryController@del');
Route::post('menu/category/update','MenuCategoryController@update');
Route::get('menu/category/update_page/{id}','MenuCategoryController@update_page');





//Menu
Route::get('menu','MenuController@menu');
Route::get('menu/create','MenuController@create');
Route::post('menu/store','MenuController@store');
Route::get('menu/del/{id}','MenuController@del');
Route::post('menu/update','MenuController@update');
Route::get('menu/update_page/{id}','MenuController@update_page');


//front
//Route::get('front','FrontendController@front');



//report

Route::get('expensereport','ReportController@expensereport');
Route::get('incomereport','ReportController@incomereport');
Route::get('investreport','ReportController@investreport');



Route::get('gen_session', 'User\HomeController@gen_session');//Unique Session Generate
Route::get('remove_session', 'User\HomeController@remove_session');//Unique Session Remove
//Unit

});


