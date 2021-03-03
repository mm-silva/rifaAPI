<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAward extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awards', function (Blueprint $table) {
            $table->increments('id_award');
            $table->string('name');
            $table->integer('number_lucky');
            $table->dateTime('final_date', $precision = 0);
            $table->longText('description');
            $table->string('slug');
            $table->integer('id_boss')->unsigned();
            $table->foreign('id_boss')->references('id')->on('users');
            $table->json('json_list');
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
        Schema::dropIfExists('awards');
    }
}
