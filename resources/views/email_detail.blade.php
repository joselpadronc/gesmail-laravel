@extends('layouts.index')

@section('title', 'GesMail - Detalle Email')

@section('content')
<section class="container flex-col flex items-center justify-start mt-10 pb-5 h-auto mx-auto">
  <article class="bg-white w-full py-4 px-6 flex flex-col align-start gap-x-8 rounded-lg sm:flex-row" style="max-width:725px">
    <img src="{{asset('images/img_ejem.png')}}" alt="Imagen Email">
    <div class="flex flex-col align-items justify-between py-2">
      <h2 class="font-semibold text-gray-700 text-2xl mb-8 mt-2 sm:mb-0 sm:mt-2">Nombre Email</h2>
      <div class="mb-8 sm:mb-0">
        <h4><strong class="text-gray-700">Para:</strong> Nombre empresa</h4>
        <h4><strong class="text-gray-700">Maquetado por:</strong> Nombre usuario</h4>
      </div>
      <div class="mb-8 sm:mb-0">
        <p><strong class="text-gray-700">Creado:</strong> 10/07/2021</p>
        <a href="#" class="font-semibold text-blue-500 underline">Link del archivo</a>
      </div>
      <div class="flex items-center gap-x-5">
        <button class="w-40	flex items-center justify-center gap-x-2 py-2 px-5 bg-red-400 text-white rounded-lg">@include('icons.pencil') Editar</button>
        <button class="w-40	flex items-center justify-center gap-x-2 py-1 px-5 border-4 border-red-400 rounded-lg text-gray-800">@include('icons.trash') Eliminar</button>
      </div>
    </div>
  </article>
</section>
@endsection