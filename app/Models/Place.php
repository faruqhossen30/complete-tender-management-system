<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'address',
        'google_map',
        'image',
        'video_link',
        'division_id',
        'district_id',
        'upazila_id',

    ];
}
