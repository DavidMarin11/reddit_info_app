<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reddits', function (Blueprint $table) {
            $table->id();
            $table->string('id_reddit');
            $table->string('display_name');
            $table->string('title');
            $table->integer('subscribers')->nullable();
            $table->integer('created');
            $table->string('subreddit_type'); 
            $table->bigInteger('id_appearance')->unsigned();
            $table->bigInteger('id_feature')->unsigned();
            $table->bigInteger('id_description')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_appearance')->references('id')->on('appearance');
            $table->foreign('id_feature')->references('id')->on('feature');
            $table->foreign('id_description')->references('id')->on('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reddits');
    }
}
