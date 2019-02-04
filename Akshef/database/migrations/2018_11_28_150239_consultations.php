<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Consultations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {            
        Schema::create('consultations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Consultation',500);
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('doc_id');
            $table->string('Answer',800);
            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->foreign('doc_id')
                ->references('id')->on('docs');
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
        Schema::dropIfExists('consultations');

    }
}
