<?php

namespace App\Models\Tender;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $table = 'tender_type';
    protected $fillable = ['name'];
}
