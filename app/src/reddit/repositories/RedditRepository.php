<?php

namespace App\src\reddit\repositories;

use App\Models\reddit\Reddits;

class RedditRepository {

    public function getAllReddits()
    {
        return Reddits::with(['appearance', 'feature', 'description'])->get();
    }

    public function getReddit($id)
    {
        return Reddits::where('id', $id)->with(['appearance', 'feature', 'description'])->first();
    }
}