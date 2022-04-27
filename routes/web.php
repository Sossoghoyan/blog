<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\countries;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\carsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StartController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ABCController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CacheController;
use App\Http\Controllers\IdentitycardController;
use App\Http\Controllers\BrandController;




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

Route::get('/', [IndexController::class, 'index']);

Route::get('/flights', [FlightController::class, 'index']);

Route::get('/cars', [CarsController::class, 'index']);

Route::get('/test', function () {
    return view('test', [
        'name' =>'Sos',
        'records' => [1,2,3],
        'i' => 2,
        'colors' => ["red", "green", "yellow"]
    ]);
});

Route::get('blade', function () {
    return view('child');
});

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get(
    'posts/{post}/comments/{comment}',
    function ($postId, $commentId) {
        return "Post $postId, comment $commentId";
    }
);



Route::get('user/{id}', [
    UserController::class,
    'show'
]);

Route::resource('photos', PhotoController::class);

Route::get('countries', [countries::class,'show']);

Route::get(
    'collect1',
    [CollectionController::class, 'collection_class']
);

Route::get(
    'collect2',
    [CollectionController::class, 'collection_class']
);

Route::get(
    'src_collection',
    [CollectionController::class, 'search_data']
);

Route::get(
    'filter_collection',
    [CollectionController::class, 'filter_data']
);

Route::get(
    'sort_collection',
    [CollectionController::class, 'sort_data']
    );

    Route::get(
        'key_collection',
        [CollectionController::class, 'read_keys']
    );

Route::get('add-blog-post-form', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);

Route::get('add-blog-start-form', [StartController::class, 'index']);
Route::post('store-form', [StartController::class, 'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/test', [TestController::class, 'index'])->middleware(['age', 'role:editor']);

Route::get('/abc', [ABCController::class, 'index']);

Route::get('/double', [TestController::class, 'index'])->middleware('second');


Route::get('session/get', [SessionController::class, 'accessSessionData']);
Route::get('session/set', [SessionController::class, 'storeSessionData']);
Route::get('session/remove', [SessionController::class, 'deleteSessionData']);

Route::get('cache/put', [CacheController::class, 'put']);
Route::get('cache/get', [CacheController::class, 'get']);

Route::get('/identity',[IdentitycardController::class,'index']);

Route::get('/brand',[BrandController::class,'index']);
Route::get('/product',[ProductController::class,'index']);





