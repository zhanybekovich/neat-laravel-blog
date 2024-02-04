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
        Schema::create('service_work', function (Blueprint $table) {
            $table->foreignId('service_id')
                ->constrained('services')
                ->cascadeOnDelete();
            $table->foreignId('work_id')
                ->constrained('works')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_work');
    }
};
