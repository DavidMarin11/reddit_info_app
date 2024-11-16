<?php

namespace App\Models\reddit;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    protected $table = 'feature';
    protected $primaryKey = 'id';
    protected $fillable = [
        'allow_videos',
        'allow_galleries',
        'spoilers_enabled',
        'emojis_enabled',
        'allow_polls',
        'submission_type'
    ];
}
