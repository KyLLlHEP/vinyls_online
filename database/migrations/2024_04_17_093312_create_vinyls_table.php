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
        Schema::create('vinyls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  // Link to the ID of the user who added the vinyl
            $table->string('artist_name');          // Performer
            $table->string('album_title');          // Album title
            $table->string('genre');                // Genre of music
            $table->string('image_path');           // Path to album cover image
            $table->decimal('price', 8, 2);         // Price without discount
            $table->decimal('old_price', 8, 2)->nullable(); // Old price to display the discount
            $table->timestamps();                   // Timestamps для created_at и updated_at

            $table->foreign('user_id')             // External key linking to the user table
                  ->references('id')->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinyls');
    }
};
