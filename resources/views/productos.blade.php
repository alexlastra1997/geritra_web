@extends('layouts.app')

@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="mx-auto max-w-screen-sm text-center mb-8 ">
        <h2 class="m-7 text-5xl tracking-tight font-extrabold text-blue-950 dark:text-white">NUESTROS PRODUCTOS</h2>
    </div>
</section>

<section class="bg-white dark:bg-gray-900">
    <div class="gap-8 items-center py-8 px-5  md:mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6 ">
        <img class="w-full dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup.svg" alt="dashboard image">
        <img class="w-full hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup-dark.svg" alt="dashboard image">
        <div class="mt-4 md:mt-0">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-lime-500 dark:text-white">PROTEGE SST</h2>
            <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400 text-justify">Es una plataforma integral diseñada para la gestión de seguridad y salud en el trabajo. Este sistema avanzado facilita a las organizaciones la implementación de procesos eficaces para identificar, evaluar y controlar los riesgos laborales, cumpliendo con la normativa y estándares internacionales. "PROTEGE" no solo automatiza tareas críticas como la gestión de riesgos laborales, la salud ocupacional, las investigaciones de accidentes y el control de EPP, sino que también promueve una cultura de seguridad proactiva mediante herramientas para la capacitación, las inspecciones y el seguimiento continuo del cumplimiento normativo.</p>
            
        </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-lime-500 dark:text-white">MÓDULOS PROTEGE SST</h2>

        <div id="accordion-collapse" data-accordion="collapse">
            <h2 id="accordion-collapse-heading-1">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                <span class="text-left">1. Gestión Técnica de Riesgos del trabajo</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Módulo enfocado en la identificación de peligros, evaluación y control de los riesgos laborales aplicando la Matriz GERITRA (Gestión de Riesgos del Trabajo), una herramienta técnica esencial para la gestión de la seguridad y salud ocupacional. Este módulo establece un mecanismo eficaz para identificar los factores de riesgo en los puestos de trabajo y evaluarlos a través de los índices, de personas expuestas, capacitaciones, controles existentes y exposición al riesgo, proponiendo controles jerarquizados en base a la norma ISO 45001:2018. El módulo asegura una mejora continua en la gestión de riesgos laborales. Este enfoque integral no solo garantiza el cumplimiento de normativas y estándares de seguridad, sino que también fomenta una cultura organizacional de prevención y cuidado de la salud laboral.</p>
                </div>
            </div>


            <h2 id="accordion-collapse-heading-2">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                <span class="text-left">2. Gestión de la Salud Ocupacional</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Este módulo está diseñado para gestionar integralmente la salud de los trabajadores. Incluye la administración de exámenes médicos ocupacionales iniciales, periódicos, de salida y de reintegro a la organización, permitiendo un seguimiento exhaustivo de enfermedades ocupacionales y programas de vigilancia epidemiológica. Mantiene un registro detallado de la historia clínica ocupacional de cada empleado, conforme a los requisitos establecidos por el Ministerio de Salud Pública. Este módulo facilita la programación de citas presenciales o telemáticas, la emisión de certificados de salud laboral, y la generación de recetas electrónicas. Además, abarca el control del embarazo, el manejo de enfermedades críticas, el control de inmunizaciones y la elaboración de estadísticas sobre salud y morbilidad común y ocupacional, proporcionando una visión completa y precisa del estado de salud de la fuerza laboral.</p>
                </div>
            </div>


            <h2 id="accordion-collapse-heading-3">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                <span class="text-left">3. Gestión de la Investigación de Accidentes y Enfermedades</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-500 dark:text-gray-400">El módulo facilita el proceso sistemático de investigación de incidentes y accidentes laborales, así como la presunción de enfermedades ocupacionales. Permite a los jefes, supervisores de área y médicos ocupacionales iniciar la investigación mediante un proceso estandarizado conforme a las exigencias de los órganos de control. Proporciona herramientas y formatos para documentar de manera detallada cada incidente, identificar las causas raíz, desarrollar y ejecutar planes de acción correctiva, y realizar un seguimiento riguroso de su implementación para prevenir recurrencias. Este enfoque integral asegura que todas las etapas del proceso de investigación se realicen con precisión y eficiencia, hasta su reporte al ente asegurador y el desarrollo del informe final.</p>
                
                </div>
            </div>

            <h2 id="accordion-collapse-heading-4">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-4" aria-expanded="true" aria-controls="accordion-collapse-body-4">
                <span class="text-left">4. Gestión de EPP y Ropa de Trabajo</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <p class="mb-2 text-gray-500 dark:text-gray-400">El módulo se encarga de la administración integral de la entrega, control y mantenimiento de la ropa de trabajo y los equipos de protección personal, adaptándose a los riesgos específicos de cada puesto. Incluye funcionalidades para la adquisición de EPP y ropa de trabajo, el registro de su entrega a los trabajadores, y la programación de inspecciones y mantenimientos necesarios. Además, asegura el cumplimiento de normas y especificaciones de seguridad basadas en los estándares exigidos por los entes de control, garantizando que todos los equipos y prendas proporcionen la protección adecuada y contribuyan a un entorno de trabajo más seguro y saludable.</p>
                </div>
            </div>

            <h2 id="accordion-collapse-heading-5">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-5" aria-expanded="true" aria-controls="accordion-collapse-body-5">
                <span class="text-left">5. Control de Actos y Condiciones Subestándar</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <p class="mb-2 text-gray-500 dark:text-gray-400">El módulo se encarga de la administración integral de la entrega, control y mantenimiento de la ropa de trabajo y los equipos de protección personal, adaptándose a los riesgos específicos de cada puesto. Incluye funcionalidades para la adquisición de EPP y ropa de trabajo, el registro de su entrega a los trabajadores, y la programación de inspecciones y mantenimientos necesarios. Además, asegura el cumplimiento de normas y especificaciones de seguridad basadas en los estándares exigidos por los entes de control, garantizando que todos los equipos y prendas proporcionen la protección adecuada y contribuyan a un entorno de trabajo más seguro y saludable.</p>
                </div>
            </div>

            <h2 id="accordion-collapse-heading-6">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-6" aria-expanded="true" aria-controls="accordion-collapse-body-6">
                <span class="text-left">6. Gestión de Permisos de Trabajo para actividades críticas</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-6">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Administra los permisos necesarios para actividades críticas o de alto riesgo, asegurando que se cumplan todos los requisitos de seguridad antes de su ejecución. Este módulo incluye herramientas para la solicitud, aprobación y seguimiento de permisos por un período definido, garantizando una doble revisión de los controles de seguridad. Además, facilita la coordinación entre los distintos departamentos involucrados en el proceso sistemático de aprobación, seguimiento y ejecución, asegurando así que las condiciones de trabajo sean seguras y se reduzcan los índices de accidentalidad y morbilidad laboral. Esta gestión integral optimiza la eficiencia operativa y el cumplimiento normativo.</p>
                </div>
            </div>

            <h2 id="accordion-collapse-heading-7">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-7" aria-expanded="true" aria-controls="accordion-collapse-body-7">
                <span class="text-left">7. Gestión de Inspecciones  </span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-7" class="hidden" aria-labelledby="accordion-collapse-heading-7">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Este módulo, derivado de la gestión técnica de riesgos, facilita la planificación, ejecución y seguimiento de inspecciones de seguridad en el lugar de trabajo. Permite registrar hallazgos, generar informes y asignar responsabilidades para corregir no conformidades, además de monitorear la implementación de acciones correctivas. Incluye el registro de las listas de verificación para diferentes tipos de inspecciones, garantizando un enfoque sistemático y exhaustivo. Además, facilita el monitoreo continuo de las acciones mediante la generación de un tablero de control, que proporciona estadísticas de cumplimiento semaforizado para una evaluación visual rápida y efectiva del estado de las inspecciones.</p>
                </div>
            </div>

            <h2 id="accordion-collapse-heading-8">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-8" aria-expanded="true" aria-controls="accordion-collapse-body-8">
                <span class="text-left">8. Gestión de la Capacitaciones de SST</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-8" class="hidden" aria-labelledby="accordion-collapse-heading-8">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Este módulo, derivado de la gestión técnica de riesgos, centraliza todas las actividades relacionadas con la capacitación e información en seguridad y salud en el trabajo. Facilita la planificación y programación de cursos, el registro preciso de la asistencia, y la notificación electrónica automatizada para asegurar la participación efectiva de los empleados. Además, permite un seguimiento detallado de la ejecución de cada sesión de capacitación, incluyendo la evaluación del aprendizaje y la generación de certificados correspondientes. Este módulo también genera informes completos sobre el cumplimiento de los requisitos de capacitación para cada empleado, asegurando que todos estén debidamente formados y actualizados en seguridad laboral.</p>
                </div>
            </div>

            <h2 id="accordion-collapse-heading-9">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-9" aria-expanded="true" aria-controls="accordion-collapse-body-9">
                <span class="text-left">9. Gestión de Documentación de SST</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-9" class="hidden" aria-labelledby="accordion-collapse-heading-9">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Se encarga de organizar de manera eficiente y controlar toda la documentación relacionada con la seguridad y salud en el trabajo. Esto incluye políticas, procedimientos, registros y normativas pertinentes. El sistema facilita el acceso rápido y seguro a los documentos actualizados, asegurando que todos los empleados tengan la información más reciente y relevante para cumplir con las normativas de SST. Además, permite la distribución adecuada de documentos clave a través de herramientas de gestión documental avanzadas, asegurando la integridad y disponibilidad de la documentación crítica en todo momento. Este enfoque sistemático no solo mejora la eficiencia operativa al reducir el tiempo dedicado a la búsqueda de información, sino que también fortalece el cumplimiento normativo y promueve una buena cultura organizacional.</p>
                </div>
            </div>

            <h2 id="accordion-collapse-heading-10">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-10" aria-expanded="true" aria-controls="accordion-collapse-body-10">
                <span class="text-left">10. Gestión de Organismos Paritarios de SST</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-10" class="hidden" aria-labelledby="accordion-collapse-heading-10">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <p class="mb-2 text-gray-500 dark:text-gray-400">El módulo, administrado por los miembros del organismo paritario según el número de trabajadores por centro de trabajo, facilita la gestión integral de estos organismos, asegurando su conformación reglamentaria y el control de indicadores del programa anual de trabajo. Proporciona herramientas para la planificación de reuniones, el registro de actas, el seguimiento de acuerdos y la evaluación de la eficacia de las acciones implementadas. Promueve la participación de los trabajadores, garantizando la representación de los diferentes regímenes laborales, y almacena toda la documentación generada, cumpliendo con la normativa vigente. Además, genera el acta anual de cumplimiento exigida por el organismo de control.</p>
                </div>
            </div>

            <h2 id="accordion-collapse-heading-11">
                <button type="button" class="flex items-center justify-between w-full rounded-b-xl p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-11" aria-expanded="true" aria-controls="accordion-collapse-body-11">
                <span class="text-left">11. Gestión de Documentación de SST</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-11" class="hidden" aria-labelledby="accordion-collapse-heading-11">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Se encarga de organizar de manera eficiente y controlar toda la documentación relacionada con la seguridad y salud en el trabajo. Esto incluye políticas, procedimientos, registros y normativas pertinentes. El sistema facilita el acceso rápido y seguro a los documentos actualizados, asegurando que todos los empleados tengan la información más reciente y relevante para cumplir con las normativas de SST. Además, permite la distribución adecuada de documentos clave a través de herramientas de gestión documental avanzadas, asegurando la integridad y disponibilidad de la documentación crítica en todo momento. Este enfoque sistemático no solo mejora la eficiencia operativa al reducir el tiempo dedicado a la búsqueda de información, sino que también fortalece el cumplimiento normativo y promueve una buena cultura organizacional.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="bg-white dark:bg-gray-900">
    <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-lime-500 dark:text-white">BENEFICIOS DEL SOFTWARE</h2>
            <ol class="relative border-s border-gray-200 dark:border-gray-700 mx-5">                  
                <li class="mb-10 ms-4">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                    <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400 text-justify">PROTEGE ofrece beneficios significativos para la gestión integral de seguridad y salud en el trabajo. Permite a las organizaciones identificar, evaluar y controlar eficazmente los riesgos laborales, asegurando el cumplimiento normativo y estándares de seguridad específicos.</p>
                </li>
                <li class="mb-10 ms-4">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                    <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400 text-justify">Optimiza la administración de la salud ocupacional de los empleados, gestionando de manera eficiente exámenes médicos, historias clínicas y programas de vigilancia epidemiológica.</p>
                </li>
                <li class="mb-10 ms-4">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                    <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400 text-justify">Proporciona herramientas para la investigación detallada de accidentes y enfermedades laborales, lo que permite identificar las causas raíz y desarrollar planes de acción correctiva efectivos.</p>
                </li>
                <li class="mb-10 ms-4">
                    <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                    <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400 text-justify">Centraliza la planificación, ejecución y seguimiento de inspecciones de seguridad en el lugar de trabajo, permitiendo la identificación oportuna de no conformidades y la implementación de acciones correctivas necesarias.</p>
                </li>
                
            </ol>
        </div>
        <div class="video-responsive">
            <iframe src="https://www.youtube.com/embed/rt9YYhNiE9g?si=0wdARJv9fs51bwNG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <style>
            .video-responsive {
                position: relative;
                padding-bottom: 56.25%; /* Relación de aspecto 16:9 */
                height: 0;
                overflow: hidden;
                max-width: 100%;
                background: #000;
            }

            .video-responsive iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border: 0;
            }
        </style>

    </div>
</section>


@endsection