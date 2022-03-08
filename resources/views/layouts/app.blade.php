<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berry-ecom</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <nav class="bg-blue-50 relative sm:flex z-10">
    <div class="w-screen p-2 flex flex-wrap rounded">
      <div class="grow flex gap-[2px] items-center">
        <div class="">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="" viewBox="0 0 16 16">
            <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z"/>
          </svg>
        </div>
        <h1 class="font-bold text-2xl">
          Berry
        </h1>
      </div>
      <div id="navBtn" class="flex-none flex justify-center items-center w-8 h-auto border-2 border-gray-300 rounded hover:border-gray-500 focus:border-gray-500 mr-1 sm:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
          <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
        </svg>
      </div>
    </div>
    <div id="navItems" class="hidden w-screen sm:block sm:mr-4 text-center">
      <ul class="text-xl sm:flex sm:justify-end sm:gap-4 sm:h-full sm:items-center">
        <a href="{{ url('/') }}"><li class="py-2 border-2 border-gray-300 rounded sm:border-none ">Home</li></a>
        <a href=""><li class="py-2 border-2 border-gray-300 rounded sm:border-none ">Cart</li></a>
        @if(!session('name'))
        <a href="{{ url('/login') }}"><li class="py-2 border-2 border-gray-300 rounded sm:border-none ">Login</li></a>
        @endif
        @if(session('name'))
        <a href="{{ url('/logout') }}"><li class="py-2 border-2 border-gray-300 rounded sm:border-none ">Logout</li></a>
        @endif
        
      </ul>
    </div>
  </nav>
  @yield('body')
</body>
<script src="{{ asset('js/index.js') }}"></script>
</html>