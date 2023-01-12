<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
  protected $table = 'siswa';

  protected $fillable = [
    'nisn',
    'nama',
    'jenis_kelamin',
    'asal_sekolah',
    'email',
    'no_hp',
    'no_hp_ayah',
    'no_hp_ibu',
    'status_registrasi',
  ];

  public function get_by_id()
  {
    return [];
  }
}
