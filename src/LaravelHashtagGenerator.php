<?php

namespace Mdhesari\LaravelHashtagGenerator;

use Illuminate\Support\Facades\Http;

class LaravelHashtagGenerator
{
    const VERSION = '0.1.0';

    private $keywords;
    private $apiKey;
    private $apiHost;

    public function __construct()
    {
        $this->keywords = config('hashtag-generator.keywords');
        $this->apiKey = config('hashtag-generator.x-rapidapi-key');
        $this->apiHost = config('x-rapidapi-host');
    }

    public function getHashtags()
    {
        $response = Http::withHeaders($this->getHeaders())
            ->get('https://hashtagy-generate-hashtags.p.rapidapi.com/v1/insta/tags', [
                'keyword' => 'summer'
            ]);

        dd($response->json());
    }

    public function getHeaders()
    {
        return [
            "x-rapidapi-key" => $this->apiKey,
            "x-rapidapi-host" => $this->apiHost,
            "useQueryString" => true
        ];
    }
}
