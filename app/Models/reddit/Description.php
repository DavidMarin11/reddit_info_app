<?php

namespace App\Models\reddit;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;

    protected $table = 'description';
    protected $primaryKey = 'id';
    protected $fillable = [
        'description',
        'description_html',
        'submit_text',
        'submit_text_html',
        'public_description'
    ];
}
