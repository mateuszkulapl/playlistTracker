<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class YoutubeApiController extends Controller
{
    private $apiKey;
    public function __construct()
    {
        $this->apiKey=env('YOUTUBE_API_KEY');
    }
    public function videos(Collection $videoIds, $part = 'snippet,contentDetails')
    {
        $items = collect();
        //max 50 ids per request, so we need to split the collection into chunks of 50
        $chunks = $videoIds->chunk(50);
        //loop through the chunks, and send a request for each chunk
        foreach ($chunks as $chunk) {
            $response =  Http::acceptJson()->withUrlParameters([
                'endpoint' => 'https://youtube.googleapis.com',
                'page' => 'youtube',
                'version' => 'v3',
                'topic' => 'videos',
            ])->get(
                '{+endpoint}/{page}/{version}/{topic}',
                [
                    'part' => $part,
                    'id' => $chunk->join(','),
                    'maxResults' => 50,
                    'key' => $this->apiKey
                ]
            );
            if ($response->successful()) {
                $responseJson = json_decode($response->body());
                if (isset($responseJson->items)) {
                    $items = $items->merge(collect($responseJson->items));
                } else {
                    Log::error('Youtube API error, no items', ['response' => $response]);
                }
            } else {
                Log::error('Youtube API error', ['response' => $response]);
            }
        }
        return $items;
    }
    /**
     * Update the videos with data from youtube api
     * @param Collection $videos - collection of \App\Models\Playlist to update
     */
    public function updateVideos(Collection $videos)
    {
        $apiData = $this->videos($videos->pluck('id'));
        $videos->each(function ($video) use ($apiData) {
            $apiVideo = $apiData->firstWhere('id', $video->id);
            if ($apiVideo) {
                $video->title = $apiVideo->snippet->title;
                $video->description = Str::limit($apiVideo->snippet->description,3000,"");
                $video->thumbnails = json_encode($apiVideo->snippet->thumbnails);
                $video->duration = CarbonInterval::make($apiVideo->contentDetails->duration);
                $video->publishedAt = Carbon::parse($apiVideo->snippet->publishedAt);
                $video->channelId = $apiVideo->snippet->channelId;
                $video->channelTitle = $apiVideo->snippet->channelTitle;
            }
        });
        return $videos;
    }

    public function playlistItems(string $playlistId, $part = 'contentDetails')
    {
        Log::info($playlistId);
        $items = collect();
        $response =  Http::acceptJson()->withUrlParameters([
            'endpoint' => 'https://youtube.googleapis.com',
            'page' => 'youtube',
            'version' => 'v3',
            'topic' => 'playlistItems',
        ])->get(
            '{+endpoint}/{page}/{version}/{topic}',
            [
                'part' => $part,
                'playlistId' => $playlistId,
                'maxResults' => 50,
                'key' => $this->apiKey
            ]
        );
        if ($response->successful()) {

            $responseJson = json_decode($response->body());
            if (isset($responseJson->items)) {
                $items = collect($responseJson->items);
            } else {
                Log::error('Youtube API error, no items', ['response' => $response]);
            }
        } else {
            Log::error('Youtube API error', ['response' => $response]);
        }
        return $items;
    }
    public function playlistItemsIds(string $playlistId)
    {
        $items = $this->playlistItems($playlistId);
        $ids = $items->pluck('contentDetails.videoId');
        return $ids;
    }
}
