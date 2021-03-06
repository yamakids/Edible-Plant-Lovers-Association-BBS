<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>食用植物愛好会</title>
</head>
<body>
    <header class="navbar navbar-dark bg-dark">
      <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
          <a href="{{ url('/login') }}" class="text-sm text-gray-700 underline">Login</a>

          <a href="{{ url('/register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
      </div>
      <link
          rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous"
      >
        <div class="container">
            <a class="navbar-brand" href="{{ url('') }}">
              食用植物愛好会
            </a>
        </div>
    </header>

    <div>
      @yield('content')
    </div>

      @livewireScripts
</body>
</html>
