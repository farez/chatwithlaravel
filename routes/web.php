<?php

//use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Alaouy\Youtube\Facades\Youtube;


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
    return redirect('/videos');
});

Route::get('get-vids', function () {
    $vidIds = [
        '2YaEtaXYVtI',
        '50uRIFaUWqg',
        '1A1xFtlDyzU',
        'CrO_7Df1cBc',
        'KBigS5vLwZk',
        '23McCP-_9BE',
        'SSgnN1tMOtU',
        'CxqtK3k7PVM',
        'LaKEFjA25r4',
        'PW-2_-KxF-8',
        'MMc2TzBY6l4',
        'iG7VscBFnqo',
        'AkDMDHAs09U',
        'U-N8Qqq02b0',
        '1P3wLy49t2c',
    ];

    $vidArray = [];

});


/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
*/
