<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountsPayrolls extends Model
{
    protected $table = "payroll";
    protected $fillable = ['employtee_id','basic_salary','allowance','paf_deduction','account_no','bank_id','cheque_img'];
    use HasFactory;
}
