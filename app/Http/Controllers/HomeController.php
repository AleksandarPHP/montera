<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function gallery(){
        $albums = Album::where('is_active', 1)->get();

        return view('galerija', ['albums' => $albums]);
    }
}
