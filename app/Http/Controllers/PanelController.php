<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
  public function login()
  {
    return view('panel.login');
  }
}
