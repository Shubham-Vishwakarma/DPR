<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodalUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nodal_users', function (Blueprint $table) {
            $table->increments('emp_id');
            $table->string('emp_name');
            $table->string('username');
            $table->string('password');
            $table->string('completed');
            $table->string('pending');
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
        Schema::table('nodal_users', function (Blueprint $table) {
            Schema::dropIfExists('nodal_users');
        });
    }
}
