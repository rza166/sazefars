<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Estekhdam;
use App\Http\Requests\Employe;

class sazeController extends Controller
{
  public function view()
  {
    return view('index');
  }
  public function about()
  {
  return view('about');
  }
  public function personel()
  {
  return view('personel');
  }

  public function etebar(Employe $request)
  {
    $save->namefamil=$request->namefamil;
    $save->kodemeli=$request->kodemeli;
    $save->madrak=$request->madrak;
    $save->reshte=$request->reshte;
    $save->univercity=$request->univercity;
    $save->tavalod=$request->tavalod;
    $save->mobile=$request->mobile;
    $save->tel=$request->tel;
    $save->email=$request->email;
    $save->comment=$request->comment;
    $save->image=$request->image;
    $save=new Estekhdam();
    $save->save();
   //  $id=$save->id;
   // return id;
  }
  public function estekhdam()
  {
   return view('estekhdam');
  }



}
