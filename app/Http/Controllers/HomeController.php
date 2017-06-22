<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index()
    {
        $ilceler = [
            'patnos',
            'diyadin',
            'tutak',
            'doğubeyazıt',
            'hamur'
        ];

        return view('anasayfa',compact('ilceler'));
    }

    public function iletisim()
    {
        $baslik = "Merhaba";

        return view('iletisim')->with('baslik',$baslik);
    }

}
