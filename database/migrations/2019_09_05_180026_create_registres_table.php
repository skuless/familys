<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('author');
            $table->string('lastname', 255);
            $table->string('firstname', 255);
            $table->string('phone', 30);
            $table->string('work', 255);
            $table->string('gang', 255);
            $table->string('immatriculation', 100);
            $table->string('vehicle', 200);
            $table->string('sign', 255);
            $table->text('info', 500);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registres');
    }
}
