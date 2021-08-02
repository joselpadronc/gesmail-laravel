@extends('layouts.index')

@section('title', 'GesMail - Login')

@section('content')
<section class="container flex items-center justify-around h-screen mx-auto">
  <article class="hidden p-10 bg-white rounded-xl lg:block">
    <img src="{{ asset('images/figure.png') }}" alt="Figura">
  </article>
  <div class="w-full flex flex-col items-center" style="max-width: 400px;">
    <article class="py-2 px-4 bg-white rounded-lg mb-5">
      <img src="{{ asset('images/Logo_med.png') }}" alt="Logo">
    </article>
    <article class="p-5 bg-white rounded-lg flex flex-col items-center justify-around h-full w-full">
      <h2 class="mb-10 font-semibold text-gray-700 text-2xl">Iniciar Sesión</h2>
      <form action="{{ route('login-auth') }}" method="POST" class="flex flex-col items-center w-full gap-y-4">
        @csrf
        <input
          type="email"
          class="py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-transparent w-full"
          placeholder="Email"
          id="email"
          name="email">
        <input
          type="password"
          class="py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 focus:border-transparent w-full"
          placeholder="Contraseña"
          id="password"
          name="password">

        <button type="submit" class="flex items-center gap-2 bg-green-400 py-2 px-4 font-semibold text-md text-white rounded-md mt-8 focus:outline-none focus:ring-4 focus:ring-green-300 focus:border-transparent" id="loginBtn">
          <div id="spinBtn" class='hidden spinnerBtn'></div>
          Ingresar
        </button>
      </form>
    </article>
  </div>
</section>
@endsection

@section('scripts')
<script>
  let inputEmail = document.getElementById('email');
  let inputPassword = document.getElementById('password');
  let loginBtn = document.getElementById('loginBtn');
  let spinBtn = document.getElementById('spinBtn');

  loginBtn.addEventListener('click', (event) => {
    event.preventDefault();
    if(inputEmail.value == '' || inputPassword.value == '') {
      alert('Debes llenar los campos para poder ingresar')
    }else {
      let baseUrl = document.querySelector('meta[name="base-url"]').content;
      let data = {
        email: inputEmail.value,
        password: inputPassword.value,
      }
      loginBtn.disabled = true;
      spinBtn.classList.remove('hidden')
      axios.post(`${baseUrl}login`, data)
        .then((response) => {
          if(response.data.success == true) {
            setTimeout(() => {
              spinBtn.classList.add('hidden')
              window.location.replace(baseUrl);
            }, 400);
            console.log(response.data)
          }else {
            spinBtn.classList.add('hidden')
            loginBtn.disabled = false;
            alert(response.data.message)
          }
        })
        .catch((err) => console.error(err));
    }
  });


</script>
@endsection