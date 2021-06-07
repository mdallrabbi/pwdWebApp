<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('startDate');
            $table->date('endDate');
            $table->string('comment');
            $table->text('details');

            $table->unsignedBigInteger('implementor');
            $table->foreign('implementor')->references('id')->on('implementorOrganization');

            $table->timestamps();

            //$table->unique(['name', 'details']);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project');
    }
}
