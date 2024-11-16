<?php

namespace App\Models\reddit;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appearance extends Model
{
    use HasFactory;
    protected $table = 'appearance';
    protected $primaryKey = 'id';
    protected $fillable = [
        'icon_img',
        'banner_img',
        'primary_color',
        'key_color'
    ];

    public function reddits()
    {
        return $this->hasOne(Reddits::class, 'id_appearance');
    }
}
