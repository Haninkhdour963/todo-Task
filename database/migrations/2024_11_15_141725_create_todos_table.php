<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();  // Auto-incrementing 'id' column.
            $table->string('task');  // Column for storing the task.
            $table->boolean('completed')->default(false);  // Boolean to indicate task completion, default to false.
            $table->timestamps();  // 'created_at' and 'updated_at' timestamps.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');  // Drop the 'todos' table if it exists.
    }
};
