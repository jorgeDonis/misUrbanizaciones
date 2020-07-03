<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ResidenceUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residence_user', function (Blueprint $table) {
            $table->primary(['residence_id', 'user_id']);
            $table->unsignedBigInteger('residence_id')->nullable(false);
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->foreign('residence_id')->references('id')->on('residences')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('residence_user');
    }
}
