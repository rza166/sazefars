@extends('layout')
@section('title')
استخدام
@endsection
@section('content')


     <form class="e4" id="reset">
       <div class="" id="error">

       </div>
       {{ csrf_field() }}


     <table align="center"  id="tblForm" cellpadding="0">
       <tr>
      <td><input type="text" id="name" name="fname" /></td>  <td>نام ونام خانوادگی</td>
       </tr>
       <tr>
         <td><input type="text" id="codemeli" /></td><td>کدملی</td>
       </tr>
       <tr>
         <td><input type="text" id="madrak" /></td><td>مدرک</td>
       </tr>
       <tr>
        <td><input type="text" id="reshteh" name="pass"/></td> <td>رشته</td>
       </tr>
       <tr>
         <td><input type="text" id="univercity" name="pass"/></td><td>دانشگاه محل تحصیل</td>
       </tr>
       <tr>
         <td><input type="text" id="tavalod" name="pass"/></td><td>تاریخ تولد</td>
       </tr>
       <tr>
         <td><input type="text" id="mobile" name="pass"/></td><td>شماره همراه</td>
       </tr>
       <tr>
        <td><input type="text" id="tel" name="pass"/></td> <td>تلفن</td>
       </tr>
       <tr>
         <td><input type="email" id="email" name="cpass" /></td><td>ایمیل</td>
       </tr>
       <tr>
         <td><input type="radio" id="jensiyat" name="gn" checked="checked" />مرد<input type="radio" name="gn" />زن</td><td>جنسیت</td>
       </tr>
       <tr>
         <td><textarea></textarea></td> <td>توضیحات</td>
       </tr>



       {{-- <tr>

         <td>&nbsp;</td><td><input type="checkbox" />I agree this form data </td>
       </tr> --}}

       <tr>
      <td> <input type="reset" onclick="window.location='/'" value="بازگشت" /><button type="button" onclick="etebar()" class="btn btn-success a3"name="button"> ثبت</button> <input type="reset" value="حذف" /></td>
       </tr>
         </table>

   </form>


@endsection
