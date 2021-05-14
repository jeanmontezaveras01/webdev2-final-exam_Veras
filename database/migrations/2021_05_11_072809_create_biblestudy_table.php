<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiblestudyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biblestudy', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('complete_name');
            $table->string('email_address');
            $table->string('contact_number');
            $table->date('birthdate');
            $table->string('religious_affiliation');
            $table->date('bible_study_date');
            $table->time('bible_study_time');
            $table->string('bible_study_location');
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biblestudy');
    }
}
