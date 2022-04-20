<?php

use App\Models\Country;
use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\DB;
use App\Models\User;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Routing\Route as RoutingRoute;

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
    return view('login');
});
Route::get('signup', 'App\Http\Controllers\userController@signup');
Route::post('signupbtn', 'App\Http\Controllers\userController@signupbtn');
Route::get('userlist', 'App\Http\Controllers\userController@userlist');
Route::get('/testing/{id}', 'App\Http\Controllers\userController@testing');
Route::get('update_page', 'App\Http\Controllers\userController@update_page');
Route::get('contact','App\Http\Controllers\userController@contact');
Route::get('arraylist','App\Http\Controllers\userController@arraylist');
Route::post('login','App\Http\Controllers\userController@login');
Route::get('create','App\Http\Controllers\postController@create');
Route::resource('/posts','\App\Http\Controllers\PostController');
Route::get('/index','\App\Http\Controllers\PostController@index');
Route::get('/edit','\App\Http\Controllers\PostController@edit');
//Route::resource('/create', 'App\Http\Controllers\userController');

// Route::get('/insert', function(){

// DB::insert('insert into posts(title, content) values(?,?)', ['PHP with laravel', 'This is pure laravel course with too much fun with edwin',]);
// });

// Route::get('/read', function(){
//    $result = DB::select('select * from posts where id = ?', [1]);

// foreach($result as $res){
//     return $res->content;
// }

// });

// Route::get('/update', function(){
//     $newupdate = DB::update("update posts set title = 'updated title', content= 'this is also updaated content ' where id = ?",[1]);
//     return $newupdate;
// });


// Route::get('/delete', function(){
//     $deleted = DB::delete('delete from users where id = ?', [3]);
//     return $deleted;
// });
// //one to one relation
// Route::get('/posts/{id}/post', function($id){
//     return User::find($id)->oneToOne;;
//     //return $post;
// });


// //one to one relation, inverse
// Route::get('post/{id}/users', function($id){
//    return Post::find($id)->user->name;
// });

// //one to many relation
// Route::get('posts/', function(){
//  $user = User::find(1);

//  foreach($user->posts as $post){
//     echo $post->title, "<br>";

//  }
// });
//  //many to many relation
//  Route::get('user/{id}/role', function($id){

//     $user = User::find($id);  

//     foreach($user->roles as $role){
//         return $role->name;
//     }
//  });

// //many to many relation, showing timestamps, like "created at"
//  Route::get('user/pivot', function(){

//     $user = User::find(1);

//     foreach($user->pivot_roles as $role){

//         return $role->pivot->created_at;

//     }
//  });

// //has many relation
//  Route::get('/user/{id}/country', function($id){
//   $country = Country::find($id);

//   foreach($country->posts as $post){

//     return $post->content;
//   }
//  });



// Route::get('user/{id}/photos', function($id){

// $user = User::find($id);

// foreach($user->photos as $photo){

//     return $photo->path;
// }
// });

// Route::get('post/{id}/photos', function($id){
 
//     $post = Post::find($id);
    
//     foreach($post->photos as $photo){
    
//         echo $photo->path. '<br>';
//     }
//     });
 

// //polymorphic many to many relation
// Route::get('post/tag', function(){
//  $post = Post::find(1);
// foreach($post->tags as $tag){
//     return $tag->name;
// }
// });

// Route::get('tag/post', function(){

//     $tag = Tag::find(2);
//     foreach($tag-> posts as $post){

//         return $post->content;
//     }
// });

//CRUD Operation

//Route::resource('/posts', 'postController');