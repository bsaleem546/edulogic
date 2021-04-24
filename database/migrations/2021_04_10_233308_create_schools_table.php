<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('school_name');
            $table->longText('school_logo');
            $table->string('school_type');
            $table->integer('school_branches');
            $table->string('school_headoffice');
            $table->string('school_owner');
            $table->string('school_owner_no');
            $table->string('school_principal');
            $table->string('school_principal_no');
            $table->string('school_landline');
            $table->string('school_email');
            $table->string('school_password');
            $table->string('school_days');
            $table->string('school_shift');
            $table->string('school_address');
            $table->string('school_state');
            $table->string('school_city');
            $table->integer('school_zip');
            $table->string('school_country');
            $table->string('school_website');
            $table->string('school_notes');
            $table->integer('school_parent')->default(0);
            $table->string('school_status')->default('Active');
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
        Schema::dropIfExists('schools');
    }
}
