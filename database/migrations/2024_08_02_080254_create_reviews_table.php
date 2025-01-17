<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            $table->text('review');
            $table->unsignedTinyInteger('rating');
            $table->timestamps();

            // $table->unsignedBigInteger('book_id');
            // $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            // $table->foreignIdFor(Book::class)->constrained()->cascadeOnDelete();
            $table->foreignId('book_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
