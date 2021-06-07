<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudget extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budget', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('projectID');
            $table->foreign('projectID')->references('id')->on('project')->onDelete('restrict');

            $table->bigInteger('project_duration');
            $table->string('fiscal_year');

            /*BUG
            */
            $table->unsignedBigInteger('source_of_fund');
            
            
            //$table->foreign('source_of_fund')->references('id')->on('fund_sources')->onDelete('restrict');
            /*End of BUG
            */

            $table->string('donner');
            $table->string('amount');
            $table->date('allocationDate');
            $table->timestamps();

            $table->unique(['donner', 'amount']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budget');
    }
}
