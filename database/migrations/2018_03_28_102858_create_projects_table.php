<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
			$table->string('implementing_agency_id');
			$table->string('phase1_id');
			$table->boolean('phase1_status')->default(0);
			$table->string('phase2_id')->nullable();
			$table->boolean('phase2_status')->default(0);
			$table->string('phase3_id')->nullable();
			$table->boolean('phase3_status')->default(0);
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
