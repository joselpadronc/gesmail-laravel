<header>
  <nav class="container flex items-center justify-between py-5">
    <button id="showMenu" class="text-black lg:hidden">@include('icons.menu')</button>
    <div class="hidden w-10 lg:block"></div>
    <a href="{{ route('logout') }}" class="flex items-center gap-2 text-red-600">Cerrar sesion @include('icons.logout')</a>
  </nav>
</header>