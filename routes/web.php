<?php

use App\Http\Controllers\ArtcileController;
use App\Models\Acceuil;
use App\Models\Commentaire;
use App\Models\Contact;
use App\Models\Testimonial;
use App\Models\Testimonialbo;
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
Route::resource('/articles', ArtcileController::class)->middleware(['auth','admin']);
Route::resource('/commentaires', Commentaire::class)->middleware(['auth','admin']);
Route::resource('/contacts', Contact::class)->middleware(['auth','admin']);
Route::resource('/testimonialbos', Testimonialbo::class)->middleware(['auth','admin']);
Route::resource('/acceuils', Acceuil::class);
Route::resource('/testimonials', Testimonial::class);





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
