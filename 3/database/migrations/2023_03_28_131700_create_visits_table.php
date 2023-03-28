<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->Integer('patient_id')->index();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->Integer('lab_id')->index();
            $table->foreign('lab_id')->references('id')->on('labolatories')->onDelete('cascade');
            $table->string('diagnosis')->nullable();
            $table->string('symptoms')->nullable();
            $table->string('prescription')->nullable();
            $table->string('visit_outcomes')->nullable();
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
        Schema::dropIfExists('visits');
    }
}
