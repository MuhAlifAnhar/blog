<?php


use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\kategori;
use App\Models\User;

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
    return view('home', [
        "aktif" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Muh. Alif",
        "email" => "sultankautsar21@gmail.com",
        "image" => "marsha.jpg",
        "aktif" => "about"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('blog/{id:slug}', [PostController::class, 'show']);

Route::get('/kategories', function(){
    return view('kategories', [
        'title' => 'Post Kategories',
        'kategories' => kategori::all(),
        "aktif" => "kategories"
    ]);
});

Route::get('/kategori/{kategori:slug}', function(Kategori $kategori){
    return view('blog', [
        'title' => $kategori->nama,
        'posts' => $kategori->posts,
        'kategori' => $kategori->nama,
        "aktif" => "blog",
    ]);
});

Route::get('/penulis/{penulis:username}', function(User $penulis){
    return view('blog', [
        'title' => $penulis->name,
        'posts' => $penulis->posts,
        'user' => $penulis->name,
        "aktif" => "blog",
    ]);
});
