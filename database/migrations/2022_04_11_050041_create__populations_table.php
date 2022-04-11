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
        Schema::create('Population', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->string('FirstName');
            $table->string('MiddleName');
            $table->string('LastName');
            $table->string('DateOfBirth');
            $table->string('DateOfDeath');
            $table->string('Sex');
            $table->string('Mother');
            $table->string('Father');
            $table->string('Religion');
            $table->string('CivilStatus');
            $table->string('Occupation');
            $table->string('Citizenship');
            $table->string('Nationality');

            // $table->string('');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Population');
    }
};
