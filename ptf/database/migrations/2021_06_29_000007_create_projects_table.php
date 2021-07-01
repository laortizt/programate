<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameProject','70');
            $table->year('anioIni');
            $table->year('anioFin');
            $table->string('description','100');
            $table->unsignedInteger('idprofesionalFK');
            $table->foreign('idprofesionalFK')->references('id')->on('profesionals');
            $table->unsignedInteger('idcategoryFK');
            $table->foreign('idcategoryFK')->references('id')->on('categories');
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
        Schema::dropIfExists('projects');
    }
}
