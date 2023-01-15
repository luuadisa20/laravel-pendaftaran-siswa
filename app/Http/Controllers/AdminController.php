<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
  public function index()
  {
    $data = [];

    if (Auth::user()->role !== 'admin') {
      $siswa = DB::table('siswa')->join('user', 'siswa.id_user', '=', 'user.id')->where('user.id', '=', Auth::user()->id)->first();

      $data['title'] = 'Dashboard';
      $data['siswa'] = $siswa;

      return view('dashboard-student', $data);
    } else {
      $data['title'] = 'Dashboard';

      return view('dashboard', $data);
    }
  }

  public function pembayaran(Request $request)
  {
    $data = [];

    if (Auth::user()->role !== 'admin') {
      $siswa = DB::table('siswa')->join('user', 'siswa.id_user', '=', 'user.id')->where('user.id', '=', Auth::user()->id)->first();

      $data['title'] = 'Pembayaran';
      $data['javascript'] = 'pembayaran-student.js';
      $data['siswa'] = $siswa;

      return view('pembayaran-student', $data);
    } else {
      $pendaftaran = DB::table('siswa')->paginate(10);

      $data['title'] = 'Verifikasi Pembayaran';
      $data['javascript'] = 'pembayaran.js';
      $data['pendaftaran'] = $pendaftaran;

      return view('pembayaran', $data);
    }
  }

  public function detail_pembayaran($id = null)
  {
    $data = [];

    $siswa = DB::table('siswa')->where('id', '=', $id)->first();

    $data['title'] = 'Detail Pembayaran';
    $data['siswa'] = $siswa;

    return view('detail-pembayaran', $data);
  }

  public function detail_pendaftaran($id = null)
  {
    $data = [];

    $siswa = DB::table('siswa')->where('id', '=', $id)->first();

    $data['title'] = 'Detail Pendaftaran';
    $data['siswa'] = $siswa;

    return view('detail-pendaftaran', $data);
  }

  public function proses(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'nama-bank-input' => 'required',
      'nama-pemilik-rekening' => 'required',
      'nominal' => 'required|gt:0',
    ]);

    $validator->after(function ($validator) {
      $file_exists = file_exists($_FILES['bukti-pembayaran']['tmp_name']);

      if (!$file_exists) {
        $validator->errors()->add('bukti-pembayaran', 'Bukti pembayaran is required');
      }

      $extensions_allowed = ['image/gif', 'image/jpeg', 'image/jpg', 'image/png'];
      $type_in_array = in_array($_FILES['bukti-pembayaran']["type"], $extensions_allowed);

      if ($file_exists && !$type_in_array) {
        $validator->errors()->add('bukti-pembayaran', 'Bukti pembayaran only accept image');
      }
    });

    if ($validator->fails()) {
      return redirect('page-pembayaran')
        ->withErrors($validator)
        ->withInput();
    }

    $filename = 'file' . time() . $_FILES['bukti-pembayaran']['name'];
    // file6783218632user.png

    $lokasi_upload = './pembayaran/' . $filename;

    move_uploaded_file($_FILES['bukti-pembayaran']['tmp_name'], $lokasi_upload);

    $id = Auth::user()->id;

    $siswa = Siswa::where('id_user', $id);
    $siswa->update([
      'nama_bank' => $request->post('nama-bank-input'),
      'nama_pemilik_rekening' => $request->post('nama-pemilik-rekening'),
      'nominal' => $request->post('nominal'),
      'bukti_pembayaran' => $filename,
    ]);

    Session::flash('message', 'Pembayaran telah dilakukan silahkan menunggu admin melakukan validasi.');
    Session::flash('alert-class', 'alert-success');
    return redirect('/dashboard');
  }

  public function verifikasi(Request $request)
  {
    $siswa = Siswa::where('id', $request->post('id'));
    $siswa->update([
      'status_registrasi' => 'accepted'
    ]);

    Session::flash('message', 'Verifikasi berhasil dilakukan');
    Session::flash('alert-class', 'alert-success');
    return redirect('/page-pembayaran');
  }

  public function tolak(Request $request)
  {
    $siswa = Siswa::where('id', $request->post('id'));
    $siswa->update([
      'status_registrasi' => 'denied'
    ]);

    Session::flash('message', 'Penolakan berhasil dilakukan');
    Session::flash('alert-class', 'alert-success');
    return redirect('/page-pembayaran');
  }
}
