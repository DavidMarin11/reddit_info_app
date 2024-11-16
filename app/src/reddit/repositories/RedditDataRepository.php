<?php

namespace App\src\reddit\repositories;

use App\Models\reddit\Appearance;
use App\Models\reddit\Description;
use App\Models\reddit\Feature;
use App\Models\reddit\Reddits;

class RedditDataRepository {
    
    public function createAppearance(array $data)
    {
        return Appearance::create($data);
    }

    public function createFeature(array $data)
    {
        return Feature::create($data);
    }

    public function createDescription(array $data)
    {
        return Description::create($data);
    }

    public function createReddits(array $data)
    {
        return Reddits::create($data);
    }

    public function consultReddit($idReddit)
    {
        return Reddits::where('id_reddit', $idReddit)->first();
    }
}