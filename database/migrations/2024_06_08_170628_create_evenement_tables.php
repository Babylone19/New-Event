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
        Schema::create('evenement_tables', function (Blueprint $table) {
            $table->id();
            $table->string("Name");
            $table->string("country");
            $table->string("city");
            $table->string("address");
            $table->string("gps");
            $table->string("description");
            $table->string("date");
            $table->string("beginning_hour");
            $table->string("end_time");
            $table->integer("user_id")->references("id")->on("users");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenement_tables');
    }
};
