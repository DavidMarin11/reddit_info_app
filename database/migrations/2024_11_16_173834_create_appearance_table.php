<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppearanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appearance', function (Blueprint $table) {
            $table->id();
            $table->string('icon_img')->nullable();
            $table->string('banner_img')->nullable();
            $table->string('primary_color')->nullable();
            $table->string('key_color')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('appearance');
    }
}
