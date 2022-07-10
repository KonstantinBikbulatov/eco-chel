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
        Schema::create('Model_Objects', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('model_type_id');
            $table->foreign('model_type_id')->references('model_type_id')->on('model_types');
            $table->string('name');
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
        Schema::dropIfExists('objects');
    }
};
