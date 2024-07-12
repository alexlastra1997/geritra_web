@extends('layouts.app')

@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-xl">
        <section class="bg-white dark:bg-gray-900">
            <div class="mx-auto max-w-screen-sm text-center mb-8 ">
                <h2 class="m-7 text-4xl md:text-5xl tracking-tight font-extrabold text-blue-950 dark:text-white">CONTÁCTANOS</h2>
            </div>
        </section>
        
        @if (session('success'))
        <div id="alert-border-3" class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <div class="ms-3 text-sm font-medium">
            {{ session('success') }}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-3" aria-label="Close">
                <span class="sr-only">Dismiss</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>

        @endif
        
        <div class=" grid grid-cols-1 lg:grid-cols-2 gap-5">
            <section class="bg-blue-950 rounded-xl">
                <div class="py-8 px-4 mx-auto max-w-screen-xl lg:p-10 grid gap-10">
                    
                    <div class="space-y-8 grid grid-cols-1 md:grid-cols-2 lg:gap-12 md:space-y-0">
                        <div>
                            
                            <h3 class="mb-2 text-xl font-bold text-white">Teléfono</h3>
                            <p class="text-gray-400">(+593) 983 056 998</p>
                        </div>
                        <div>
                            
                            <h3 class="mb-2 text-xl font-bold text-white">Email</h3>
                            <p class="text-gray-400">gerencia@geritra.com</p>
                        </div>
                        
                    </div>
                    <div class="space-y-8 grid grid-cols-1 md:gap-12 md:space-y-0 ">
                        <div>
                            <h3 class="mb-2 text-xl font-bold text-white">Dirección</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.793338421485!2d-78.49955511542713!3d-0.2027562348565796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59a14e75d0b6b%3A0xb02936b33a96e6c2!2sCentro%20Amazonas%2C%20Gil%20R.%20D%C3%A1valos%2C%20Quito%20170143!5e0!3m2!1ses!2sec!4v1720498156222!5m2!1ses!2sec" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        
                        
                    </div>
                </div>
            </section>

            <form action="{{ route('contactos.store') }}" method="POST" >
                @csrf
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div id="alert-border-2" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                            </svg>
                            <div class="ms-3 text-sm font-medium">
                                    {{ $error }}
                            </div>
                            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-2" aria-label="Close">
                                <span class="sr-only">Dismiss</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                        </div>
                        @endforeach
                    @endif

                <div class=" grid-cols-1 grid  gap-4 m-5">

                    <div>
                        <label for="nombre_empresa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Empresa/Persona natural</label>
                        <input type="text" id="nombre_empresa" name="nombre_empresa" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Nombre empresa/persona" required>
                    </div>
                    <div>
                        <label for="numero_identificacion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">RUC/Cédula</label>
                        <input type="text" id="numero_identificacion" name="numero_identificacion" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Ingresar cédula o RUC" required>
                    </div>
                    <div>
                        <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Teléfono</label>
                        <input type="number" id="telefono" name="telefono" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="(+593)**********" required>
                    </div>
                    <div>
                        <label for="correo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">correo electrónico</label>
                        <input type="email" id="correo" name="correo" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="example@example.com" required>
                    </div>
                    <div>
                        <label for="nombre_persona" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre de la persona de contácto</label>
                        <input type="text" id="nombre_persona" name="nombre_persona" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Nombre y Apellido" required>
                    </div>
                    
                    <div>
                        <label for="fecha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fecha de posible reunión</label>
                        <input type="date" id="fecha" name="fecha" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Nombre y Apellido" required>
                    </div>
                </div>
                <button type="submit" class="  py-3 px-5 mx-5 text-sm font-medium text-center  text-white rounded-lg bg-lime-500 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Enviar</button>
            </form>
        </div>
    </div>
  </section>
@endsection