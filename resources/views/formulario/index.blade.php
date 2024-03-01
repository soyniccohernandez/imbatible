<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.0/datatables.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery.steps@1.1.4/dist/jquery-steps.min.css">

    <style>
        .error {
            color: red;
        }

        input.error {
            border: solid 1px red !important;
        }

        main {
            width: 100vw;
            height: 100vh;
        }

        .layout_form {
            display: flex;
            justify-content: space-between;
            width: 100vw;
        }

        .layout_form .section_form {
            height: 100vh;
            overflow-y: scroll;
            flex-grow: 1;
            border: none;
            border-radius: 0;
        }

        .layout_form>.section_form:first-child {
            height: 100vh;
            flex-grow: 3;
            border: none;
            border-radius: 0;
            background-image: url('{{ asset('uploads/assets/img/background_form.png') }}');
            background-size:cover;
        }
    </style>
</head>

<body>
    <main class="layout_form">
        <div class="card section_form">
        </div>

        <div class="card section_form">
            <div class="card-body"style="padding:5rem;">
                <form method="POST" action="{{ route('inscritos.store') }}" class="d-flex flex-column gap-4"
                    id="registerImbatible">
                    @csrf

                    <h3 class="fs-3">Datos básicos</h3>
                    <section>
                        <div class="row">
                            <div class="col">
                                <label for="tipo_identificacion">Tipo de identificación</label>
                                <select class="form-select mb-4 mt-2" aria-label="Default select example"
                                    id="tipo_identificacion" name="tipo_identificacion">
                                    <option selected>Seleccione una opción</option>
                                    <option value="Cédula de Ciudadanía (CC)">Cédula de Ciudadanía (CC)</option>
                                    <option value="Tarjeta de Identidad (TI)">Tarjeta de Identidad (TI)</option>
                                    <option value="Cédula de Extranjería (CE)">Cédula de Extranjería (CE)
                                    </option>
                                    <option value="Pasaporte (PP)">Pasaporte (PP)</option>
                                    <option value="Registro Civil de Nacimiento (RCN)">Registro Civil de
                                        Nacimiento
                                        (RCN)
                                    </option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="numero_identificacion">Número de identificación</label>
                                <input type="number" class="form-control mb-4 mt-2" placeholder="1234567895"
                                    id="numero_identificacion" name="numero_identificacion">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="nombre_completo">Nombre Completo</label>
                                <input type="text" class="form-control mb-4 mt-2" placeholder="Joe Catania"
                                    name="nombre_completo" id="nombre_completo">
                            </div>
                            <div class="col">
                                <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                <input type="date" class="form-control mb-4 mt-2" name="fecha_nacimiento"
                                    id="fecha_nacimiento">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="edad">Edad</label>
                                <input type="number" class="form-control mb-4 mt-2" name="edad" id="edad">
                            </div>
                            <div class="col">
                                <label for="genero">Genero</label>
                                <select class="form-select mt-1" id="genero" name="genero">
                                    <option selected>Seleccione una opción</option>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="correo_electronico">Correo electrónico</label>
                                <input type="email" class="form-control mb-4 mt-2" name="correo_electronico"
                                    id="correo_electronico">
                            </div>
                            <div class="col">
                                <label for="numero_celular">Número celular</label>
                                <input type="number" class="form-control mb-4 mt-2" name="numero_celular"
                                    id="numero_celular">
                            </div>
                        </div>
                        <div class="col">
                            <label for="eps">Entidad prestadora de salud (EPS)</label>
                            <input type="text" class="form-control mb-4 mt-2" name="eps" id="eps">
                        </div>
                    </section>

                    <h3 class="fs-3">En caso de emergencia</h3>
                    <section>
                        <div class="row">
                            <div class="col">
                                <label for="contacto_emergencia">Contactar con</label>
                                <input type="text" class="form-control mb-4 mt-2" name="contacto_emergencia"
                                    id="contacto_emergencia">
                            </div>
                            <div class="col">
                                <label for="numero_contacto_emergencia">Al número teléfono</label>
                                <input type="number" class="form-control mb-4 mt-2"
                                    name="numero_contacto_emergencia" id="numero_contacto_emergencia">
                            </div>
                            <div class="col">
                                <label for="parentesco">Parentesco</label>
                                <input type="text" class="form-control mb-4 mt-2" name="parentesco"
                                    id="parentesco">
                            </div>
                        </div>
                    </section>
                    <h3 class="fs-3">Datos imbatible</h3>

                    <section>
                        <div class="row">
                            <div class="col">
                                <label for="tipo_cicla">¿En que tipo de bicicleta vas a participar en
                                    IMBATIBLE?</label>
                                <select class="form-select mb-4 mt-2" id="tipo_cicla" name="tipo_cicla">
                                    <option selected>Seleccione una opción</option>
                                    <option value="RUTA">RUTA</option>
                                    <option value="MTB">MTV</option>
                                    <option value="GRAVEL">GRAVEL</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="distancia_recorrida">¿Distancia más larga realizada en una sola
                                    etapa?</label>
                                <select class="form-select mb-4 mt-2" id="distancia_recorrida"
                                    name="distancia_recorrida">
                                    <option selected>Seleccione una opción</option>
                                    <option value="Entre 100 a 200 km">Entre 100 a 200 km</option>
                                    <option value="Entre 200 a 300 Km">Entre 200 a 300 Km</option>
                                    <option value="Entre 300 a 400 Km">Entre 300 a 400 Km</option>
                                    <option value="Más de 400 Km">Más de 400 Km</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="talla_hombre">Talla Jersey hombre (Ver guía de tallas hombre
                                    Phigma)</label>
                                <select class="form-select mb-4 mt-2" id="talla_hombre" name="talla_hombre">
                                    <option selected>Seleccione una opción</option>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="talla_mujer">Talla Jersey Mujer (Ver guía de tallas mujer
                                    Phigma)</label>
                                <select class="form-select mb-4 mt-2" id="talla_mujer" name="talla_mujer">
                                    <option selected>Seleccione una opción</option>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="usuario_instragram">Nombre de usuario de Instagram. Iniciar por
                                    @...</label>
                                <input type="text" class="form-control mb-4 mt-2" name="usuario_instragram"
                                    id="usuario_instragram" placeholder="@imbatible">
                            </div>
                            <div class="col">
                                <label for="perfil_strava">Perfil de Strava, copiar link</label>
                                <input type="text" class="form-control mb-4 mt-2" name="perfil_strava"
                                    id="perfil_strava">
                            </div>
                        </div>
                    </section>

                    <h3 class="fs-3">Datos de pago</h3>
                    <section>
                        <div class="col">
                            <label for="soporte_pago">¿Por que medio realizaste el pago de tu
                                inscripción?</label>
                            <select class="form-select mb-4 mt-2" id="soporte_pago" name="soporte_pago">
                                <option selected>Seleccione una opción</option>
                                <option value="Daviplata">Daviplata</option>
                                <option value="Nequi">Nequi</option>
                                <option value="BBVA">BBVA</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="medio_pago">Adjunta imagen o pdf de soporte de pago de inscripción,
                                dónde se
                                lea
                                legiblemente la información.</label>
                            <input type="file" class="form-control mb-4 mt-2" name="medio_pago" id="medio_pago">
                        </div>
                    </section>


                    <button type="submit" class="btn btn-primary">Realizar Inscripción</button>
                </form>
            </div>
        </div>
    </main>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        const form = $("#registerImbatible");
        form.validate({
            rules: {
                nombre_completo: {
                    required: true
                }
            },
            messages: {
                nombre_completo: {
                    required: "Por favor, ingresa tu nombre"
                }
            },
            submitHandler: function(form) {
                // Aquí puedes ejecutar código adicional si el formulario es válido
                form.submit();
            }
        });
    </script>

</body>

</html>
