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
    Schema::create('seminars', function (Blueprint $table) {
        $table->id('id_event');
        $table->string('nama_ormawa');
        $table->string('nama_kegiatan');
        $table->string('narasumber');
        $table->date('tanggal');
        $table->time('jam');
        $table->string('lokasi');
        $table->integer('kuota');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seminars');
    }
};
