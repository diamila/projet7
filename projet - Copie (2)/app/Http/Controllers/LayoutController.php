<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
  


      public function debut()//qui va recevoir id
    {
        return view('layouts/layout');
     
    }
     
    
}
