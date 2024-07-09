@extends('layouts.app')

@section('content')

    <section class="bg-white dark:bg-gray-900">
        <div class="grid grid-cols-1 max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0  lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">

                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white justify-center items-center">"PROTEGE" SOFTWARE SEGURIDAD Y SALUD OCUPACIONAL</span> </h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Simplifica y optimiza la gestión de la seguridad y salud de tus trabajadores!</p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-start sm:space-y-0">
                <a href="{{ route('contactos.index') }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-950 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Contáctanos
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                <a href="{{ route('productos') }}" class="inline-flex justify-center hover:text-white items-center py-3 px-5 sm:ms-4 text-base font-medium text-center bg-lime-500 text-white rounded-lg border border-white hover:bg-lime-300 focus:ring-4 focus:ring-gray-400">
                    Leer más
                </a>  
            </div>
            </div>
            <div class=" lg:mt-0 lg:col-span-5 lg:flex ">
                <img src="{{ asset('images/protegeweb2.png') }}" alt="mockup">
            </div>                
        </div>
    </section>


    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-900 dark:text-white">¿Quienes somos?</h2>           
                <p class="mb-8 font-light text-gray-500 sm:text-xl dark:text-gray-400">Somos una empresa comprometida con la prevención de riesgos del trabajo, nos dedicamos a proporcionar soluciones integrales y tecnológicas para la seguridad y salud ocupacional. Nuestro objetivo es transformar la manera en que las empresas gestionan sus riesgos laborales, mejorando no solo el cumplimiento normativo, sino también fomentando una cultura organizacional de prevención y bienestar.</p>
                <a href="{{ route('nosotros') }}" class="inline-flex items-center text-white bg-lime-500 hover:bg-lime-600 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                    Nosotros
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src= "https://img.freepik.com/free-photo/female-doctor-using-tablet-medical-technology_53876-104201.jpg?t=st=1720459465~exp=1720463065~hmac=5c5652324a8d62f80942a7d958100a8022ce3995b1ce556ee2db7ccc676c418f&w=740" alt="office content 1">
                <img class="mt-10 w-full lg:mt-10 rounded-lg" src="https://img.freepik.com/free-photo/serious-engineer-glasses-operating-machine_74855-5419.jpg?t=st=1720459367~exp=1720462967~hmac=3eef8a0edfb4daedd44809e3c93cbc9af02f03ff9a3eb275777e46fb0fdd5f0a&w=740" alt="office content 2">
            </div>
        </div>
    </section>

 
    <section class="bg-white dark:bg-gray-900">
        <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup.svg" alt="dashboard image">
            <img class="w-full hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup-dark.svg" alt="dashboard image">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-blue-900 dark:text-white">PROTEGE SST</h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">Nuestra principal solución es nuestro software PROTEGE, que está diseñado para simplificar y optimizar la gestión de la seguridad y salud en el trabajo, a través de sus once módulos especializados que abarcan desde la gestión técnica de riesgos hasta la documentación y cumplimiento normativo. Con PROTEGE, puedes tener la tranquilidad de que tu empresa está en conformidad con los más altos estándares de seguridad y salud en el trabajo.</p>
                <a href="{{ route('servicios') }}" class="inline-flex items-center text-white bg-lime-500 hover:bg-lime-600 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                    Nuestros Servicios
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
    </section>

  
    <section>
        <div class="w-full bg-blue-950 shadow-xl p-5 md:p-0 shadow-indigo-200 md:py-10 md:px-20 grid grid-cols-1 gap-5 lg:flex lg:justify-between md:items-center">
            <p class=" text-white"> 
            Explora nuestras soluciones y descubre cómo podemos ayudarte a crear un entorno de trabajo más seguro y saludable.
            </p>
            <a href="{{ route('precios') }}" class=" w-44 items-center text-white bg-lime-500 hover:bg-lime-600 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                Nuestros Planes
            </a>
            
        </div>
    </section>

    <section class="relative  bg-blueGray-50">
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
                background-image: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80');
                ">
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                    <div class="pr-12">
                    <h1 class="text-white font-semibold text-5xl">
                    ¿Por qué elegirnos?
                    </h1>
                    <p class="mt-4 text-lg text-gray-400">
                    Somos una empresa comprometida con la prevención de riesgos del trabajo, nos dedicamos a proporcionar soluciones integrales y tecnológicas para la seguridad y salud ocupacional. 
                    </p>
                    </div>
                </div>
                </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <section class="pb-10 bg-blueGray-200 -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lime-500">
                                    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <h6 class="text-xl font-semibold">Experiencia y Conocimiento</h6>
                                <p class="mt-2 mb-4 text-blueGray-500">
                                Nuestro equipo está compuesto por expertos en seguridad y salud ocupacional con años de experiencia en el campo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-whitep-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lime-500">
                                    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15v4m6-6v6m6-4v4m6-6v6M3 11l6-5 6 5 5.5-5.5"/>
                                    </svg>
                                </div>
                                <h6 class="text-xl font-semibold">Soluciones Personalizadas</h6>
                                <p class="mt-2 mb-4 text-blueGray-500">
                                Entendemos que cada empresa es única, por lo que adaptamos nuestras soluciones a tus necesidades específicas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lime-500">
                                    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17 20v-5h2v6.988H3V15h1.98v5H17Z"/>
                                        <path d="m6.84 14.522 8.73 1.825.369-1.755-8.73-1.825-.369 1.755Zm1.155-4.323 8.083 3.764.739-1.617-8.083-3.787-.739 1.64Zm3.372-5.481L10.235 6.08l6.859 5.704 1.132-1.362-6.859-5.704ZM15.57 17H6.655v2h8.915v-2ZM12.861 3.111l6.193 6.415 1.414-1.415-6.43-6.177-1.177 1.177Z"/>
                                    </svg>
                                </div>
                                <h6 class="text-xl font-semibold">Innovación Continua</h6>
                                <p class="mt-2 mb-4 text-blueGray-500">
                                Estamos comprometidos con la mejora constante de nuestros productos y servicios, incorporando las últimas tecnologías y mejores prácticas del sector.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>     
        </section>
    </section>
@endsection   
