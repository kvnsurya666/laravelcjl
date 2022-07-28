<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home() {
        return view ('/admin/home');
    }

    public function produk() {
        return view ('produk');
    }

}
