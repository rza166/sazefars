@extends('layout')
@section('title')
ویرایش اطلاعات
@endsection
@section('content')

  <div class="a" id="error2">

  </div>

     <form class="e4" id="reset">

   @csrf

   <table align="center"  id="tblForm" cellpadding="0">

       <tr>
         <td><input type="text" id="search" value="" /></td><td>لطفا کد ملی خودرا وارد کنید</td>
       </tr>


       <tr>
      <td> <input type="reset" onclick="window.location='/'" value="بازگشت" />
        <button type="button" onclick="searchmeli()" class="button1"name="button"> ویرایش</button> </td>
       </tr>
         </table>

   </form>

@endsection
