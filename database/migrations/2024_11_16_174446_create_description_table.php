<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('description', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->text('description_html')->nullable();
            $table->text('submit_text')->nullable();
            $table->text('submit_text_html')->nullable();
            $table->text('public_description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('description');
    }
}
