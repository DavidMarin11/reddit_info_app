<?php

namespace App\src\reddit\DTOS;

class RedditsDto {

    public $idReddit;
    public $displayName;
    public $title;
    public $subscribers;
    public $created;
    public $subredditType; 
    public $idAppearance;
    public $idFeature;
    public $idDescription;

    public function __construct($data, $idAppearance, $idFeature, $idDescription) {
        $this->idReddit = $data['id'];
        $this->displayName = $data['display_name'];
        $this->title = $data['title'];
        $this->subscribers = $data['subscribers'];
        $this->created = $data['created'];
        $this->subredditType = $data['subreddit_type'];
        $this->idAppearance = $idAppearance;
        $this->idFeature = $idFeature;
        $this->idDescription = $idDescription;
    }
    
    public function data()
    {
        return [
            'id_reddit' => $this->idReddit,
            'display_name' => $this->displayName,
            'title' => $this->title,
            'subscribers' => $this->subscribers,
            'created' => $this->created,
            'subreddit_type' => $this->subredditType, 
            'id_appearance' => $this->idAppearance,
            'id_feature' => $this->idFeature,
            'id_description' => $this->idDescription
        ];
    }
}