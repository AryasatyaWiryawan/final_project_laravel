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
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // ID column
            $table->string('name'); // Name column
            $table->string('contact_number'); // Contact Number column
            $table->string('address'); // Address column
            $table->string('doctor_name'); // Doctor Name column
            $table->string('doctor_address'); // Doctor Address column
            $table->timestamps(); // Created at & Updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
