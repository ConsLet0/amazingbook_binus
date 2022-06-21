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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('gender_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->string('first_name', 25);
            $table->string('middle_name', 25);
            $table->string('last_name', 25);
            $table->string('email', 50);
            $table->string('password', 255);
            $table->string('image', 255)->nullable();
            $table->integer('delete_flag')->nullable();
            $table->date('modified_at')->nullable();
            $table->string('modified_by', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};
