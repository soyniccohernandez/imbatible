<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Imbatible 2') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="card">
                    <div class="card-header">Detalles del Inscrito</div>

                    <div class="card-body">
                        <p><strong>Nombre:</strong> {{ $inscrito->nombre_completo }}</p>
                        <p><strong>Correo Electrónico:</strong> {{ $inscrito->correo_electronico }}</p>
                        <p><strong>Número de Celular:</strong> {{ $inscrito->numero_celular }}</p>
                        <!-- Agrega más detalles según los campos que desees mostrar -->

                        <!-- Puedes agregar más estilos o elementos de Bootstrap según tus necesidades -->
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
