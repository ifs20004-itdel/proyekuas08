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
        Schema::create('data_beasiswa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('nim');
            $table->string('prodi');
            $table->integer('angkatan');
            $table->string('beasiswa');
            $table->date('tahunStart');
            $table->date('tahunEnd');
            $table->string('status');
            $table->integer('tahunTerima');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_beasiswa');
    }
};
