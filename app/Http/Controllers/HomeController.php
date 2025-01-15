<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Floor;
use Illuminate\Http\Request;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function gallery(){
        $albums = Album::where('is_active', 1)->get();

        return view('galerija', ['albums' => $albums]);
    }

    public function floors(Request $request, $id){
        $floors = Floor::findOrFail($id);

        return view('tehnicki-prikaz', ['floors' => $floors]);
    }
}
