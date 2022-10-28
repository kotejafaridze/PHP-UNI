<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vids', function (Blueprint $table) {
            $table->id();
            $table->text("Youtube_link")->nullable();
            $table->string("Description")->nullable();
            $table->string("Release Date")->nullable();
            $table->string("Channel name")->nullable();
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
        Schema::dropIfExists('vids');
    }
};
