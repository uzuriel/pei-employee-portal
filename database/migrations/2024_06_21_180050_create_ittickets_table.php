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
        Schema::create('ittickets', function (Blueprint $table) {
            $table->bigIncrements('form_id');
            $table->date('application_date')->default(now());
            $table->string('status', 20);
            $table->string('employee_id');
            $table->string('description', 5000);
            $table->dateTime('cancelled_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ittickets');
    }
};
