<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancialProgress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financialProgress', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project_name');
            $table->foreign('project_name')->references('id')->on('project')->onDelete('restrict');
            $table->string('amount');
            $table->string('rate');
            $table->timestamps();
            $table->unique(['amount', 'rate']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financialProgress');
    }
}
