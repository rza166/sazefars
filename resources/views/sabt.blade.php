@extends('layout')
@section('title')
استخدام
@endsection
@section('content')

  <div class="a" id="error2">

  </div>

     <form class="e4" id="reset">

       {{ csrf_field() }}


     <table align="center"  id="tblForm" cellpadding="0">
      <tr>

      <td><input type="text" id="namefamil2"   value="{{$karmand->namefamil}}"/></td>  <td>نام ونام خانوادگی</td>
       </tr>
       <tr>
         <td><input type="text" id="codemeli2" value="{{$karmand->codemeli}}" /></td><td>کدملی</td>
       </tr>
       <tr>
         <td><input type="text" id="madrak2"  value="{{$karmand->madrak}}" /></td><td>مدرک</td>
       </tr>
       <tr>
        <td><input type="text" id="reshteh2" value="{{$karmand->reshteh}}"/></td> <td>رشته</td>
       </tr>
       <tr>
         <td><input type="text" id="univercity2"  value="{{$karmand->univercity}}"/></td><td>دانشگاه محل تحصیل</td>
       </tr>
       <tr>
         <td><input type="text" id="tavalod2"  value="{{$karmand->tavalod}}"/></td><td>تاریخ تولد</td>
       </tr>
       <tr>
         <td><input type="text" id="mobile2"  value="{{$karmand->mobile}}"/></td><td>شماره همراه</td>
       </tr>
       <tr>
        <td><input type="text" id="tel2"  value="{{$karmand->tel}}"/></td> <td>تلفن</td>
       </tr>
       <tr>
         <td><input type="email" id="email2"  value="{{$karmand->email}}" /></td><td>ایمیل</td>
       </tr>
       <tr>
         <td><input type="radio" id="jensiyat2"  checked="checked" value="{{$karmand->jensiyat}}" />مرد<input type="radio" name="gn" />زن</td><td>جنسیت</td>
       </tr>
       <tr>
         <td><textarea></textarea></td> <td>توضیحات</td>
       </tr>
       <tr>
         <td><input type="text" id="image2"/></td><td>عکس مدرک</td>
       </tr>



       {{-- <tr>

         <td>&nbsp;</td><td><input type="checkbox" />I agree this form data </td>
       </tr> --}}

       <tr>
      <td> <input type="reset" onclick="window.location='/'" value="بازگشت" /> <button type="button" onclick="virayesh({{$karmand->id}})" class="button1"> ثبت</button></td>
      {{-- <button type="button"onclick="virayesh({{$karmand->id}})" class="btn btn-success a3"name="button"> ویرایش</button> --}}
       </tr>
         </table>

   </form>

@endsection
