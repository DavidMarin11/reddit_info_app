<?php

namespace App\Http\Controllers\reddit_data;

use App\Http\Controllers\Controller;
use App\src\reddit_data\services\RedditDataService;

class RegisterRedditDataController extends Controller
{
    public $redditDataService;

    public function __construct(RedditDataService $redditDataService) {
        $this->redditDataService = $redditDataService;
    }

    public function registerRedditData()
    {  
        return $this->redditDataService->registerRedditData();
    }
    
}
