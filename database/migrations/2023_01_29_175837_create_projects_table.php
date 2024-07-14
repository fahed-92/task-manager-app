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
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->unsignedSmallInteger('status')->default(0);
            $table->unsignedInteger('board_id');
            $table->date('duration')->nullable();
            $table->date('exp_duration'); /// expected durations
            $table->unsignedInteger('cost');
            $table->unsignedInteger('active_hour')->nullable(); /// active hours to complete the projects
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
