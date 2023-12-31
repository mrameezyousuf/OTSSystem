<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    protected $table = "regions";
    protected $fillable = ['region_name','region_code'];
    use HasFactory;
}
