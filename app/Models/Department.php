<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table="department";
    public function tendersupload(){
        return $this->hasMany(TenderUpload::class,'department_id');
    }
}
