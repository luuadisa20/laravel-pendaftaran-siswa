<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function index()
  {
    return view('dashboard', [
      'title' => 'Dashboard',
    ]);
  }

  public function pembayaran()
  {
    return view('pembayaran', [
      'title' => 'Pembayaran',
    ]);
  }
}
