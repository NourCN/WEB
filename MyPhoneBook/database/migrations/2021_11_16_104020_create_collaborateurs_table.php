<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateCollaborateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborateurs', function (Blueprint $table) {
            $table->id();
            $table->string('civilite');
            $table->string('nom');
            $table->string('prenom');
            $table->string('rue');
            $table->string('code_postal');
            $table->string('ville');
            $table->string('numero')->nullable();
            $table->string('email');
            $table->biginteger('entreprise_id')->unsigned();
            $table->foreign('entreprise_id')->references('id')->on('entreprises')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
        });
    

   /*      $input = [
            'civilitie' => ['Female', 'Male','Non binaire'],
        ];
        
        Validator::make($input, [
            'civilitie' => [
                'required',
                'array',
                Rule::in(['Female', 'Male','Non binaire']),
            ],
        ]); */
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaborateurs');
    }
}
