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
        Schema::create('opcrs', function (Blueprint $table) {
            $table->foreignId('employee_id');
            $table->string('reference_num')->primary();
            $table->string('status')->default('Pending');
            $table->string('department_id');
            $table->string('opcr_type');
            $table->date( 'date_of_filling');
            $table->date('start_period');
            $table->date('end_period');
            $table->string('ratee');
            // $table->string('department_head');
            $table->json('core_functions');
            $table->float('core_rating');
            $table->json('supp_admin_functions');
            $table->float('supp_admin_rating');
            $table->float('final_average_rating');
            $table->string('comments_and_reco')->nullable();
            $table->binary('discussed_with');
            $table->date('disscused_with_date');
            $table->float('final_rating')->nullable();

            // $table->string('assessed_by')->nullable();
            // $table->date('assessed_by_date')->nullable();
            // $table->boolean('assessed_by_verdict')->nullable();
            // $table->string('final_rating_by')->nullable();
            // $table->boolean('final_rating_by_verdict')->nullable();
            // $table->date('final_rating_by_date')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->longText('application_form')->charset('binary')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opcrs');
    }
};
