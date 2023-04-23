<?php

use App\Http\Controllers\PlaylistController;
// use App\Models\Category;
// use App\Models\Playlist;
// use Carbon\Carbon;
// use Carbon\CarbonInterval;
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


/*
Route::get('/', function () {

    $jsonA = '

  ';

    $json = json_decode($jsonA);
    $start = 1+Category::find(3)->playlists->count();
      $numOfInserted=0;
    foreach ($json->items as $key => $item) {
        $temp = Playlist::find($item->snippet->resourceId->videoId);
        if ($temp) {
        } else {
            $s = new Playlist([
                'id' => $item->snippet->resourceId->videoId,
                'title' => $item->snippet->title,
                'description' => \Illuminate\Support\Str::limit($item->snippet->description, 130, '...'),
                'thumbnails' => json_encode($item->snippet->thumbnails),
                'itemCount' => 1,
                'publishedAt' => Carbon::parse($item->snippet->publishedAt),
                'order' => $start+$numOfInserted,
            ]);
            $s->category()->associate(Category::find(3));
            echo $s->save();
            $numOfInserted++;
        }
    }

    dd($json);
});
*/






/*


Route::get('/', function () {

    $jsonA = '
   
  ';

    $json = json_decode($jsonA);
    foreach ($json->items as $key => $item) {
        $element = Playlist::find($item->id);
        if ($element) {
            $element->description=$item->snippet->description;
            $element->channelId=$item->snippet->channelId;
            $element->channelTitle=$item->snippet->channelTitle;
            $element->duration=$item->contentDetails->duration;
            $ci = CarbonInterval::create($item->contentDetails->duration)->totalSeconds;
            var_dump($ci);

        } else {
            echo "not found";
            var_dump($item);
        }
    }

    //dd($json);
});
*/

