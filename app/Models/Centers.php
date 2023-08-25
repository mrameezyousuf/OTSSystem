<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centers extends Model
{
    protected $table = "centers";
    protected $fillable = ['region_id','center_name','center_code','email','contact','address'];

    use HasFactory;
}
