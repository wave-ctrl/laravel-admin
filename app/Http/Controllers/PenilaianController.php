<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenilaianController extends Controller
{
       public function index()
   {
        return view('pages/penilaian',[
       'title' => 'Penilaian',
       'titlenav' => 'Penilaian'
   ]) ;
   }
}
