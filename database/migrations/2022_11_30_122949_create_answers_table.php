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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('q_user');
            $table->string('q_name');
            $table->string('q_email');
            $table->bigInteger('q_department');
            $table->string('q_programe');
            $table->string('q_title');
            $table->string('q_description');
            $table->string('a_name');
            $table->string('a_email');
            $table->string('a_programe');
            $table->string('a_department');
            $table->string('a_description');
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
        Schema::dropIfExists('answers');
    }
};
