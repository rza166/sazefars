@extends('layout')
@section('title')
استخدام
@endsection
@section('content')

  <div class="a" id="error">

  </div>

     <form class="e4" id="reset">

       {{ csrf_field() }}


     <table align="center"  id="tblForm" cellpadding="0">
      <tr>

      <td><input type="text" id="namefamil" lang='fa' onblur="validate()" name="namefamil" /></td>  <td>نام ونام خانوادگی</td>
       </tr>
       <tr>
         <td><input type="text" onkeypress='validate(event)' id="codemeli" /></td><td>کدملی</td>
       </tr>
       <tr>
         <td><input type="text" lang='fa' id="madrak" /></td><td>مدرک</td>
       </tr>
       <tr>
        <td><input type="text" id="reshteh" lang='fa' name="pass"/></td> <td>رشته</td>
       </tr>
       <tr>
         <td><input type="text" id="univercity" lang='fa' name="pass"/></td><td>دانشگاه محل تحصیل</td>
       </tr>
       <tr>
         <td><input type="text" id="tavalod" onkeypress='validate(event)' placeholder="مثال:13601010"name="pass"/></td><td>تاریخ تولد</td>
       </tr>
       <tr>
         <td><input type="text" id="mobile" onkeypress='validate(event)' placeholder="همراه با صفر" name="pass"/></td><td>شماره همراه</td>
       </tr>
       <tr>
        <td><input type="text" id="tel" lang='fa' onkeypress='validate(event)' placeholder="همراه با کد شهر" name="pass"/></td> <td>تلفن</td>
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
         <td><input type="text" id="image" name="pass"/></td><td>عکس مدرک</td>
       </tr> --}}



       {{-- <tr>

         <td>&nbsp;</td><td><input type="checkbox" />I agree this form data </td>
       </tr> --}}

       <tr>
      <td> <input type="reset"  onclick="window.location='/'" value="بازگشت" /><button type="button" onclick="etebar()" class="button1"> ثبت</button> <input type="reset" class="button" value="حذف" /></td>

       </tr>
         </table>

   </form>

 </div>
 <!-- The Modal -->
 <div class="modal" id="editmodal">
   <div class="modal-dialog">
     <div class="modal-content">



       <!-- Modal body -->
       <div class="modal-body e1">
       <span> تغییرات با موفقیت انجام شد </span>
       </div>

       <!-- Modal footer -->
       <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal">بستن</button>
       </div>


@endsection
