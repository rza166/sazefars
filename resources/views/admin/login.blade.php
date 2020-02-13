<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>صفحه ورود</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/admin/login.css">
  </head>
  <body>
    <div class="content_loginAdmin">
      <div class="content_loginAdmin2">

        <div class="headerLogin">
          خوش آمدید
        </div>
        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <div class="form-group ">
                <label for="username" class=" "> نام کاربری یا موبایل</label>

                <div class="">
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username"oninvalid="this.setCustomValidity('لطفا نام کاربری یا موبایل خود را وارد کنید ')" oninput="setCustomValidity('')" autofocus>

                    @error('username')
                      <span class="errorM" role="alert">
                          {{ $message }}
                      </span>
                    @enderror

                </div>
            </div>

            <div class="form-group ">
                <label for="password" class="">رمز عبور</label>

                <div class="">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required oninvalid="this.setCustomValidity('لطفا رمز عبور خود را وارد کنید')" oninput="setCustomValidity('')" autocomplete="current-password">

                    @error('password')
                        <span class="errorM" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group ">
                    <div class="form-check">
                      <label class="form-check-label" for="remember">
                          {{ __('مرا به یاد داشته باش ') }}
                      </label>
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    </div>
            </div>

            {{-- <div class="form-group "> --}}
                {{-- <div class=""> --}}
                    <button type="submit" class="btn btn-primary">
                        {{ __('ورود') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('رمز عبور خود را فراموش کرده ام ؟') }}
                        </a>
                    @endif
                {{-- </div> --}}
            {{-- </div> --}}
        </form>
      </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
