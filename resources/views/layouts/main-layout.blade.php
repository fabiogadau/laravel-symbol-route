<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>First Laravel site</title>
   {{-- Font --}}
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap">
   {{-- Style --}}
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
   
   {{-- HEADER --}}
   <header>
      <h1>First Laravel site</h1>
   </header>

   @yield('content')

   <div class="footer-push"></div>

   {{-- FOOTER --}}
   <footer>
      <h3>Footer</h3>
   </footer>

</body>
</html>