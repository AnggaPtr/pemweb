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
        Schema::create('supirs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik')->unique();
            $table->string('no_sim')->unique();
            $table->enum('jenis_sim', ['A', 'B1', 'B2', 'C']);
            $table->text('alamat')->nullable();
            $table->string('no_hp');
            $table->enum('status', ['Aktif', 'Nonaktif'])->default('Aktif');
            $table->date('tanggal_bergabung')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supirs');
    }
};
