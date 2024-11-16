<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature', function (Blueprint $table) {
            $table->id();
            $table->boolean('allow_videos')->default(false);
            $table->boolean('allow_galleries')->default(false);
            $table->boolean('spoilers_enabled')->default(false);
            $table->boolean('emojis_enabled')->default(false);
            $table->boolean('allow_polls')->default(false);
            $table->string('submission_type')->nullable();
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
        Schema::dropIfExists('feature');
    }
}
