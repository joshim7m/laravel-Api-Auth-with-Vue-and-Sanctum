<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="max-w-7xl mx-auto rounded px-5 py-2 mt-5">
    <div>
      <h2 class="text-3xl font-medium">
        Welcome!
      </h2>
    </div>

    <div class="mt-3 flex flex-col gap-3 ">
      <a href="{{ route('home') }}">Home</a>
      <a href="{{ route('register') }}">Register</a>
      <a href="{{ route('login') }}">Login</a>
    </div>
  </div>
</body>
</html>