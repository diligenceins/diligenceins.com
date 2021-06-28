<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReportsController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PageController;

use App\Models\Report;

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
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

Route::get('/', function () {
    $reports = Report::where('status', 1)->latest('published')->limit(8)->get();
    return view('welcome', compact('reports'));
})->name('home');

Route::get('/report/{report}/request-sample', [ReportController::class, 'sample'])->name('report.sample');
Route::get('/report/{report}/inquiry', [ReportController::class, 'inquiry'])->name('report.inquiry');
Route::get('/report/{category}/{report}', [ReportController::class, 'index'])->name('report');

Route::get('/reports', [ReportsController::class, 'index'])->name('reports');
Route::get('/reports/{category}', [ReportsController::class, 'category'])->name('reports.category');
Route::get('/search/', [ReportsController::class, 'search'])->name('search');

// GUEST DASHBOARD

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/{slug}', [PageController::class, 'show'])->name('page');
