<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImplementorOrganization extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('implementorOrganization', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ministry')->unique();
            $table->string('sub_ministry');
            $table->string('sector');
            $table->string('sub_sector');
            $table->string('division');
            $table->string('subdivision');

            $table->unsignedBigInteger('user');
            $table->foreign('user')->references('id')->on('users')->onDelete('restrict');

            $table->timestamps();

            $table->unique(['ministry', 'subdivision']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('implementorOrganization');
    }
}
