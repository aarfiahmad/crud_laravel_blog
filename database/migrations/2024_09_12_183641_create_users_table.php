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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Primary key (auto-increment)
            $table->string('name'); // Name column (VARCHAR)
            $table->string('email')->unique(); // Email column (VARCHAR), unique constraint
            $table->timestamp('email_verified_at')->nullable(); // Nullable timestamp for email verification
            $table->string('password'); // Password column (VARCHAR)
            $table->rememberToken(); // Token for "Remember Me" feature
            $table->timestamps(); // Created_at and updated_at columns (TIMESTAMP)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
