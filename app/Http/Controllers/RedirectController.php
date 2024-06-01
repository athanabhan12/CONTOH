<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function cek() {
        if (auth()->user()->id_role === 1) {
            return redirect('/admin');
        } else {
            return redirect('/tourleader');
        }
    }
}
