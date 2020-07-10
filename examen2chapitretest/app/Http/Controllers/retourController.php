<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class retourController extends Controller
{
  


      public function retour()//qui va recevoir id
    {
        return view('auth/login');
     
    }


     
    
}
