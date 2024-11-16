<?php

namespace App\src\reddit_data\DTOS;

class DescriptionDto {

    public $description;
    public $descriptionHtml;
    public $submitText;
    public $submitTextHtml;
    public $publicDescription;

    public function __construct($data) {
        $this->description = $data['description'] != "" ? $data['description'] : "Sin Información";
        $this->descriptionHtml = $data['description_html'] != "" ? $data['description_html'] : "Sin Información";
        $this->submitText = $data['submit_text'] != "" ? $data['submit_text'] : "Sin Información";
        $this->submitTextHtml = $data['submit_text_html'] != "" ? $data['submit_text_html'] : "Sin Información";
        $this->publicDescription = $data['public_description'] != "" ? $data['public_description'] : "Sin Información";
    }
    
    public function data()
    {
        return [
            'description' => $this->description,
            'description_html' => $this->descriptionHtml,
            'submit_text' => $this->submitText,
            'submit_text_html' => $this->submitTextHtml,
            'public_description' => $this->publicDescription
        ];
    }
}