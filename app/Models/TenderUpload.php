<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenderUpload extends Model
{
    use HasFactory;
    protected $table="tendersupload";

    function category(){
        return $this->hasOne(Category::class, 'id', 'catagory_id');
    }
}
