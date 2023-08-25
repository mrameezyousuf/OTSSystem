<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionMastersType extends Model
{
    protected $table = "question_subject_type";
    protected $fillable = ['question_subject_type'];
    use HasFactory;
}
