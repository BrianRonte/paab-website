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
        Schema::create('practitioners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('registration_number')->unique();
            $table->string('category'); // public_auditor, public_accountant, general_accountant, tax_accountant
            $table->string('status')->default('active'); // active, suspended, cancelled, retired
            $table->string('gender')->nullable();
            $table->string('constituent_body')->nullable(); // ICAZ, ACCA, CIMA, etc.
            $table->foreignId('firm_id')->nullable()->constrained()->nullOnDelete();
            $table->string('firm_name')->nullable(); // For display if not linked
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->date('registration_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practitioners');
    }
};