<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class planoController extends Controller
{
    public function getPlanos()
    {
      $data =Planos::all();
    
      return view('admin.planos')
      ->with('planos',$data);
    }
}
