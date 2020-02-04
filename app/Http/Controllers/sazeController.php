<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estekhdam;
use App\Http\Requests\Employe;
use App\Http\Requests\Virayesh;

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
    $save=new Estekhdam();
    $save->namefamil=$request->namefamil;
    $save->codemeli=$request->codemeli;
    $save->madrak=$request->madrak;
    $save->reshteh=$request->reshteh;
    $save->univercity=$request->univercity;
    $save->tavalod=$request->tavalod;
    $save->mobile=$request->mobile;
    $save->tel=$request->tel;
    $save->email=$request->email;
    $save->comment=$request->comment;
    $save->image=$request->image;
    $save->save();
    $id=$save->id;
   return $id;
  }

  public function virayesh(Virayesh $request)
  {
   $edit= Estekhdam::find($request->id);
   $edit->codemeli=$request->codemeli;
   $edit->namefamil=$request->namefamil;
   $edit->madrak=$request->madrak;
   $edit->reshteh=$request->reshteh;
   $edit->univercity=$request->univercity;
   $edit->tavalod=$request->tavalod;
   $edit->mobile=$request->mobile;
   $edit->tel=$request->tel;
   $edit->email=$request->email;
   $edit->comment=$request->comment;
   $edit->image=$request->image;
   $edit->save();
  }
  public function sabt(Request $request)
  {
   $id=$request->id;
   $karmand=Estekhdam::find($id);
  return view('sabt',compact('karmand'));
  }


  public function estekhdam()
  {
   return view('estekhdam');
  }
  public function search()
  {
   return view('search');
  }
  public function searchmeli(Request $request)
  {
    $codemeli=$request->codemeli;
    $codemeli2=Estekhdam::where('codemeli',$codemeli)->first();
      if(!empty($codemeli2->id)){
    return $codemeli2->id ;
  }
  else {
    $error='کد ملی وجود نداشت';
      return response()->json(['errors' => ['no_codmeli' => [$error]]],422);

  }
}
}//end class
