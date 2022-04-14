<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info', function (Blueprint $table) {
            $table->increments('ids');
            $table->string('action_type')->default('create');
            $table->string('aliasID');
            $table->string('data_type')->default('log');
            $table->datetime('date')->default(now());
            $table->text('detected_image_url');
            $table->string('deviceID');
            $table->string('deviceName');
            $table->string('hash');
            $table->string('id');
            $table->string('keycode')->nullable();
            $table->string('personID');
            $table->string('personName');
            $table->string('personTitle');
            $table->string('personType');
            $table->string('placeID');
            $table->string('placeName');
            $table->integer('mask');
            $table->bigInteger('time');
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
        Schema::dropIfExists('info');
    }
}
