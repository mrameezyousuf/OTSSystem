<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $fillable = ['region_id','designation_id','department_id','employee_no','grade','joining_date','firstname','lastname','contact','cnic','cnic_front','cnic_back','profile_image','cnic_expiray'];
    use HasFactory;
}
