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
        Schema::create('respons', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('admin_id')->unsigned();
            $table->bigInteger('keluhan_id')->unsigned();            
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->foreign('keluhan_id')->references('id')->on('keluhans');
            $table->text('respon');
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
        Schema::dropIfExists('respons');
    }
};
