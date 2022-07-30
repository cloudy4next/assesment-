<?php

// Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
//     Route::apiResource('permissions', 'PermissionsApiController');

//     Route::apiResource('roles', 'RolesApiController');

//     Route::apiResource('users', 'UsersApiController');

//     Route::apiResource('appointments', 'AppointmentsApiController');

// });

Route::group(['prefix' => 'v1','namespace' => 'Api\V1\Admin','middleware' => ['cors']], function () {
    Route::post('login', 'AuthApiController@login');
    Route::post('logout', 'AuthApiController@logout');
});

Route::group(['prefix' => 'v1/appointment','namespace' => 'Api\V1\Admin','middleware' => ['cors','auth:api']], function(){
    Route::get('index', 'AppointmentsApiController@index');
    Route::post('store', 'AppointmentsApiController@store');
    Route::post('update', 'AppointmentsApiController@update');
    Route::post('destroy/{id}', 'AppointmentsApiController@destroy');

});

Route::group(['prefix' => 'v1/client','namespace' => 'Api\V1\Admin','middleware' => ['cors','auth:api']], function(){
    Route::get('index', 'ClientsApiController@index');
    Route::post('store', 'ClientsApiController@store');
    Route::post('update', 'ClientsApiController@update');
    Route::post('destroy/{id}', 'ClientsApiController@destroy');
});
Route::group(['prefix' => 'v1/emplyee','namespace' => 'Api\V1\Admin','middleware' => ['cors','auth:api']], function(){
    Route::get('index', 'EmployeesApiController@index');
    Route::post('store', 'EmployeesApiController@store');
    Route::post('update', 'EmployeesApiController@update');
    Route::post('destroy/{id}', 'EmployeesApiController@destroy');
});
Route::group(['prefix' => 'v1/service','namespace' => 'Api\V1\Admin','middleware' => ['cors','auth:api']], function(){
    Route::get('index', 'ServicesApiController@index');
    Route::post('store', 'ServicesApiController@store');
    Route::post('update', 'ServicesApiController@update');
    Route::post('destroy/{id}', 'ServicesApiController@destroy');
});

Route::group(['prefix' => 'v1/users','namespace' => 'Api\V1\Admin','middleware' => ['cors','auth:api']], function(){
    Route::get('index', 'UsersApiController@index');
    Route::post('store', 'UsersApiController@store');
    Route::post('update', 'UsersApiController@update');
    Route::post('destroy/{id}', 'UsersApiController@destroy');
});