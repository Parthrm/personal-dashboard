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
        if (!Schema::hasTable('studyMaterial')) {
            Schema::create('studyMaterial', function (Blueprint $table) {
                $table->id();
                $table->string("skill-name");
                $table->string("topic");
                $table->string("link");
                $table->integer("status");
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
