<?php

namespace App\Models\Tender;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tender\Type;
use App\Models\Tender\Category;
use App\Models\Tender\Department;
use App\Models\Tender\Country;
use App\Models\Tender\Location;

class Tender extends Model
{
    use HasFactory;

    protected $table = 'tenders';


    protected $fillable = [
        'tenderID',
        'tender_type_id',
        'category_id',
        'department_id',
        'country_id',
        'location_id',
        'description',
        'tenderSecurity',
        'tenderBudget',
        'lastDate',
        'user_id'
    ];

    public function tenderType()
    {
        return $this->hasOne(Type::class, 'id', 'tender_type_id');
    }

    public function tenderCategory()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function tenderDepartment()
    {
        return $this->hasOne(Department::class, 'id', 'department_id');
    }

    public function tenderCountry()
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }

    public function tenderLocation()
    {
        return  $this->hasOne(Location::class, 'id', 'location_id');
    }

}
