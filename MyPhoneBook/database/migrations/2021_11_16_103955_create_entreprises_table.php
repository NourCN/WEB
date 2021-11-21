<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->string('rue',100);
            $table->string('code_postal',5);
            $table->string('ville',100);
            $table->string('numero',12)->unique()->nullable();
            $table->string('email',100)->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entreprises');
    }
}
