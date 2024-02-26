<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Imbatible 2') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <table id="inscritosTable" class="table display w-100">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Medio de pago</th>
                            <th>Soporte de pago</th>
                            <th>Confirmar inscripción</th>
                            <!-- Agrega más encabezados según tus necesidades -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inscritos as $inscrito)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $inscrito->nombre_completo }}</td>
                                <td>{{ $inscrito->correo_electronico }}</td>
                                <td>{{ $inscrito->medio_pago }}</td>
                                <td> <a href="#" class="nav-link text-primary">Descargar aquí</a> </td>
                                <td>
                                    <a href="{{ url('inscritos/'.$inscrito->id) }}" class="btn btn-primary btn-sm">Ver info completa</a>
                                    <a href="#" class="btn btn-primary btn-sm">Confirmar</a>
                                    <a href="#" class="btn btn-primary btn-sm">Cancelar</a>
                                </td>
                                <!-- Agrega más celdas según los campos que desees mostrar -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</x-app-layout>
