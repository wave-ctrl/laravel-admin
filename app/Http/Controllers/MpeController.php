<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MpeController extends Controller
{
    public function index()
    {
        return view('pages/mpe',[
       'title' => 'MPE',
       'titlenav' => 'MPE'
   ]) ;
    }
}
