<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payroll', function (Blueprint $table) {
            $table->id();
            $table->string('employtee_id');
            $table->integer('basic_salary');
            $table->integer('allowance')->default(0);
            $table->integer('paf_deduction')->default(0);
            $table->string('account_no')->default("N/A");
            $table->integer('bank_id')->default(0);
            $table->string('cheque_img')->default("N/A");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payroll');
    }
};
