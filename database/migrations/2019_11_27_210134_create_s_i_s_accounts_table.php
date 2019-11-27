<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSISAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_i_s_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('SchoolNmae');
            $table->text('EducationZone');
            $table->text('District');
            $table->text('PresidentOfSociety');
            $table->text('SecretryOfSociety');
            $table->text('TreasurerOfSociety');
            $table->text('TeacherInCharge');
            $table->text('Email');
            $table->text('password');   
            $table->text('SchoolFBProfile');
            $table->timestamps('Date');
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
