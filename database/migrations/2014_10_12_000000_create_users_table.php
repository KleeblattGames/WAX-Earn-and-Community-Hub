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
            $table->increments('id')->startingValue(1200);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('country')->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->boolean('activated')->default(false);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->decimal('wax_balance', 6,4)->default('0.0000');
            $table->decimal('wax_balance_locked', 6,4)->default('0.0000');
            $table->decimal('klee_balance', 6,4)->default('0.0000');
            $table->integer('age')->nullable();
            $table->boolean('beta_tester')->default(false);
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
