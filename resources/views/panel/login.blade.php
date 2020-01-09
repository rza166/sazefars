<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{{csrf_token()}}" />
        <title>@yield('title') </title>

       <!-- dropzone -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>
      <div class="">

<div class="content">

<html>
<head>
<style>
*{box-sizing: border-box;}
.container {width: 200px;}
input{
width: 100%;
padding: 10px 15px;
margin: 0 0 15px 0;
}
button{
width: 100%;
background-color: blueviolet;
color: #fff;
font-weight: bold;
padding: 10px;
}
input:focus {
background-color: yellow;
border: 2px solid cornflowerblue;
}
h2{
  text-align: center;
}
</style>
</head>
<body>
<h2> Login </h2>
<div class="container">
<form >
<label for="uname"><b>نام کاربری</b></label>
<input type="text" id="uname" name="uname" required>
<label for="psw"><b>رمز عبور</b></label>
<input type="password" id="psw" name="psw" required>
<button type="submit">ورود</button>
</form>
</div>
</body>
</html>


     </div>

      </div>

        <script type="text/javascript" src="/js/app.js"></script>
        {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
    </body>
</html>
