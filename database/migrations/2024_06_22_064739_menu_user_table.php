<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menu_user', function(Blueprint $table){
            $table->increments('no_setting');
            $table->foreignId('id_user')->references('id_user')->on('users');
            $table->foreignId('menu_id')->references('menu_id')->on('menu');
            $table->date('create_date');
            $table->timestamp('create_time');
            $table->string('delete_mark', 1);
            $table->string('update_by', 30);
            $table->timestamp('update_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExist('menu_user');
    }
};
