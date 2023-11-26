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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string("partner");
            $table->string("offer_name");
            $table->string("offer_id");
            $table->string("tx_id");
            $table->string("ip")->nullable();
            $table->integer("status");
            $table->integer("multi_status")->nullable();
            $table->string("payout");
            $table->string("currency_reward");
            $table->timestamps();
            $table->decimal('wax_reward', 6,4)->default('0.0000');
            $table->decimal('klee_reward', 6,4)->default('0.0000');
            $table->boolean('reward_locked')->default(true);
            $table->integer('points');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
