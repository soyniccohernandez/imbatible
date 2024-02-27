<style>
    .dataTables_filter {
        width: 100%;
        margin: 2rem 0;
    }

    .dataTables_filter label {
        width: 100%;
    }

    .dataTables_filter label input {
        width: 100%;
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: var(--bs-body-color);
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: var(--bs-body-bg);
        background-clip: padding-box;
        border: var(--bs-border-width) solid var(--bs-border-color);
        border-radius: var(--bs-border-radius);
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .dataTables_paginate {
        text-align: center;
        margin-top: 10px;
    }

    .dataTables_paginate a {
        display: inline-block;
        padding: 5px 10px;
        margin: 0 2px;
        text-decoration: none;
        color: #333;
        border: 1px solid #ccc;
        border-radius: 3px;
        background-color: #fff;
    }

    .dataTables_paginate a:hover {
        background-color: #f0f0f0;
    }

    .dataTables_paginate .current {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }

    .dataTables_paginate .disabled {
        pointer-events: none;
        color: #999;
    }

    .dataTables_info {
        margin: 2rem 0;
    }
</style>

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">

                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="mb-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-primary"><a href="{{route('dashboard')}}">Administración</a></li>
                        <li class="breadcrumb-item active text-primary" aria-current="page">Inscritos</li>
                    </ol>
                </nav>
                <p class="fs-1">Listado Preinscritos</p>

                <table id="inscritosTable" class="table display w-100">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Medio de pago</th>
                            <th>Soporte de pago</th>
                            <th></th>
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