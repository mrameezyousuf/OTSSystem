<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educations extends Model
{
    protected $table =  "educations";
    protected $fillable = ['educations','institute','passing_year','grade','degree_title'];
    use HasFactory;
}
