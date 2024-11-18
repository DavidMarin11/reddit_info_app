<?php

namespace App\Models\reddit;

use Carbon\Carbon;
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

    public function appearance()
    {
        return $this->belongsTo(Appearance::class, 'id_appearance');
    }

    public function feature()
    {
        return $this->belongsTo(Feature::class, 'id_feature');
    }

    public function description()
    {
        return $this->belongsTo(Description::class, 'id_description');
    }

    public function getCreatedAttribute($value)
    {
        return Carbon::createFromTimestamp($value)->format('d-m-Y');
    }
}
