<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->string('name');
            $table->date('naissance');
            $table->integer('numeroderegistrenational')->unique();
            // $table->string('genre');
            $table->string('adresse');
            $table->string('pays');
            $table->string('ville');
            $table->string('codepostal');
            $table->string('telephone');
            $table->string('personnedecontact');
            $table->string('numerocontact');
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
        Schema::dropIfExists('patients');
    }
}
