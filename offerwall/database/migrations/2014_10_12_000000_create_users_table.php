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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('country')->nullable();
            $table->timestamp('verified_at')->nullable();
             $table->boolean('activated')->default(false);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

          Schema::create('user_activations', function (Blueprint $table) {
        $table->integer('user_id')->unsigned();
        $table->string('token')->index();
        $table->timestamp('created_at');
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
