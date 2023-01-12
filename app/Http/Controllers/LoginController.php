<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
  // public function index()
  // {
  //   if (Auth::check()) {
  //     return redirect('dashboard');
  //   } else {
  //     return view('login', [
  //       'title' => 'Login',
  //     ]);
  //   }
  // }

  // public function login(Request $request)
  // {
  //   $data = [
  //     'email' => $request->email,
  //     'password' => $request->password,
  //   ];

  //   if (Auth::attempt($data)) {
  //     return redirect('dashboard');
  //   } else {
  //     Session::flash('error', 'Email atau Password Salah');
  //     return redirect('login');
  //   }
  // }

  // public function logout()
  // {
  //   Auth::logout();
  //   return redirect('/');
  // }
}
