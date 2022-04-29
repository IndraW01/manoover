<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="{{ asset('img/logo.svg') }}" />
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="shortcut icon" href="{{asset('logo.svg')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('dist/auth/style.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>

  <body>
    <section>
      <div class="image-layer">
        <img class="gambar-layer" src="{{ asset('dist/auth/gambarKiri.svg') }}" />
      </div>

      @yield('content')

    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>
    <script src="{{ asset('dist/auth/script.js') }}"></script>

    @include('sweetalert::alert')
  </body>
</html>
