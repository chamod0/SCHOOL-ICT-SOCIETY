<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbassadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambassadors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('FirstName');
            $table->String('LasttName');
            $table->String('School');
            $table->String('District');
            $table->String('EducationZone');
            $table->String('Email');
            $table->String('Dob');
            $table->String('AddressL1'); 
            $table->String('AddressL2'); 
            $table->String('Gender');
            $table->String('Linkin');
            $table->String('Facebook');
            $table->String('twitter');  
            $table->String('IsActive');  
            $table->String('img'); 
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
        Schema::dropIfExists('ambassadors');
    }
}
