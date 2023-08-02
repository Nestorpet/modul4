<?php

use App\Http\Controllers\ProfileController;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/addArticle', function (){
    return view('pages.addArticle');
});
Route::post('/addArticle', function (Request $request){
//    dd($request); распечатка переменной
    $userId=auth()->user()->id;
    $title=$request->title;
    $articleContent=$request->article;
    $article=new \App\Models\Article();
    $article->title=$title;
    $article->article=$articleContent;
    $article->author=$userId;
    $article->save();
    return view('welcome');
});
Route::get('/articles', function (){
    $articles=Article::all();
    return view('pages.articles',['articles'=>$articles]);
});

Route::get('/article/{id}', function (Request $request){
    $articleId=$request->id;
    $article=Article::where ('id', $articleId)->first();
   return view('pages.article', ['article'=>$article]);

});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
