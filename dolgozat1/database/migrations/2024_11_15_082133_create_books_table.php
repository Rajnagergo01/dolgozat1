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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }

    public function fel() {
        Schema::create('könyvek', function (Blueprint $table) {
            $table->id();
            $table->string('cím');
            $table->string('szerző');
            $table->id('genres_id')->constrained('genres')->onDelete('asd');
            $table->year('kiadási_év');
            $table->softDeletes();
            $table->timestamps(); 
    });}

    public function fel2() {
        Schema::create('foglalások', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->id('könyv_id')->constrained('könyvek')->onDelete('asd2');
            $table->date('foglalások_dátuma');
            $table->date('visszahozás_dátuma')->nullable();
            $table->softDeletes();
            $table->timestamps();
});
}};