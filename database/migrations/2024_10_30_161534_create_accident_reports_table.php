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
        Schema::create('accident_reports', function (Blueprint $table) {
            $table->id();
            $table->date('accident_date');
            $table->time('accident_time');
            $table->string('region');
            $table->string('location');
            $table->string('injured_employee_name');
            $table->string('department');
            $table->text('description');
            $table->text('loss')->nullable();
            $table->text('immediate_causes')->nullable();
            $table->text('underlying_causes')->nullable();
            $table->text('root_causes')->nullable();
            $table->text('recommendations')->nullable();
            $table->string('acknowledgement_name');
            $table->string('acknowledgement_signature');
            $table->date('acknowledgement_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accident_reports');
    }
};
