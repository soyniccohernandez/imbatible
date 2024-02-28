<x-app-layout>

    @isset($success)

        <script>
            Swal.fire({
                title: 'Inscripción Imbatible',
                text: ' {{ $success }}',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            })
        </script>

        @endif

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="container">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="mb-5">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item text-primary"><a href="{{ route('dashboard') }}">Administración</a>
                            </li>
                            <li class="breadcrumb-item text-primary" aria-current="page"><a href="/inscritos">Inscritos</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $inscrito->nombre_completo }}</li>
                        </ol>
                    </nav>
                    <div class="card p-5">
                        <div class="card-body d-flex flex-column gap-3">
                            <span class="d-flex justify-content-between  align-items-center">
                                <p class="fs-1">Datos personales</p>
                                <span>
                                    <a href="{{ route('desinscribir', $inscrito) }}" class="btn btn-danger">
                                        <i class="fa-solid fa-hand-point-left"></i>
                                        Mover a preinscritos</a>
                                </span>
                            </span>

                            <p class="fs-4">{{ $inscrito->nombre_completo }}</p>
                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Tipo identificación</span>
                                <span>{{ $inscrito->tipo_identificacion }}</span>
                            </span>
                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Número de identificación</span>
                                <span>{{ $inscrito->numero_identificacion }}</span>
                            </span>
                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Fecha de nacimiento</span>
                                <span>{{ $inscrito->fecha_nacimiento }}</span>
                            </span>
                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Edad</span>
                                <span>{{ $inscrito->edad }}</span>
                            </span>
                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Genero</span>
                                <span>{{ $inscrito->genero }}</span>
                            </span>
                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Correo electrónico</span>
                                <span>{{ $inscrito->correo_electronico }}</span>
                            </span>
                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Teléfono celular</span>
                                <span>{{ $inscrito->numero_celular }}</span>
                            </span>
                            <hr class="my-5">
                            <p class="fs-1">Datos de pago</p>
                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Medio de pago</span>
                                <span>{{ $inscrito->medio_pago }}</span>
                            </span>
                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Soporte de pago</span>
                                <span>{{ $inscrito->soporte_pago }}</span>
                            </span>
                            <hr class="my-5">
                            <p class="fs-1">Datos de evento</p>
                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Contacto de emergencia</span>
                                <span>{{ $inscrito->contacto_emergencia }}</span>
                            </span>
                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Teléfono de contacto en caso de emergencia</span>
                                <span>{{ $inscrito->telefono_contacto_emergencia }}</span>
                            </span>
                            <span class="d-flex justify-content-between  align-items-center">
                                <span>EPS</span>
                                <span>{{ $inscrito->eps }}</span>
                            </span>

                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Usuario Instagram</span>
                                <span>{{ $inscrito->usuario_instragram }}</span>
                            </span>
                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Perfil Strava</span>
                                <span>{{ $inscrito->perfil_strava }}</span>
                            </span>
                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Tipo cicla</span>
                                <span>{{ $inscrito->tipo_cicla }}</span>
                            </span>
                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Distancia recorrida</span>
                                <span>{{ $inscrito->distrancia_recorrida }}</span>
                            </span>

                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Talla Hombre</span>
                                <span>{{ $inscrito->talla_hombre }}</span>
                            </span>
                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Tallar Mujer</span>
                                <span>{{ $inscrito->talla_mujer }}</span>
                            </span>
                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Exhoneración</span>
                                <span>{{ $inscrito->exhoneracion }}</span>
                            </span>
                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Estado inscripción</span>
                                <span>{{ $inscrito->estado_inscripcion }}</span>
                            </span>
                            <span class="d-flex justify-content-between  align-items-center">
                                <span>Registrado</span>
                                <span>{{ $inscrito->created_at }}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </x-app-layout>
