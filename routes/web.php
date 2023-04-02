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
//     $start = Category::find(3)->playlists->count();

//     foreach ($json->items as $key => $item) {
//         $temp = Playlist::find($item->id->videoId);
//         if ($temp) {
//         } else {
//             $s = new Playlist([
//                 'id' => $item->id->videoId,
//                 'title' => $item->snippet->title,
//                 'description' => $item->snippet->description,
//                 'thumbnails' => json_encode($item->snippet->thumbnails),
//                 'itemCount' => 1,
//                 'publishedAt' => Carbon::parse($item->snippet->publishedAt),
//                 'order' => $start + $key,
//             ]);
//             $s->category()->associate(Category::find(3));
//             $s->save();
//             echo "saved";
//         }
//     }

//     dd($json);
// });
