<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('siswa', function (Blueprint $table) {
      $table->id();
      $table->string('id_user');
      $table->string('nisn');
      $table->string('nama');
      $table->string('jenis_kelamin');
      $table->string('asal_sekolah');
      $table->string('email');
      $table->string('no_hp');
      $table->string('no_hp_ayah')->nullable();
      $table->string('no_hp_ibu')->nullable();
      $table->string('bukti_pembayaran')->nullable();
      $table->string('nominal')->nullable();
      $table->string('nama_pemilik_rekening')->nullable();
      $table->string('nama_bank')->nullable();
      $table->enum('status_registrasi', ['pending', 'accepted', 'denied']);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('siswa');
  }
}
