<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FirmController;

// =============================================
// PUBLIC ROUTES
// =============================================

// Home
Route::get('/', [PageController::class, 'home'])->name('home');

// About Section
Route::prefix('about')->group(function () {
    Route::get('/overview', [PageController::class, 'aboutOverview'])->name('about.overview');
    Route::get('/mandate', [PageController::class, 'aboutMandate'])->name('about.mandate');
    Route::get('/board', [PageController::class, 'aboutBoard'])->name('about.board');
    Route::get('/constituent-bodies', [PageController::class, 'aboutConstituentBodies'])->name('about.constituent-bodies');
});

// Services Section
Route::prefix('services')->group(function () {
    Route::get('/registration', [PageController::class, 'servicesRegistration'])->name('services.registration');
    Route::get('/licensing', [PageController::class, 'servicesLicensing'])->name('services.licensing');
    Route::get('/practice-review', [PageController::class, 'servicesPracticeReview'])->name('services.practice-review');
    Route::get('/verify-practitioner', [FirmController::class, 'verify'])->name('services.verify-practitioner');
});

// API for AJAX search (optional for future use)
Route::get('/api/verify', [FirmController::class, 'search'])->name('api.verify');


// Standards
Route::get('/standards', [PageController::class, 'standards'])->name('standards');

// Resources
Route::get('/resources', [PageController::class, 'resourcesPage'])->name('resources');

// News (Public)
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

// Contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'contactSubmit'])->name('contact.submit');

// Verification API (for AJAX search)
Route::get('/api/verify', [FirmController::class, 'search'])->name('api.verify');


// =============================================
// AUTHENTICATED ROUTES
// =============================================

// Dashboard route (required by Breeze after login)
Route::get('/dashboard', function () {
    return redirect()->route('admin.news.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// =============================================
// ADMIN ROUTES (Protected)
// =============================================

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    // Admin Dashboard
    Route::get('/', function () {
        return redirect()->route('admin.news.index');
    })->name('dashboard');

    // News Management
    Route::get('/news', [NewsController::class, 'adminIndex'])->name('news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{news}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');

    // Firms Management
    Route::get('/firms', [FirmController::class, 'adminIndex'])->name('firms.index');
    Route::get('/firms/create', [FirmController::class, 'create'])->name('firms.create');
    Route::post('/firms', [FirmController::class, 'store'])->name('firms.store');
    Route::get('/firms/{firm}/edit', [FirmController::class, 'edit'])->name('firms.edit');
    Route::put('/firms/{firm}', [FirmController::class, 'update'])->name('firms.update');
    Route::delete('/firms/{firm}', [FirmController::class, 'destroy'])->name('firms.destroy');

    // Practitioners Management
    Route::get('/practitioners', [FirmController::class, 'practitionersIndex'])->name('practitioners.index');
    Route::get('/practitioners/create', [FirmController::class, 'practitionersCreate'])->name('practitioners.create');
    Route::post('/practitioners', [FirmController::class, 'practitionersStore'])->name('practitioners.store');
    Route::get('/practitioners/{practitioner}/edit', [FirmController::class, 'practitionersEdit'])->name('practitioners.edit');
    Route::put('/practitioners/{practitioner}', [FirmController::class, 'practitionersUpdate'])->name('practitioners.update');
    Route::delete('/practitioners/{practitioner}', [FirmController::class, 'practitionersDestroy'])->name('practitioners.destroy');
});

// Include Breeze auth routes
require __DIR__.'/auth.php';