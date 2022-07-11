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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello',function () {
//     return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
//  });
 

//  Route::get('hello','HelloController@index');
//  Route::get('hello/other','HelloController@other');

// Route::get('hello', function() {
//     return view('hello.index');
//  });

// Route::get('hello', 'HelloController@index');
// Route::post('hello', 'HelloController@post');

// use App\Http\Middleware\HelloMiddleware;

// Route::get('hello', 'HelloController@index')
// ->middleware(HelloMiddleware::class);


// トップページの表示
Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

// データの挿入
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

// データの更新
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

// データの削除
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');


// 指定したＩＤのレコードを得る
Route::get('hello/show', 'HelloController@show');

// ORM(person)
Route::get('person', 'PersonController@index');

Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');

// 6-21
Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');

// edit、updateアクションを追加
Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');

// delete、removeアクションの作成
Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');


// boardテーブルの作成
Route::get('board', 'BoardController@index');

Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');


// ルート情報の追記
Route::resource('rest', 'RestappController');

// REST
Route::get('hello/rest', 'HelloController@rest');

// sesstion ルート情報の追記
Route::get('hello/session', 'HelloController@ses_get');
Route::post('hello/session', 'HelloController@ses_put');

// -----実習用-----
Route::get('Jissyu2','JissyuController@index');

Route::get('Jissyu', 'JissyuController@index');

Route::get('Jissyu3', 'Jissyu3_1Controller@index');
Route::post('Jissyu3', 'Jissyu3_1Controller@post');

Route::get('Jissyu3_2', 'Jissyu3_2Controller@index');
Route::post('Jissyu3_2', 'Jissyu3_2Controller@post');

Route::get('Jissyu3_3', 'Jissyu3_3Controller@index');


// kouka問題1
Route::get('Kouka1_1', 'Kouka1_1Controller@index');
// 問題2
Route::get('Kouka1_2', 'Kouka1_2Controller@index');
Route::post('Kouka1_2', 'Kouka1_2Controller@post');


