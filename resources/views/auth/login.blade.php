@extends('layouts/app')

@section('content')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="{{ asset('assets/logo.jfif') }}"
                                             style="width: 250px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Transportes Internacional S.A</h4>
                                    </div>

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="row mb-3">

                                            <label for="email" class="col-md-4 col-form-label text-md-end"  >{{ __('Correo') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-outline mb-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>




                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-outline mb-4 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Recordar contraseña') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" >{{ __('Ingresar') }}</button>
                                            @if (Route::has('password.request'))
                                                <a class="text-muted" href="{{ route('password.request') }}">Restaurar contraseña</a>
                                            @endif
                                        </div>


                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2"></p>
                                       <a href="{{ route('register') }}" class="btn btn-outline-danger">Registrarse</a>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
