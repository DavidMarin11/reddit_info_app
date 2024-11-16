<?php

namespace App\src\reddit\services;

use App\src\reddit\DTOS\AppearanceDto;
use App\src\reddit\DTOS\DescriptionDto;
use App\src\reddit\DTOS\FeatureDto;
use App\src\reddit\DTOS\RedditsDto;
use App\src\reddit\repositories\RedditDataRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class RedditDataService {
    public $redditDataRepository;

    public function __construct(RedditDataRepository $redditDataRepository) {
        $this->redditDataRepository = $redditDataRepository;
    }
    
    public function registerRedditData()
    {

        $connection = DB::connection();
        $connection->beginTransaction();

        try {

            $response = Http::get('https://www.reddit.com/reddits.json');
            $subreddits = $response->json()['data']['children'];

            foreach ($subreddits as $reddit) {
                $data = $reddit['data'];
                $consultReddit = $this->redditDataRepository->consultReddit($data['id']);

                if (is_null($consultReddit)) {

                    $appearanceDto = new AppearanceDto($data);
                    $featureDto = new FeatureDto($data);
                    $descriptionDto = new DescriptionDto($data);

                    $appearance = $this->redditDataRepository->createAppearance($appearanceDto->data());
                    $feature = $this->redditDataRepository->createFeature($featureDto->data());
                    $description = $this->redditDataRepository->createDescription($descriptionDto->data());
                    
                    $redditsDto = new RedditsDto(
                        $data,
                        $appearance->id,
                        $feature->id,
                        $description->id
                    );
    
                    $this->redditDataRepository->createReddits($redditsDto->data());
                }
            }

            $connection->commit();
            return response()->json(['success' => 'Registros creados correctamente.'], 200);

        } catch(Exception $e) {
            $connection->rollBack();
            return response()->json(['error' => 'Ha ocurrido un error al crear los registros.'], 404);
        }

    }
}