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
        Schema::create('budget_actions', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['in', 'out']);
            $table->enum('currency', ['pl', 'usd', 'eur', 'byn', 'rub']);
            $table->integer('sum');
            $table->text('comment');
            $table->date('date');
            $table->foreignId('moonshine_user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budget_actions');
    }
};
