<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('branch_id')->nullable();
            $table->string('std_code')->unique();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('father_name')->nullable();
            $table->string('contact')->nullable();
            $table->string('contact1')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_ocuppation')->nullable();
            $table->string('email')->unique();
            $table->text('address')->nullable();
            $table->string('joined_at')->nullable();
            $table->string('room_id')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('students');
    }
}
