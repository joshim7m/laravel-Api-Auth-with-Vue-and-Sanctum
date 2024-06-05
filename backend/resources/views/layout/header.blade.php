<header class="shadow rounded">
  <div class="max-w-7xl mx-auto h-16 px-5 py-2 flex items-center">
      <div class="flex items-center gap-3">
        <a href="/">Home</a>

        @guest
        <a href="{{ route('register') }}">Register</a>
        <a href="{{ route('login') }}">Login</a>
        @endguest

        @auth
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <button>Logout</button>
          </form>
        @endauth
      </div>
  </div>
</header>