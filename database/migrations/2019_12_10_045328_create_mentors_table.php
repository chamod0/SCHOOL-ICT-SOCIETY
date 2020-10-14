<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('question1');
            $table->String('question2');
            $table->String('question3');
            $table->String('Name');
            $table->String('Email');
            $table->String('Dob');
            $table->String('Job');
            $table->String('AddressL1'); 
            $table->String('AddressL2'); 
            $table->String('Gender');
            $table->String('Linkin');
            $table->String('Facebook');
            $table->String('twitter');  
            $table->String('img');  
           


            
            
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
        Schema::dropIfExists('mentors');
    }
}
