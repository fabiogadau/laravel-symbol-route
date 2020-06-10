<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   
   {{-- HEADER --}}
   <header>
      <h1>Title</h1>
   </header>

   @yield('content')

   {{-- FOOTER --}}
   <footer>
      <h3>Footer</h3>
   </footer>

</body>
</html>