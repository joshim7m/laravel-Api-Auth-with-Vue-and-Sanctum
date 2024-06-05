<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  @include('layout.header')

  <div class="max-w-7xl mx-auto rounded px-5 py-2 mt-5">
    @yield('content')
  </div>

</body>
</html>