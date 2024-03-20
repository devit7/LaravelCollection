<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    //

    public function cariToko($id){
        return view('toko',
        [
            'data_toko'=> Toko::find($id)
        ]
        );
    }
}
