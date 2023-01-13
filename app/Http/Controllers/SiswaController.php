<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Siswa;
use App\Models\User;
use Spatie\Permission\Models\Role;

use PDF;

class SiswaController extends Controller
{
  public function index()
  {
    return view('pendaftaran-siswa', [
      'title' => 'Pendaftaran Siswa',
      'javascript' => 'pendaftaran-siswa.js'
    ]);
  }

  public function cetak(Request $request)
  {
    // validasi form pendaftaran
    $this->validate($request, [
      'nisn' => 'required',
      'nama' => 'required',
      'jenis-kelamin' => 'required',
      'email' => "required|email|unique:user",
      'no-hp' => 'required',
      'no-hp-ayah' => 'required',
      'no-hp-ibu' => 'required',
      'asal-sekolah-input' => 'required'
    ]);

    // generate password
    $key = random_int(0, 99999999);

    // password yang ditampilkan di pdf
    $key = str_pad($key, 8, 0, STR_PAD_LEFT);
    $password = Hash::make($key);

    // menyimpan data user ke database
    $user = new User;
    $user->nama = $request->post('nama');
    $user->email = $request->post('email');
    $user->role = 'student';
    $user->password = $password;
    $user->save();

    // menyimpan data siswa ke database
    $siswa = new Siswa;
    $siswa->id_user = $user->id;
    $siswa->nisn = $request->post('nisn');
    $siswa->nama = $request->post('nama');
    $siswa->jenis_kelamin = $request->post('jenis-kelamin');
    $siswa->email = $request->post('email');
    $siswa->no_hp = $request->post('no-hp');
    $siswa->no_hp_ayah = $request->post('no-hp-ayah');
    $siswa->no_hp_ibu = $request->post('no-hp-ibu');
    $siswa->asal_sekolah = $request->post('asal-sekolah-input');
    $siswa->save();

    // data yang dikirimkan ke pdf
    $payload = [
      'nisn' => $request->post('nisn'),
      'nama' => $request->post('nama'),
      'jenis_kelamin' => $request->post('jenis-kelamin'),
      'email' => $request->post('email'),
      'no_hp' => $request->post('no-hp'),
      'no_hp_ayah' => $request->post('no-hp-ayah'),
      'no_hp_ibu' => $request->post('no-hp-ibu'),
      'asal_sekolah' => $request->post('asal-sekolah-input'),
      'password' => $key,
      'tanggal_pendaftaran' => date('d M Y', strtotime($siswa->created_at)),
      'no_seleksi' => $siswa->id,
    ];

    // memanggil library pdf, lalu melakukan konfigurasi
    $pdf = PDF::loadview('pendaftaran-siswa-pdf', $payload)->setPaper('a4', 'landscape');
    // return $pdf->download('pendaftaran-siswa-pdf.pdf');

    // menampilkan data pdf ke layar browser
    return $pdf->stream('pendaftaran-siswa-pdf.pdf');
  }
}
