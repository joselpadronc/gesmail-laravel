<aside class="hidden fixed z-40 inset-0 flex-none bg-gray-800 rounded-r-xl h-full w-64 flex justify-center lg:block lg:sticky" id="lateralMenu">
    <nav class="p-4">
      <button id="hideMenu" class="text-white lg:hidden">@include('icons.menu')</button>
      <a href="/">
        <img src="{{ asset('/images/Logo.png') }}" alt="Logo" class="mb-5 mt-2">
      </a>
      <h4 class="text-white font-bold mb-2 mt-16">Links Plataforma</h4>
      <button class="text-white flex p-2 flex items-center gap-2" id="showModalNewMail">
        @include('icons.add_email')Nuevo Mail
      </button>
      <button class="text-white flex p-2 flex items-center gap-2" id="showModalNewCompany">
        @include('icons.add_company')Nuevo Empresa
      </button>
      <a href="#" class="text-white flex p-2 flex items-center gap-2">
        @include('icons.info')Detalle de totales
      </a>

      <h4 class="text-white font-bold mb-2 mt-16">Links Externos</h4>
      <a href="#" class="text-white flex p-2 underline">Repositorio GitLab</a>
      <a href="#" class="text-white flex p-2 underline">Repositorio ImgBB</a>
      <a href="#" class="text-white flex p-2 underline">Diseños Figma</a>
    </nav>
</aside>
