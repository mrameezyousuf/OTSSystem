<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeTypes extends Model
{
    protected $table = "employeetype";
    protected $fillable = ['employee_type'];
    use HasFactory;
}
