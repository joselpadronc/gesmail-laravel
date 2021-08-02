<div class="fixed pin z-50 overflow-auto bg-gray-800 bg-opacity-40 hidden flex w-full h-full" id="containerModalNewCompany">
  <article class="relative p-8 bg-white w-full max-w-md m-auto flex-col flex rounded-xl">
    <button
      class="z-10 absolute right-0 top-0 p-2 rounded-full h-8 w-8 bg-red-400 text-white flex items-center justify-center -mt-2 -mr-2"
      id="closeModalCompany"
    >&#10005;</button>
    <form
      action="{{ route('new-company') }}"
      method="POST"
      class="w-full flex flex-col items-center justify-center"
    >
      <h2 class="text-2xl font-semibold text-gray-700 text-center mb-8">Crear nueva empresa</h2>
      @csrf
      <input type="text"
        placeholder="Ingresar nombre"
        class="py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-transparent w-full"
        name="nameCompany"
        id="nameCompany"
      >
      <button type="submit" class="flex items-center gap-2 bg-green-400 py-2 px-4 font-semibold text-md text-white rounded-md mt-10 focus:outline-none focus:ring-4 focus:ring-green-300 focus:border-transparent" id="newCompanyBtn">
        <div id="spinBtnCompany" class='hidden spinnerBtn'></div>
        Guardar
      </button>
    </form>
  </article>
</div>