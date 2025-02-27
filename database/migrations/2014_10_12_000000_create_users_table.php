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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('nama_user', 60);
            $table->string('username', 60)->nullable();
            $table->string('password', 60);
            $table->string('email', 200);
            $table->string('no_hp', 30)->nullable();
            $table->string('wa', 30)->nullable();
            $table->string('pin', 30)->nullable();
            $table->string('id_jenis_user')->default('User')->nullable(); // Set sebagai 'User'
            $table->string('status_user', 30)->nullable();
            $table->string('delete_mark', 1)->nullable();
            $table->string('create_by', 30)->nullable();
            $table->timestamp('create_date')->nullable();
            $table->string('update_by', 30)->nullable();
            $table->timestamp('update_date')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
