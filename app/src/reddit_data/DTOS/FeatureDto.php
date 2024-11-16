<?php

namespace App\src\reddit_data\DTOS;

class FeatureDto {

    public $allowVideos;
    public $allowGalleries;
    public $spoilersEnabled;
    public $emojisEnabled;
    public $allowPolls;
    public $submissionType;

    public function __construct($data) {
        $this->allowVideos = $data['allow_videos'];
        $this->allowGalleries = $data['allow_galleries'];
        $this->spoilersEnabled = $data['spoilers_enabled'];
        $this->emojisEnabled = $data['emojis_enabled'];
        $this->allowPolls = $data['allow_polls'];
        $this->submissionType = $data['submission_type'] != "" ? $data['submission_type'] : null;
    }
    
    public function data()
    {
        return [
            'allow_videos' => $this->allowVideos,
            'allow_galleries' => $this->allowGalleries,
            'spoilers_enabled' => $this->spoilersEnabled,
            'emojis_enabled' => $this->emojisEnabled,
            'allow_polls' => $this->allowPolls,
            'submission_type' => $this->submissionType,
        ];
    }
}