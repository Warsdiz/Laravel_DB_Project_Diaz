<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            // You can EDIT these fields or ADD new ones:
            $table->string('name');
            $table->string('email')->unique();
            $table->string('course'); // Example: 'BSIT', 'BSCS'
            $table->date('enrollment_date');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};