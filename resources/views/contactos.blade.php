@extends('layouts.app')

@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-xl">
        <section class="bg-white dark:bg-gray-900">
            <div class="mx-auto max-w-screen-sm text-center mb-8 ">
                <h2 class="m-7 text-4xl md:text-5xl tracking-tight font-extrabold text-blue-950 dark:text-white">CONTÁCTANOS</h2>
            </div>
        </section>
        <p class="mb-8 lg:mb-16 font-light text-gray-500 dark:text-gray-400 sm:text-xl text-justify">Gracias por ponerte en contacto con Gestión Técnica de Riesgos del Trabajo. Estaremos en contacto contigo pronto para coordinar una demostración de nuestro sistema. Esperamos colaborar en el crecimiento de tu empresa y en la mejora de su productividad, siempre enfocados en la seguridad, salud y bienestar de tus trabajadores.</p>
        
        <div class=" grid grid-cols-1 lg:grid-cols-2 gap-5">
            <section class="bg-blue-950 rounded-xl">
                <div class="py-8 px-4 mx-auto max-w-screen-xl lg:p-10 grid gap-10">
                    
                    <div class="space-y-8 grid grid-cols-1 md:grid-cols-2 lg:gap-12 md:space-y-0">
                        <div>
                            
                            <h3 class="mb-2 text-xl font-bold text-white">Teléfono</h3>
                            <p class="text-gray-400">(+593)**********</p>
                        </div>
                        <div>
                            
                            <h3 class="mb-2 text-xl font-bold text-white">Email</h3>
                            <p class="text-gray-400">geritra@geritra.com</p>
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

            <form action="#" >
            
                <div class=" grid-cols-1 grid  gap-4 m-5">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Empresa/Persona natural</label>
                        <input type="text" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Nombre empresa/persona" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">RUC/Cédula</label>
                        <input type="text" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="##########" required>
                    </div>
                    <div>
                        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Teléfono</label>
                        <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="(+593)**********" required>
                    </div>
                    <div>
                        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nombre de la persona de contácto</label>
                        <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Nombre y Apellido" required>
                    </div>
                    
                    <div class="relative max-w-sm">
                        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fecha tentativa de reunión</label>
                        <input datepicker id="default-datepicker" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="DD/MM/AAAA">
                    </div>
                </div>
                <button type="submit" class="  py-3 px-5 mx-5 text-sm font-medium text-center  text-white rounded-lg bg-lime-500 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Enviar</button>
            </form>
              

        </div>
        
    </div>
  </section>
@endsection