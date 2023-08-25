<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobDetails extends Model
{
    protected $table = "job_details";
    protected $fillable = ['employee_id','shift_id','timing'];
    use HasFactory;
}
