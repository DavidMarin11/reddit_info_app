<?php

namespace App\Models\reddit;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reddits extends Model
{
    use HasFactory;
    protected $table = 'reddits';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_reddit',
        'display_name',
        'title',
        'subscribers',
        'created',
        'subreddit_type', 
        'id_appearance',
        'id_feature',
        'id_description'
    ];
}
