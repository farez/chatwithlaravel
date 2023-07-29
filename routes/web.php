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

Route::get('init/xn-839h_qDm', function () {
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

    $event = \App\Models\Event::create([
        'title' => 'Laracon 2023',
        'start_date' => '2023-07-19',
        'end_date' => '2023-07-20',
        'location' => 'Nashville, TN, USA',
        'slug' => 'laracon-2023',
        'description' => 'The flagship Laravel event of the year returns for 2023.',
        'is_published' => true,
        'videos_processed' => true,
    ]);

    foreach ($vidIds as $vidId) {
        $videoData = Youtube::getVideoInfo($vidId);
        $videoModelData = [
            'event_id' => $event->id,
            'title' => $videoData->snippet->title,
            'url' => 'https://www.youtube.com/watch?v=' . $vidId,
            'thumbnail' => $videoData->snippet->thumbnails->standard->url,
            'description' => $videoData->snippet->description,
            'source_id' => $vidId,
            'embed_html' => $videoData->player->embedHtml,
        ];
        \App\Models\Video::create($videoModelData);
    }
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
