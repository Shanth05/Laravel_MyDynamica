<?php
use  App\Models;
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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', length: 50);
            $table->string('last_name', length: 50);
            $table->date('date_of_birth');
            $table->string('nic', length: 12);
            $table->date('joined_date');
            $table->string('gender', length: 50);
            $table->string('designation', length: 50);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
