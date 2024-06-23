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
        Schema::create('user_foto', function(Blueprint $table){
            $table->increments('no_foto');
            $table->foreignId('id_user')->references('id_user')->on('users');
            $table->string('foto', 300);
            $table->string('create_by', 30);
            $table->timestamp('create_date');
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
        Schema::dropIfExist('user_foto');
    }
};
