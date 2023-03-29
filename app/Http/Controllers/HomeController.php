<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Kode Sebelum Diubah Praktikum 3
        // return view('home');

        // Kode Sebelum Diubah pada Praktikum 4 No 5
        // $user = Auth::user();
        // return view('home',['user'=>$user]);

        // Kode yang diubah / tambahkan untuk Praktikum 4 No 5
        $user = Auth::user();
        return view('index3',['user'=>$user]);
    }
}
