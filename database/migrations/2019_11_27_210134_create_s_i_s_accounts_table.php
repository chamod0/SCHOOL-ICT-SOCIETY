<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSISAccountsTable extends Migration
{
    /**
     * Run the migrations.g
     * 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_i_s_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('SchoolNmae');
            $table->string('EducationZone');
            $table->string('District');
            $table->string('PresidentOfSociety');
            $table->string('SecretryOfSociety');
            $table->string('TreasurerOfSociety');
            $table->string('TeacherInCharge');
            $table->string('Email');
            $table->string('password');   
            $table->string('SchoolFBProfile');
            $table->timestamp('Date');
            $table->boolean('IsActive');

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
        Schema::dropIfExists('s_i_s_accounts');
    }
}
