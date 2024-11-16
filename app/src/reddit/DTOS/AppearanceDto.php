<?php

namespace App\src\reddit\DTOS;

class AppearanceDto {

    public $iconImg;
    public $bannerImg;
    public $primaryColor;
    public $keyColor;

    public function __construct($data) {
        $this->iconImg = $data['icon_img'] != "" ? $data['icon_img'] : null;
        $this->bannerImg = $data['banner_img'] != "" ? $data['banner_img'] : null;
        $this->primaryColor = $data['primary_color'] != "" ? $data['primary_color'] : null;
        $this->keyColor = $data['key_color'] != "" ? $data['key_color'] : null;
    }
    
    public function data()
    {
        return [
            'icon_img' => $this->iconImg,
            'banner_img' => $this->bannerImg,
            'primary_color' => $this->primaryColor,
            'key_color' => $this->keyColor
        ];
    }
}