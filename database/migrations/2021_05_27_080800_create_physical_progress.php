<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhysicalProgress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physicalProgress', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project_name');
            $table->foreign('project_name')->references('id')->on('project')->onDelete('restrict');
            $table->year('year');
            $table->string('amount');
            $table->string('rate');
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
        Schema::dropIfExists('physicalProgress');
    }
}
