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
        Schema::create('usersinfo', function (Blueprint $table) {
            //
            $table->id();
            $table->string('user_id');
            $table->string('nric');
            $table->string('contact');
            $table->string('address1');
            $table->string('address2');
            $table->integer('postcode');
            $table->string('district');
            $table->integer('agent');
            $table->float('latitude');
            $table->float('longitude');
            $table->string('application_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersinfo');
    }
};
