<?php

namespace App\Http\Controllers\reddit;

use App\Http\Controllers\Controller;
use App\src\reddit\services\RedditService;

class RedditController extends Controller
{
    public $redditService;

    public function __construct(RedditService $redditService) {
        $this->redditService = $redditService;
    }

    public function getAllReddits()
    {
        return $this->redditService->getAllReddits();
    }

    public function getReddit($id)
    {
        return $this->redditService->getReddit($id);
    }
}
