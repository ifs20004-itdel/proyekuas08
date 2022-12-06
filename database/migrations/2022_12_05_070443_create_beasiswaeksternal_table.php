<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beasiswaeksternal', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('judul');
            $table->text('konten');
            $table->string('gambar');
            $table->date('tanggalDaftar')->nullable(false);
            $table->date('taggalDeadline')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beasiswaeksternal');
    }
};
