<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="mb-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item text-primary"><a href="{{route('dashboard')}}">Administración</a></li>
                        <li class="breadcrumb-item text-primary" aria-current="page"><a href="/preinscritos">Preinscritos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $preinscrito->nombre_completo }}</li>
                    </ol>
                </nav>
                <div class="card p-5">
                    <div class="card-body d-flex flex-column gap-3">
                        <span class="d-flex justify-content-between  align-items-center">
                            <p class="fs-1">Datos personales</p>
                            <span class="d-flex justify-content-between  align-items-center">
                                <a href="{{ route('inscribir', $preinscrito) }}" class="btn btn-success">
                                <i class="fa-solid fa-check"></i>
                                    <span>Inscribir</span>
                                </a>
                            </span>
                        </span>

                        <p class="fs-4">{{ $preinscrito->nombre_completo }}</p>
                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Tipo identificación</span>
                            <span>{{ $preinscrito->tipo_identificacion }}</span>
                        </span>
                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Número de identificación</span>
                            <span>{{ $preinscrito->numero_identificacion }}</span>
                        </span>
                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Fecha de nacimiento</span>
                            <span>{{ $preinscrito->fecha_nacimiento }}</span>
                        </span>
                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Edad</span>
                            <span>{{ $preinscrito->edad }}</span>
                        </span>
                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Genero</span>
                            <span>{{ $preinscrito->genero }}</span>
                        </span>
                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Correo electrónico</span>
                            <span>{{ $preinscrito->correo_electronico }}</span>
                        </span>
                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Teléfono celular</span>
                            <span>{{ $preinscrito->numero_celular }}</span>
                        </span>
                        <hr class="my-5">
                        <p class="fs-1">Datos de pago</p>
                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Medio de pago</span>
                            <span>{{ $preinscrito->medio_pago }}</span>
                        </span>
                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Soporte de pago</span>
                            <span>{{ $preinscrito->soporte_pago }}</span>
                        </span>
                        <hr class="my-5">
                        <p class="fs-1">Datos de evento</p>
                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Contacto de emergencia</span>
                            <span>{{ $preinscrito->contacto_emergencia }}</span>
                        </span>
                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Teléfono de contacto en caso de emergencia</span>
                            <span>{{ $preinscrito->telefono_contacto_emergencia }}</span>
                        </span>
                        <span class="d-flex justify-content-between  align-items-center">
                            <span>EPS</span>
                            <span>{{ $preinscrito->eps}}</span>
                        </span>

                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Usuario Instagram</span>
                            <span>{{ $preinscrito->usuario_instragram }}</span>
                        </span>
                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Perfil Strava</span>
                            <span>{{ $preinscrito->perfil_strava }}</span>
                        </span>
                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Tipo cicla</span>
                            <span>{{ $preinscrito->tipo_cicla}}</span>
                        </span>
                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Distancia recorrida</span>
                            <span>{{ $preinscrito->distrancia_recorrida }}</span>
                        </span>

                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Talla Hombre</span>
                            <span>{{ $preinscrito->talla_hombre }}</span>
                        </span>
                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Tallar Mujer</span>
                            <span>{{ $preinscrito->talla_mujer }}</span>
                        </span>
                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Exhoneración</span>
                            <span>{{ $preinscrito->exhoneracion }}</span>
                        </span>
                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Estado inscripción</span>
                            <span>{{ $preinscrito->estado_inscripcion }}</span>
                        </span>
                        <span class="d-flex justify-content-between  align-items-center">
                            <span>Registrado</span>
                            <span>{{ $preinscrito->created_at }}</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>