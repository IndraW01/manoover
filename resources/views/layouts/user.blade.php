



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('dist/user/style.css') }}" />
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="shortcut icon" href="{{asset('logo.svg')}}">
    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}">
  </head>
  <body>

    @yield('content')

    <div class="wrapAnimasi">
     <img src="{{ asset('dist/user/image/ikan.svg') }}" alt="" />
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset("js/time/jquery.countdown.js")}}"></script>
    <script src="{{asset("js/time/script.js")}}"></script>
    <script src="{{asset("dist/user/script.js")}}"></script>
    <script src="{{ asset('toastr/toastr.min.js') }}"></script> 

  </body>
</html>
