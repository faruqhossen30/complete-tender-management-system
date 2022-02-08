<?php

namespace App\Models;

use App\Models\Tender\Location;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Place extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author_id',
        'content',
        'address',
        'google_map',
        'image',
        'video_link',
        'location_id',
    ];
    public function location()
    {
        return $this->hasOne(Location::class, 'id', 'location_id');
    }
    public function author()
    {
        return $this->hasOne(User::class, 'id', 'author_id');
    }
}
