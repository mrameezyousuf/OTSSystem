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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('region_id');
            $table->integer('designation_id');
            $table->integer('department_id');
            $table->string('employee_no');
            $table->string('grade');
            $table->string('joining_date');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('contact');
            $table->string('cnic');
            $table->string('cnic_front');
            $table->string('cnic_back');
            $table->string('profile_image');
            $table->string('cnic_expiray');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
