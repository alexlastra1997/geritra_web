@extends('layouts.app')

@section('content')

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <section class="bg-white dark:bg-gray-900">
            <div class="mx-auto max-w-screen-md text-center mb-8 ">
                <h2 class="m-7 text-5xl tracking-tight font-extrabold text-blue-950 dark:text-white">PREGUNTAS FRECUENTES (FAQ). </h2>
            </div>
        </section>        
        <div class="grid pt-8 text-left border-t border-gray-200 md:gap-16 dark:border-gray-700 md:grid-cols-2">
            <div class="mb-10">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-lime-500 dark:text-white">CENTRO DE AYUDA</h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400 text-justify">Estamos aquí para brindarte el soporte necesario en la gestión de seguridad y salud en el trabajo. Nuestro equipo de expertos está comprometido en asegurar que tengas la mejor experiencia posible con nuestro software. Ya sea que necesites asistencia técnica, tengas preguntas sobre funcionalidades específicas, o requieras orientación sobre mejores prácticas en SST, estamos listos para ayudarte. Tu seguridad y bienestar son nuestra prioridad. ¡No dudes en contactarnos!</p>
                <img class="w-full rounded-lg" src= "https://img.freepik.com/free-vector/people-ask-frequently-asked-questions_102902-2339.jpg?t=st=1720494329~exp=1720497929~hmac=2af8ea8cc69b46701e046d548cd6792bddaaaffe8313b7fa4c833b1610808632&w=1380" alt="office content 1">
            </div>
            <div class="mb-10">
                <div id="accordion-collapse" data-accordion="collapse">
                    <h2 id="accordion-collapse-heading-1">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1">
                        <span class="text-left">¿Qué funcionalidades específicas ofrece Protege para la gestión de seguridad y salud en el trabajo?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Protege tiene una enorme utilidad centrada en la gestión técnica de riesgos del trabajo, empleando la metodogía GERITRA la cual permite el despliegue de acciones de control alineadas con la norma ISO 45001:2018.</p>
                        </div>
                    </div>
        
        
                    <h2 id="accordion-collapse-heading-2">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                        <span class="text-left">¿Cómo puede Protege ayudar a nuestra empresa a cumplir con la normativa de seguridad y salud ocupacional?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Protege esta actualizado con la normativa en vigencia y facilita su cumplimiento mediante la automatización de procesos, generación de informes y reportes detallados de seguimiento de acciones correctivas, asegurando que se cumplan los estándares legales y regulatorios del país y la Comunidad Andina de Naciones.</p>
                        </div>
                    </div>
        
                    <h2 id="accordion-collapse-heading-3">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                        <span class="text-left">¿Qué medidas de seguridad y protección de datos incluye Protege para garantizar la confidencialidad de la información sensible de salud y seguridad?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                        <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Protege cuenta con robustas medidas de seguridad, como cifrado de datos, accesos controlados y cumplimiento de estándares de protección de datos personales, garantizando la seguridad y confidencialidad de la información.</p>
                        
                        </div>
                    </div>
        
                    <h2 id="accordion-collapse-heading-4">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                        <span class="text-left">¿Cómo se integra Protege con otros sistemas de gestión empresarial que ya utilizamos?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Protege está diseñado para integrarse fácilmente con sistemas ERP, CRM y otros sistemas empresariales, asegurando una gestión fluida de datos y procesos en toda la organización, cuenta con interfaces de carga de datos delos empleados</p>
                        </div>
                    </div>
        
                    <h2 id="accordion-collapse-heading-5">
                        <button type="button" class="flex items-center justify-between w-full p-5   font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-5" aria-expanded="false" aria-controls="accordion-collapse-body-5">
                        <span class="text-left">¿Qué tipo de soporte técnico y formación ofrecen con la implementación de Protege?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400 ">El módulo se encarga de la administración integral de la entrega, control y mantenimiento de la ropa de trabajo y los equipos de protección personal, adaptándose a los riesgos específicos de cada puesto. Incluye funcionalidades para la adquisición de EPP y ropa de trabajo, el registro de su entrega a los trabajadores, y la programación de inspecciones y mantenimientos necesarios. Además, asegura el cumplimiento de normas y especificaciones de seguridad basadas en los estándares exigidos por los entes de control, garantizando que todos los equipos y prendas proporcionen la protección adecuada y contribuyan a un entorno de trabajo más seguro y saludable.</p>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-6">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium   rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-6" aria-expanded="false" aria-controls="accordion-collapse-body-6">
                        <span class="text-left">¿Cuál es el tiempo estimado de implementación de Protege y cómo es el proceso de adopción en nuestra empresa?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-6">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">El tiempo de implementación de Protege varía según el tamaño de la empresa y sus  necesidades específicas. Sin embargo, nuestro proceso incluye la configuración personalizada y capacitación detallada para asegurar una transición sin contratiempos.</p>
                        </div>
                    </div>
        
                    <h2 id="accordion-collapse-heading-7">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-7" aria-expanded="false" aria-controls="accordion-collapse-body-7">
                        <span class="text-left">¿Qué beneficios específicos puede esperar mi empresa al utilizar Protege?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-7" class="hidden" aria-labelledby="accordion-collapse-heading-7">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Con Protege, su empresa experimentará mejoras significativas en la gestión de riesgos laborales, la optimización de recursos, reducción de incidentes y accidentes laborales, cumplimiento normativo eficiente, optimización del tiempo para los profesionales de la SST y un lugar o centro de trabajo más seguro y saludable para sus empleados.</p>
                        </div>
                    </div>
        
                    <h2 id="accordion-collapse-heading-8">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-8" aria-expanded="false" aria-controls="accordion-collapse-body-8">
                        <span class="text-left">¿Protege ofrece análisis y reportes para la toma de decisiones estratégicas en seguridad y salud en el trabajo?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-8" class="hidden" aria-labelledby="accordion-collapse-heading-8">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Sí, Protege proporciona análisis avanzados, reportes personalizables y cuadros de mando intuitivos que permiten evaluar el desempeño en SST y tomar decisiones informadas para mejorar continuamente las prácticas de seguridad y salud en su organización.</p>
                        </div>
                    </div>
        
                    <h2 id="accordion-collapse-heading-9">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-9" aria-expanded="false" aria-controls="accordion-collapse-body-9">
                        <span class="text-left">¿Cómo sirve PROTEGE para aumentar la confianza y lealtad de los empleados hacia la empresa?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-9" class="hidden" aria-labelledby="accordion-collapse-heading-9">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">PROTEGE fortalece la confianza y lealtad de los empleados al proporcionar un ambiente de trabajo seguro y saludable. Con herramientas avanzadas para la gestión de riesgos y la prevención de accidentes, así como por la partcipación en los procesos de gestión de seguridad y salud en el trabajo lo cual permte que aumente su compromiso con la empresa</p>
                        </div>
                    </div>
        
                    <h2 id="accordion-collapse-heading-10">
                        <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right rounded-b-xl  text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-10" aria-expanded="false" aria-controls="accordion-collapse-body-10">
                        <span class="text-left">¿De qué manera PROTEGE contribuye a la reducción del ausentismo laboral en nuestra organización?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-10" class="hidden" aria-labelledby="accordion-collapse-heading-10">
                        <div class="p-5 border rounded-b-xl border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">PROTEGE contribuye a la reducción del ausentismo laboral al identificar y controlar los riesgos en el trabajo, así como una detallada gestión de vigilancia  de la salud y la promoción de condiciones de trabajo seguras que minimizan las enfermedades y lesiones ocupacionales.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>


@endsection