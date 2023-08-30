@extends('layouts.app')

@section('content')


<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <div class="logotitulo">
    <h2 class="active ">Iniciar sesion</h2>
    </div>
    <!-- Icon -->
    <div class="fadeIn first logotitulo">
      <img src="images/logoo.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}">
    @csrf
    <label for="email">Correo electrónico</label>
    <input id="email" type="email" class="form-control fadeIn second @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label for="password">Contraseña</label>
    <input id="password" type="password" class="marginform fadeIn third form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <label for="password-confirm">Confirmar contraseña</label>
    <input id="password-confirm" type="password" class="form-control fadeIn third marginform" name="password_confirmation" required autocomplete="new-password">

                            <div class="logotitulo">
                                <button type="submit" class="btn  fadeIn fourth marginform">
                                {{ __('Login') }}
                                </button>
                            </div>


    </form>



  </div>
</div>
@endsection
