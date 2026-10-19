<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $menu = 'home';
        return view('home', compact('menu'));
    }

    public function mahasiswa()
    {
        $menu = 'mahasiswa';
        return view('mahasiswa', compact('menu'));
    }

    public function prosesPost(Request $request)
    {
        $menu   = 'proses';
        $nim    = $request->nim;
        $nama   = $request->nama;
        $metode = 'POST';

        return view('proses', compact('menu', 'nim', 'nama', 'metode'));
    }
}
