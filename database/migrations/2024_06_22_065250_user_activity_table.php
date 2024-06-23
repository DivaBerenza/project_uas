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
        Schema::create('user_activity', function(Blueprint $table){
            $table->increments('no_activity');
            $table->foreignId('id_user')->references('id_user')->on('users');
            $table->string('description', 300);
            $table->string('status', 30);
            $table->foreignId('menu_id')->references('menu_id')->on('menu');
            $table->string('delete_mark', 1);
            $table->string('create_by', 30);
            $table->timestamp('create_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExist('user_activity');
    }
};
