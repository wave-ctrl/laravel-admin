<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KriteriaController extends Controller
{
   public function index()
   {
        return view('pages/kriteria',[
       'title' => 'Kriteria',
       'titlenav' => 'Kriteria'
   ]) ;
   }
}
