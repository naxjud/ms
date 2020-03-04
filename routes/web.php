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


Route::get('post/{post}','PostsController@show');



// //Working with wildcards in a route here it is {post}
// Route::get('post/{post}',function($post){

// // simulate a DB
//     $posts =[
//         'first'  => 'Hello World',
//         'second' => 'some other content'
//     ];

//     if (! array_key_exists($post, $posts)){
//         //abort(response( 'Sorry Post not found',404));
//         abort(404,'Post not found');
//     }

//     return $posts[$post] ?? 'Nothing here yet';
// });

//get the variables from the request
// Route::get('/test',function(){
//     // $name = request('name');

//     // return view('test',[
//     //     'name' => $name
//     // ]);

//     return view('test',[
//         'name' => request('name')
//     ]);

//     // return $name;
// });



// Route::get('/test',function(){
//     return view('test');
// });



// Route::get('/', function () {
//     return ['foo'=>'bar'];
// });

// Route::get('/1', function () {
//     return "Hello World";
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });
