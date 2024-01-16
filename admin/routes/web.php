<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntroController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\RecentNewsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WorksController;
use App\Models\Message;
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
// Authentication
Route::get('/login', [AuthenticationController::class ,'Login']);
Route::get('/register', [AuthenticationController::class ,'Register']);



// Menu Bar
Route::get('/menubar',[MenuController::class, 'MenuBar'])->middleware(['auth', 'verified'])->name('menubar');
Route::post('/addmenu',[MenuController::class, 'AddMenu'])->middleware(['auth', 'verified'])->name('addmenu');
Route::post('/edit_menu',[MenuController::class, 'EditMenu'])->middleware(['auth', 'verified'])->name('editmenu');
Route::get('/deletemenu/{id}', [MenuController::class, 'deleteMenu'])->middleware(['auth', 'verified'])->name('deletemenu');

// Logo
Route::get('/logo', [LogoController::class, 'Logo'])->middleware(['auth', 'verified'])->name('logo');
Route::post('/logoupdate', [LogoController::class, 'LogoUpdate'])->middleware(['auth', 'verified'])->name('logoupdate');

// Intro
Route::get('/intro', [IntroController::class, 'Intro'])->middleware(['auth', 'verified'])->name('intro');
Route::post('/introupdate', [IntroController::class, 'IntroUPdate'])->middleware(['auth', 'verified'])->name('updateintro');
Route::post('/introtextupdate', [IntroController::class, 'IntroTextUPdate'])->middleware(['auth', 'verified'])->name('updateintrotext');

// Promo
Route::get('/promo',[PromoController::class, 'Promo'])->middleware(['auth', 'verified'])->name('promo');
Route::post('/addpromo',[PromoController::class, 'AddPromo'])->middleware(['auth', 'verified'])->name('addpromo');
Route::post('/edit_promo',[PromoController::class, 'EditPromo'])->middleware(['auth', 'verified'])->name('editpromo');
Route::get('/deletepromo/{id}', [PromoController::class, 'deletePromo'])->middleware(['auth', 'verified'])->name('deletepromo');

// Works
Route::get('/works', [WorksController::class, 'Works'])->middleware(['auth', 'verified'])->name('works');
Route::post('/worksupdate', [WorksController::class, 'WorksUpdate'])->middleware(['auth', 'verified'])->name('worksupdate');
Route::post('/imageupdate', [WorksController::class, 'WorksImageUpdate'])->middleware(['auth', 'verified'])->name('imageupdate');

// Services
Route::get('/service', [ServiceController::class, 'Services'])->middleware(['auth', 'verified'])->name('service');
Route::post('/addservice', [ServiceController::class, 'AddService'])->middleware(['auth', 'verified'])->name('addservice');
Route::post('/edit_service',[ServiceController::class, 'EditService'])->middleware(['auth', 'verified'])->name('editservice');
Route::get('/deleteservice/{id}', [ServiceController::class, 'deleteService'])->middleware(['auth', 'verified'])->name('deleteservice');

// Portfolio
Route::get('/portfolio', [PortfolioController::class, 'Portfolio'])->middleware(['auth', 'verified'])->name('portfolio');
Route::post('/addportfolio', [PortfolioController::class, 'AddPortfolio'])->middleware(['auth', 'verified'])->name('addportfolio');
Route::post('/edit_portfolio',[PortfolioController::class, 'EditPortfolio'])->middleware(['auth', 'verified'])->name('editportfolio');
Route::get('/deleteportfolio/{id}', [PortfolioController::class, 'deletePortfolio'])->middleware(['auth', 'verified'])->name('deleteportfolio');

// Testimonial
Route::get('/testimonial', [TestimonialController::class, 'Testimonail'])->middleware(['auth', 'verified'])->name('testimonial');
Route::post('/addtestimonial', [TestimonialController::class, 'AddTestimonail'])->middleware(['auth', 'verified'])->name('addtestimonial');
Route::post('/edit_testimonial',[TestimonialController::class, 'EditTestimonial'])->middleware(['auth', 'verified'])->name('edittestimonial');
Route::get('/deletetestimonial/{id}', [TestimonialController::class, 'deleteTestimonial'])->middleware(['auth', 'verified'])->name('deletetestimonial');

// Recent News
Route::get('/recentnews', [RecentNewsController::class, 'RecentNews'])->middleware(['auth', 'verified'])->name('recentnews');
Route::post('/addrecentnews', [RecentNewsController::class, 'AddRecentNews'])->middleware(['auth', 'verified'])->name('addrecentnews');
Route::post('/edit_news',[RecentNewsController::class, 'EditNews'])->middleware(['auth', 'verified'])->name('editnews');
Route::get('/deletenews/{id}', [RecentNewsController::class, 'deleteNews'])->middleware(['auth', 'verified'])->name('deletenews');


// Messages Section
Route::get('/messagesection', [MessagesController::class, 'MessageSection'])->middleware(['auth', 'verified'])->name('message_section');
Route::get('/allmessages', [MessagesController::class, 'AllMessages'])->middleware(['auth', 'verified'])->name('allmessages');
Route::get('/viewmessage/{id}', [MessagesController::class, 'ViewMessage'])->middleware(['auth', 'verified'])->name('viewmessage');
Route::get('/deletemessage/{id}', [MessagesController::class, 'deleteMessage'])->middleware(['auth', 'verified'])->name('deletemessage');


// Copyright
Route::get('/copyright', [HomeController::class, 'Copyright'])->middleware(['auth', 'verified']);


// Profile
Route::get('/profileUpdate',[ProfileController::class, 'Profile'])->middleware(['auth', 'verified'])->name('profile');


Route::get('/dashboard', function () {
    $dashboard = 'visibility';
    $messages = Message::orderBy('id','desc')->get();
    return view('dashboard', ['messages'=> $messages, 'dashboard'=>$dashboard]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
