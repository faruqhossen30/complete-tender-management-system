<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class UserProfile extends Model
{
    use HasFactory;


    protected $table = 'user_profiles';
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'logo',
        'trade_licence_no',
        'pin_no',
        'bin_no',
        'nid_no',
        'trade_licence_img',
        'pin_img',
        'bin_img',
        'nid_img',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
