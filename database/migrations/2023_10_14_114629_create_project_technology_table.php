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
        Schema::create('project_technology', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("project_id")->nullable();
            $table->foreign("project_id")
                ->references("id")
                ->on("projects");
            
            $table->unsignedBigInteger("technology")->nullable();
            $table->foreign("technology_id")
                ->references("id")
                ->on("technology");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_technology');
    }
};
