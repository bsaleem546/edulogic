<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->integer('branch_id')->nullable();
            $table->string('teacher_code')->unique();
            $table->string('name')->nullable();
            $table->date('joined_date')->nullable();
            $table->string('gender')->nullable();
            $table->integer('subject_id')->nullable();
            $table->integer('room_id')->nullable();
            $table->string('relation')->nullable();
            $table->string('contact')->nullable();
            $table->string('contact1')->nullable();
            $table->text('address')->nullable();
            $table->string('image')->nullable();
            $table->string('email')->unique();
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
        Schema::dropIfExists('teachers');
    }
}
