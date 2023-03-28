<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalhisotiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicalhisoties', function (Blueprint $table) {
            $table->id();
            $table->Integer('patient_id')->index();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->string('medical_history')->nullable();
            $table->string('chief_coplaint')->nullable();
            $table->Integer('visit_id')->index();
            $table->foreign('visit_id')->references('id')->on('visits')->onDelete('cascade');
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
        Schema::dropIfExists('medicalhisoties');
    }
}
