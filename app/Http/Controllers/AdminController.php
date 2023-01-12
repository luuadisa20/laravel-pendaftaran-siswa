<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
  public function index()
  {
    $data = [];

    if (Auth::user()->role !== 'admin') {
      $siswa = DB::table('siswa')->join('user', 'siswa.id_user', '=', 'user.id')->where('user.id', '=', Auth::user()->id);

      $data['title'] = 'Dashboard';
      $data['siswa'] = $siswa;

      return view('dashboard', $data);
    } else {
      $data['title'] = 'Dashboard';

      return view('dashboard', $data);
    }
  }

  public function pembayaran()
  {
    return view('pembayaran', [
      'title' => 'Pembayaran',
    ]);
  }

  public function proses_pembayaran(Request $request)
  {
    $this->validate($request, [
      'file' => 'required',
    ]);

    $file = $request->file('bukti-pembayaran');

    $file->getClientOriginalName();

    $lokasi_upload = '/pembayaran';

    $file->move($lokasi_upload, $file->getClientOriginalName());

    $id = Auth::user()->id;

    $siswa = Siswa::find($id);
    $siswa->bukti_pembayran = $file->getClientOriginalName();
    $siswa->update();

    Session::flash('message', 'Pembayaran telah dilakukan silahkan menunggu admin melakukan validasi.');
    Session::flash('alert-class', 'alert-success');
    redirect('dashboard');
  }
}
