<?php

use App\Models\Playlist;
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



// foreach ($json->items as $key => $item) {
//   $s=new Playlist([
//     'id'=>$item->id,
//     'title'=>$item->snippet->title,
//     'description'=>$item->snippet->description,
//     'thumbnails'=>json_encode($item->snippet->thumbnails),
//     'itemCount'=>$item->contentDetails->itemCount
//   ]);
// $s->save();
// }

$playlists=Playlist::all();
foreach ($playlists as $key => $playlist) {
  echo $playlist->title;
}
});