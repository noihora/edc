<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Rese') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('css/app.css') }}" defer></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
    <header class="flex h-20 items-center border-y-2 p-6">
    <nav>
      <button id="button" type="button" class="fixed top-6 right-6 z-10">
        <i id="bars" class="fa-solid fa-bars fa-2x"></i>
        <i id="xmark" class="fa-solid fa-xmark fa-2x hidden text-white"></i>
      </button>
      <ul id="menu" class="fixed top-0 left-0 z-0 w-full translate-x-full bg-blue-500 text-center text-xl font-bold text-white transition-all ease-linear">
        <li class="p-3"><a href="">Home</a></li>
        <li class="p-3"><a href="">Registration</a></li>
        <li class="p-3"><a href="">Login</a></li>
      </ul>
      <script>
      button.addEventListener('click', event => {
        bars.classList.toggle('hidden')
        xmark.classList.toggle('hidden')
        menu.classList.toggle('translate-x-full')
      });
    </script>
    </nav>
    <h1 class="text-2xl">Rese</h1>
    </header>
    <main>
    
  </main>  
    <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
