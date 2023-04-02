<?php

use App\Http\Controllers\PlaylistController;
use App\Models\Category;
use App\Models\Playlist;
use Carbon\Carbon;
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
Route::controller(PlaylistController::class)->group(function () {
    Route::get('/', 'index')->name('playlist.index');
    Route::post('/', 'index')->name('playlist.index');
});



// Route::get('/', function () {

//     $jsonA = '

//   ';

//     $json = json_decode($jsonA);
//     $start = Category::find(4)->playlists->count();

//     foreach ($json->items as $key => $item) {
//         $temp = Playlist::find($item->snippet->resourceId->videoId);
//         if ($temp) {
//         } else {
//             $s = new Playlist([
//                 'id' => $item->snippet->resourceId->videoId,
//                 'title' => $item->snippet->title,
//                 'description' => \Illuminate\Support\Str::limit($item->snippet->description, 200, '...'),
//                 'thumbnails' => json_encode($item->snippet->thumbnails),
//                 'itemCount' => 1,
//                 'publishedAt' => Carbon::parse($item->snippet->publishedAt),
//                 'order' => 1+$item->snippet->position,
//             ]);
//             $s->category()->associate(Category::find(4));
//             $s->save();
//         }
//     }

//     dd($json);
// });
