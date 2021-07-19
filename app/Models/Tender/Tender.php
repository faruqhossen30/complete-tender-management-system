<?php

namespace App\Models\Tender;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    use HasFactory;

    protected $table = 'tenders';


    protected $fillable = [
        'tenderID',
        'type',
        'category',
        'department',
        'country',
        'location',
        'description',
        'tenderSecurity',
        'tenderBudget',
        'lastDate',
        'user_id'
    ];
}
