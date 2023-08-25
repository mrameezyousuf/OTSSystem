<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    protected $table = "manage_candidate";
    protected $fillable = ['center_id','region_id','employee_no','firstname','lastname','cnic','contact','email'];
    use HasFactory;
}
