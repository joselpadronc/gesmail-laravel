<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="base-url" content="{{ asset('/') }}">
  <title>@yield('title')</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="icon" type="image/png" href="{{ asset('/images/favicon.png') }}">
</head>
<body class="bg-gray-100 w-screen">
  <!-- Loader -->
  <div id="loader" class="overflow-hidden z-50 absolute h-full w-full bg-gray-800 bg-opacity-80 flex flex-col items-center justify-center blur-xl">
    <img src="{{ asset('/images/Logo.png') }}" alt="Logo">
    <div class='spinner mt-5'></div>
  </div>

  <!-- App -->
  <main class="flex h-screen overflow-y-auto">
    @auth
    <!-- Menu lateral -->
    @include('components.lateral_menu')
    <!-- Modales -->
    @include('components.modal_mail')
    @include('components.modal_new_company')

    @endauth
    <div class="px-6 mb-8 lg:px-12 min-w-0 w-full flex-auto">
      <!-- Navbar -->
      @auth
        @include('components.navbar')
      @endauth
      <!-- Contenido -->
      @yield('content')
    </div>
  </main>

  <!-- scripts -->
  <script src="{{ asset(mix('js/app.js')) }}"></script>
  <script src="{{ asset(mix('js/axiosFunctions.js')) }}"></script>
  @yield('scripts')
</body>
</html>