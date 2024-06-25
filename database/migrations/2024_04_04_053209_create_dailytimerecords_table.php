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
        Schema::create('dailytimerecords', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id');
            // $table->string('attendance_id')->primary();
            // $table->bigInteger('job_id');
            $table->date('attendance_date')->default(now());
            $table->string('type', 20)->nullable();
            $table->dateTime('time_in')->nullable();
            $table->dateTime('time_out')->nullable();
            // $table->integer('absent');
            $table->boolean('late')->nullable();
            $table->decimal('overtime', 8, 2)->nullable();
            $table->decimal('undertime', 8, 2)->nullable();
            // $table->decimal('cto', 8, 2);
            $table->boolean('status')->nullable();
            // $table->integer('lwop');
            // $table->string('remarks');
            // $table->decimal('sl_used', 8, 2);
            // $table->decimal('vl_used', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dailytimerecords');
    }
};
