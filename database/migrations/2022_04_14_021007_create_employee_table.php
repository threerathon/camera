<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code_employee')->unique();
            $table->text('img_cover');
            $table->string('name');
            $table->integer('type');
            $table->string('title');
            $table->integer('sex');
            $table->string('cccd');
            $table->string('phone_number');
            $table->date('birthday');
            $table->string('address');
            $table->string('code_dm');
            $table->string('code_timesheet');
            $table->string('code_bonus');
            $table->string('code_salary');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
