<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show');

Route::resource('/projects', 'App\Http\Controllers\ProjectsController');

Route::get("/about", function(){
    /* $service = App\Models\Services::all(); */
    /* $service = App\Models\Services::take(2)->get(); */
    /* $service = App\Models\Services::paginate(2); */
/*     $service = App\Models\Services::latest()->get(); // ordenando por ordem decrescente pela data de criação
    return $service; */
    return view("about", [
        "services" => App\Models\Services::latest()->get()
    ]);
});

Route::get("/services", "App\Http\Controllers\ServicesController@index")->name("services.index");

Route::post("/services", "App\Http\Controllers\ServicesController@store");

Route::get("/services/create", "App\Http\Controllers\ServicesController@create");

Route::get("/services/{service}", "App\Http\Controllers\ServicesController@show")->name("services.show");

Route::get("/services/{service}/edit", "App\Http\Controllers\ServicesController@edit");

Route::put("/services/{service}", "App\Http\Controllers\ServicesController@update");


Route::get('/', function () {
    $container = new \App\Models\Container();

    $container->bind('example', function() {
        return new \App\Models\Example();
    });

   $example =  $container->resolve("example");

    ddd($container);
});