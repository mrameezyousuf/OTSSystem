<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionTypes extends Model
{
    protected $table = "question_types";
    protected $fillable = ['question_type','question_type_code'];
    use HasFactory;
}
