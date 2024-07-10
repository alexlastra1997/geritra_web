@extends('layouts.app')

@section('content')
<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
      <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
        <h2 class="m-7 text-4xl md:text-5xl tracking-tight font-extrabold text-blue-950 dark:text-white">PLANES EMPRESARIALES</h2>
          <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Optimiza la seguridad y bienestar en tu empresa con PROTEGE SST. Nuestro sistema avanzado te permite gestionar eficientemente los riesgos laborales y garantizar un ambiente de trabajo seguro y saludable. Elige el plan que mejor se adapte a tus necesidades y comienza a proteger lo más valioso de tu organización: tu equipo. ¡Únete a PROTEGE SST hoy y da el primer paso hacia un entorno laboral más seguro!</p>
          <a href="{{ route('contactos.index') }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-lime-500 hover:bg-lime-700 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
            Contáctanos
            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
        </div>
      <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
          <!-- Pricing Card -->
          <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-blue-950 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
              <h3 class="mb-4 text-2xl font-semibold">Empresas Pequeñas</h3>
              <div class="flex justify-center items-baseline my-8">
                  <span class="mr-2 text-5xl font-extrabold text-blue-950">$100</span>
                  <span class="text-gray-500 dark:text-gray-400">/mensual</span>
              </div>
              <!-- List -->
              <ul role="list" class="mb-8 space-y-4 text-left">
                  <li class="flex items-center space-x-3">
                      <!-- Icon -->
                      <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                      <span>Hasta 49 trabajadores</span>
                  </li>
                  <li class="flex items-center space-x-3">
                      <!-- Icon -->
                      <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                      <span>Descuento para Profesionales de SST de un 20%</span>
                  </li>
              </ul>
              <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
          </div>
          <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-blue-950 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
            <h3 class="mb-4 text-2xl font-semibold">Empresas Medianas A</h3>
            <div class="flex justify-center items-baseline my-8">
                <span class="mr-2 text-5xl font-extrabold text-blue-950">$150</span>
                <span class="text-gray-500 dark:text-gray-400">/mensual</span>
            </div>
            <!-- List -->
            <ul role="list" class="mb-8 space-y-4 text-left">
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <span>De 50 a 99 trabajadores</span>
                </li>
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <span>Descuento para Profesionales de SST de un 20%</span>
                </li>
            </ul>
            <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
        </div>
        <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-blue-950 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
            <h3 class="mb-4 text-2xl font-semibold">Empresas Medianas A</h3>
            <div class="flex justify-center items-baseline my-8">
                <span class="mr-2 text-5xl font-extrabold text-blue-950">$250</span>
                <span class="text-gray-500 dark:text-gray-400">/mensual</span>
            </div>
            <!-- List -->
            <ul role="list" class="mb-8 space-y-4 text-left">
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <span>De 100 a 199 trabajadores</span>
                </li>
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <span>Descuento para Profesionales de SST de un 20%</span>
                </li>
            </ul>
            <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
        </div>

        <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-blue-950 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
            <h3 class="mb-4 text-2xl font-semibold">Empresas Grandes</h3>
            <div class="flex justify-center items-baseline my-8">
                <span class="mr-2 text-5xl font-extrabold text-blue-950">$300</span>
                <span class="text-gray-500 dark:text-gray-400">/mensual</span>
            </div>
            <!-- List -->
            <ul role="list" class="mb-8 space-y-4 text-left">
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <span>De 200 a 1000 trabajadores</span>
                </li>
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <span>+ USD 1 por trabajador sobre los 300 </span>
                </li>
            </ul>
            <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
        </div>

        <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-blue-950 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
            <h3 class="mb-4 text-2xl font-semibold">Empresas Grandes B</h3>
            <div class="flex justify-center items-baseline my-8">
                <span class="mr-2 text-5xl font-extrabold text-blue-950">$100</span>
                <span class="text-gray-500 dark:text-gray-400">/mensual</span>
            </div>
            <!-- List -->
            <ul role="list" class="mb-8 space-y-4 text-left">
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <span>De 1001 a 5000 trabajadores</span>
                </li>
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <span>+ USD 0.50 x (Trabajadores - 1000)</span>
                </li>
            </ul>
            <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
        </div>

        <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-blue-950 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
            <h3 class="mb-4 text-2xl font-semibold">Empresas Grandes C</h3>
            <div class=" justify-center block my-8">
                <span class="mr-2 text-3xl font-extrabold text-blue-950">Contactar a:</span>
                <span class="mr-2 text-2xl ">ventas@geritra.com</span>
            </div>
            <!-- List -->
            <ul role="list" class="mb-8 space-y-4 text-left">
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <span>Más de 5000 trabajadores</span>
                </li>
                <li class="flex items-center space-x-3">
                    <!-- Icon -->
                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    <span>Descuento para Profesionales de SST de un 20%</span>
                </li>
            </ul>
            <a href="#" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
        </div>
      </div>
  </div>
</section>
@endsection
