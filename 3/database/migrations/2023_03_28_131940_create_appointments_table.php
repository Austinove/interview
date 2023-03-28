<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->Integer('patient_id')->index();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->string('appointment_type')->nullable();
            $table->string('clinical_notes')->nullable();
            $table->Integer('ass_staff')->index();
            $table->foreign('ass_staff')->references('id')->on('users')->onDelete('cascade');
            $table->Integer('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->Integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
