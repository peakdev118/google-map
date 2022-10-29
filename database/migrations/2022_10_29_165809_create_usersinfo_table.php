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
            $table->string('userid');
            $table->string('nric');
            $table->string('contact');
            $table->string('address1');
            $table->string('address2');
            $table->integer('postcode');
            $table->string('district');
            $table->integer('agent');
            $table->float('latitude');
            $table->integer('longitude');
            $table->string('nombor_permohonan');
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
