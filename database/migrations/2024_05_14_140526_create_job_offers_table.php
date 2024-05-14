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
        Schema::create('job_offers', function (Blueprint $table) {

            $table->id();
            $table->string('title');
            $table->text('description');
            $table->date('publication_date');
            $table->string('whatsapp_contact');
            $table->string('original_link');
            $table->unsignedBigInteger('status')->default(2); // Agregar columna de estado
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_offers');
    }
};
