@extends('layouts.index')

@section('title', 'GesMail')

@section('content')
@include('components.list_card_email')
<section class="mt-12 flex flex-wrap justify-start items-start gap-5 pb-8">
	<div class="w-full" style="max-width: 800px">
		<h2 class="text-2xl font-semibold text-black mb-5">Lista de mails hechos</h2>
		<div class="overflow-x-auto pb-2">
			<article class="bg-white rounded-xl py-4 px-8 flex items-center justify-between mb-5" style="width: 800px">
				<h2 class="font-semibold text-center text-gray-800">Nombre</h2>
				<h2 class="font-semibold text-center text-gray-800">Empresa</h2>
				<h2 class="font-semibold text-center text-gray-800">Usuario</h2>
				<h2 class="font-semibold text-center text-gray-800">Fecha</h2>
				<h2 class="font-semibold text-center text-gray-800">Accion</h2>
			</article>
			<article class="bg-white rounded-xl py-1 px-8 flex items-center justify-between border-2 border-blue-400 mt-2"  style="width: 800px">
				<h4 class="text-center text-gray-900">Nombre email</h4>
				<h4 class="text-center text-gray-900">Nombre empresa</h4>
				<h4 class="text-center text-gray-900">Nombre usuario</h4>
				<h4 class="text-center text-gray-900">10/07/2021</h4>
				<div class="flex items-center justify-center gap-x-2">
					<a href="#" class="p-2 bg-red-400 rounded-lg text-white">@include('icons.pencil')</a>
					<a href="{{route('detail-email')}}" class="p-2 bg-green-500 rounded-lg text-white">@include('icons.view')</a>
				</div>
			</article>
		</div>
	</div>
  <div>
		<h2 class="text-2xl font-semibold text-black mb-5">Mes: Julio</h2>
		<article class="w-48 p-4 bg-white flex flex-col align-items justify-center text-center rounded-xl">
			<div>
				<h4 class="text-black text-md">Total del mes</h4>
				<h2 class="text-gray-800 text-xl font-semibold">20</h2>
				<h4 class="text-gray-500 text-md">Templates</h4>
			</div>
			<div class="border-b-4 my-2 border-indigo-600 divide-dashed"></div>
			<div>
				<h4 class="text-black text-md">Total por usuario</h4>
				<h4 class="text-gray-800 text-md my-1 mt-2">10 mails</h4>
				<h5 class="text-gray-500 text-sm">Por: Pedrito Perez</h5>
			</div>
		</article>
	</div>
</section>
@endsection

