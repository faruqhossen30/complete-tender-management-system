<?php

namespace App\Models\Tender;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tender\Tender;
use App\Models\User;

class Apply extends Model
{
    use HasFactory;

    public $table = 'applies';
    public $fillable = [
        'agree',
        'tender_id',
        'user_id',
        'profile_id'
    ];

    public function tenderInfo()
    {
        return $this->hasOne(Tender::class, 'id', 'tender_id');
    }

    public function userInfo()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }


}
