<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>{{ $title ?? config('app.name') }}</title>
 <link rel="stylesheet" href="{{ asset('dist/all/all.css') }}" />
</head>
<body>
 <div class="containerSuccess">
  @yield('content')
 </div>
</body>
</html>