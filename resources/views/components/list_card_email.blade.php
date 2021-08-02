<section class="lg:-mt-12">
	<h2 class="text-2xl font-semibold text-black mb-5">Ultimos mails creados</h2>
	<div class="w-full flex flex-nowrap align-center justify-start overflow-x-auto">
		<article class="p-4 w-72 bg-white-300 shadow-md bg-white rounded-md mb-4 mx-2" style="min-width: 288px;">
			<div class="flex justify-between items-center">
				@include('icons.mail')
				<p> 01/07/2021</p>
			</div>
			<h4 class="text-black	font-semibold	text-xl mt-2 w-full truncate">Nombre del mail</h4>
			<h5 class="text-black	font-medium	text-lg mt-1 w-full truncate">Nombre de la empresa</h5>
			<a href="{{ route('detail-email') }}">
				<button type="button" class="mt-5 p-2 px-4 rounded-xl bg-green-300 font-semibold text-green-800">
					Ver más
				</button>
			</a>
		</article>
	</div>
</section>