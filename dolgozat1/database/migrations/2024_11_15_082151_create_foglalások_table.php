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
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }

    public function fel(){
        Schema::create("foglalások", function(Blueprint $table){
            $table->id();
            $table->string("email");
            $table->string("könyv_id")->constrained("könyvek")->onDelete("asd1");
            $table->string("kölcsönzés_dátuma");
            $table->string("visszahozás_dátuma")->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }
};
