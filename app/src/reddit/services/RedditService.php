<?php

namespace App\src\reddit\services;

use App\src\reddit\repositories\RedditRepository;
use Exception;

class RedditService {
    public $redditRepository;

    public function __construct(RedditRepository $redditRepository) {
        $this->redditRepository = $redditRepository;
    }

    public function getAllReddits()
    {
        try {

            $reddits = $this->redditRepository->getAllReddits();

            return response()->json(['reddits' => $reddits], 200);

        } catch(Exception $e) {
            return response()->json(['error' => 'Ha ocurrido un error al obtener la lista de Reddit.'], 404);
        }
    }

    public function getReddit($id)
    {
        try {

            $reddit = $this->redditRepository->getReddit($id);

            if (is_null($reddit)) {
                return response()->json(['message' => 'El Reddit no fue encontrado.'], 404);
            }

            return response()->json(['reddits' => $reddit], 200);

        } catch(Exception $e) {
            return response()->json(['error' => 'Ha ocurrido un error al obtener el Reddit.'], 404);
        }
    }
}