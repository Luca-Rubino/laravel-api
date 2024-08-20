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
        Schema::create('projects', function (Blueprint $projects) {
            $projects->id();
            $projects->string('name');
            $projects->string('last_name');
            // $projects->string('token', 64)->unique();
            // $projects->text('abilities')->nullable();
            // $projects->timestamp('last_used_at')->nullable();
            // $projects->timestamp('expires_at')->nullable();
            // $projects->timestamp('deleted_at')->nullable();
            $projects->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('projects');
    }
};
