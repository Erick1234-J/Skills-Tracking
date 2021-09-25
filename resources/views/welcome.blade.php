
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-gray-50">
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
      <span class="block">Hey There! </span>
      <span class="block">I"m Erick Njekwa</span>
      <span class="block">Welcome To Skills Portifilio</span>
      <span class="block text-indigo-600">Sign Up or Login.</span>
    </h2>
    @if (Route::has('login'))
    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
      @auth
        <div class="inline-flex rounded-md shadow">
            <a href="{{ url('/dashboard') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
              Dashboard
            </a>
          </div><br><br>
          @else 
       <div class="ml-3 inline-flex rounded-md shadow">
            <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
              Login
            </a> 
       </div>
         @if (Route::has('register'))
      <div class="inline-flex rounded-md shadow">
        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
          Register
        </a>
      </div>
      @endif
      </div>
      @endauth
    </div>
    @endif
  </div> 
          
</body>

