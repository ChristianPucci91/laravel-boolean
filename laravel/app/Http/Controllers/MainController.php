<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
  public function holaTodo() {
    return view('holaTodo');
  }

  public function holaTu() {
    return view('holaTu',
   [

    'nombre' => 'Carmen'

   ]);
  }

  public function holaTu2() {
    return view('holaTu',
   [

    'nombre' => 'Don Diego de la Vega'

   ]);
  }


}
