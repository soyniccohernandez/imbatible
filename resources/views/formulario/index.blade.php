<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IMBATIBLE</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.0/datatables.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery.steps@1.1.4/dist/jquery-steps.min.css">
    <link rel="shortcut icon" href="{{ asset('/img/favicon/favicon.png') }}" type="image/x-icon">
    <style>
        .error {
            color: red;
        }

        input,
        select {
            margin: 0 !important;
        }

        main {
            width: 100vw;
            height: 100vh;
        }

        label.error {
            font-size: 0.8em !important;
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
            width: 50%;
            max-width: 50%;
        }

        .layout_form>.section_form:first-child {
            height: 100vh;
            flex-grow: 3;
            border: none;
            border-radius: 0;
            background-image: url("{{ asset('/uploads/assets/img/background_form.png') }}");
            background-size: cover;
            background-position: center center;
        }

        .st .col {
            margin-top: 1rem;
        }

        .st .col>label {
            margin-bottom: 0.5rem;
        }

        label.error {
            margin-top: 0.5rem;
        }
    </style>
</head>

<body>
    <main class="layout_form">
        <div class="card section_form">
        </div>

        <div class="card section_form">
            <div class="card-body" style="padding:5rem;">
                <form method="POST" action="{{ route('inscritos.store') }}" class="d-flex flex-column gap-4" id="registerImbatible" enctype="multipart/form-data">
                    @csrf

                    <h3 class="fs-1">Datos básicos</h3>
                    <section class="st">
                        <div class="row">
                            <div class="col">
                                <label for="tipo_identificacion">Tipo de identificación *</label>
                                <select class="form-select" id="tipo_identificacion" name="tipo_identificacion">
                                    <option value="" selected>Seleccione una opción</option>
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
                                <label for="numero_identificacion">Número de identificación *</label>
                                <input type="number" class="form-control" placeholder="1234567895" id="numero_identificacion" name="numero_identificacion">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="nombre_completo">Nombre Completo *</label>
                                <input type="text" class="form-control" placeholder="Joe Catania" name="nombre_completo" id="nombre_completo">
                            </div>
                            <div class="col">
                                <label for="fecha_nacimiento">Fecha de nacimiento *</label>
                                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="edad">Edad *</label>
                                <input type="number" class="form-control " name="edad" id="edad">
                            </div>
                            <div class="col">
                                <label for="genero">Genero *</label>
                                <select class="form-select" id="genero" name="genero">
                                    <option selected>Seleccione una opción</option>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="correo_electronico">Correo electrónico *</label>
                                <input type="email" class="form-control " name="correo_electronico" id="correo_electronico">
                            </div>
                            <div class="col">
                                <label for="numero_celular">Número celular *</label>
                                <input type="number" class="form-control " name="numero_celular" id="numero_celular">
                            </div>
                        </div>
                        <div class="col">
                            <label for="eps">Entidad prestadora de salud (EPS) Obligatorio estar afiliado y activo)*</label>
                            <input type="text" class="form-control " name="eps" id="eps">
                        </div>
                    </section>
                    <hr>
                    <h3 class="fs-1">En caso de emergencia</h3>
                    <section class="st">
                        <div class="col mt-0">
                            <label for="contacto_emergencia">Contactar con *</label>
                            <input type="text" class="form-control " name="contacto_emergencia" id="contacto_emergencia">
                        </div>
                        <div class="row">

                            <div class="col">
                                <label for="numero_contacto_emergencia">Al número teléfono *</label>
                                <input type="number" class="form-control " name="numero_contacto_emergencia" id="numero_contacto_emergencia">
                            </div>
                            <div class="col">
                                <label for="parentesco">Parentesco *</label>
                                <input type="text" class="form-control " name="parentesco" id="parentesco">
                            </div>
                        </div>
                    </section>
                    <hr>
                    <h3 class="fs-1">Datos imbatible</h3>

                    <section class="st">
                        <div class="row">
                            <div class="col mt-0">
                                <label for="tipo_cicla">¿En que tipo de bicicleta vas a participar en
                                    IMBATIBLE?</label>
                                <select class="form-select " id="tipo_cicla" name="tipo_cicla">
                                    <option value="" selected>Seleccione una opción</option>
                                    <option value="RUTA">RUTA</option>
                                    <option value="MTB">MTV</option>
                                    <option value="GRAVEL">GRAVEL</option>
                                    <option value="NINGUNA">NINGUNA</option>
                                </select>
                            </div>
                            <div class="col mt-0">
                                <label for="distancia_recorrida">¿Distancia más larga realizada en una sola
                                    etapa?</label>
                                <select class="form-select " id="distancia_recorrida" name="distancia_recorrida">
                                    <option value="" selected>Seleccione una opción</option>
                                    <option value="Entre 100 a 200 km">Entre 0 a 100 km</option>
                                    <option value="Entre 100 a 200 km">Entre 100 a 200 km</option>
                                    <option value="Entre 200 a 300 Km">Entre 200 a 300 Km</option>
                                    <option value="Entre 300 a 400 Km">Entre 300 a 400 Km</option>
                                    <option value="Más de 400 Km">Más de 400 Km</option>
                                </select>
                            </div>
                        </div>
                        <div class="col" id="talla_hombre_form">
                            <label for="talla_hombre">Talla Jersey hombre <a href="#" data-bs-toggle="modal" data-bs-target="#modalTallaHombre">(Ver guía de tallas hombre
                                    Phigma)</a> </label>
                            <select class="form-select " id="talla_hombre" name="talla_hombre">
                                <option value="" selected>Seleccione una opción</option>
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </div>
                        <div class="col" id="talla_mujer_form">
                            <label for="talla_mujer">Talla Jersey Mujer <a href="#" data-bs-toggle="modal" data-bs-target="#modalTallaMujer">(Ver guía de tallas mujer
                                    Phigma)</a></label>
                            <select class="form-select " id="talla_mujer" name="talla_mujer">
                                <option value="" selected>Seleccione una opción</option>
                                <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="usuario_instragram">Nombre de usuario de Instagram. Iniciar por
                                    @...</label>
                                <input type="text" class="form-control " name="usuario_instagram" id="usuario_instagram" placeholder="@imbatible">
                            </div>
                            <div class="col">
                                <label for="perfil_strava">Perfil de Strava, copiar link</label>
                                <input type="text" class="form-control " name="perfil_strava" id="perfil_strava" placeholder="perfil_strava">
                            </div>
                        </div>
                    </section>
                    <hr>
                    <h3 class="fs-1">Datos de pago</h3>
                    <section class="st">
                        <div class="col mt-0">
                            <label for="medio_pago">¿Por que medio realizaste el pago de tu
                                inscripción?</label>
                            <select class="form-select " id="medio_pago" name="medio_pago">
                                <option value="" selected>Seleccione una opción</option>
                                <option value="Daviplata">Daviplata</option>
                                <option value="Nequi">Nequi</option>
                                <option value="BBVA">BBVA</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="soporte_pago">Adjunta imagen o pdf de soporte de pago de inscripción,
                                dónde se lea legiblemente la información.</label>
                            <input type="file" class="form-control" name="soporte_pago" id="soporte_pago">
                        </div>

                    </section>
                    <hr>
                    <h3 class="fs-1">Exhoneración de responsabilidad por accidentes</h3>
                    <section>
                        <a href="#" class="mb-4 d-block" data-bs-toggle="modal" data-bs-target="#modalExhoneracion">Leer Exhoneración de responsanilidad por accidentes</a>
                        <div class="col mt-0 d-flex gap-3 ml-4 flex-col">
                            <input class="form-check-input" type="checkbox"  id="check_exho" name="check_exho" style="transform: scale(2);">
                            <label for="medio_pago">Confirmo que he leído y acepto lo indicado en la EXHONERACIÓN DE RESPONSABILIDAD POR ACCIDENTES</label>
                        </div>
                    </section>

                    <button type="submit" class="btn btn-primary">Realizar Inscripción</button>
                </form>
            </div>
        </div>
    </main>


    <!-- Modal -->
    <div class="modal fade" id="modalTallaHombre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Catálogo de Tallas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('/uploads/assets/img/tallaHombre.png') }}" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalTallaMujer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Catálogo de Tallas</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('/uploads/assets/img/tallaMujer.png') }}" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modalExhoneracion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header px-5">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Exhoneración de responsabilidad por accidentes</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-5">
                    <p style="text-align: justify;">
                        Como participante del evento de ciclismo RETO IMBATIBLE , reconozco que esta prueba deportiva implica un gran nivel exigencia que puede llevarme al extremo de los límites físicos y mentales y que tiene riesgos que incluyen entre otros, los causados por el terreno, las instalaciones, la temperatura, el clima, la altitud, la condición de los atletas, el manejo del equipo o el tráfico vehicular, las acciones de otras personas, incluidos, entre otros, los participantes, los espectadores, y operadores del evento. Por el presente acepto que conozco los riesgos asociados con la actividad a realizarse durante el evento y asumo los riesgos de participar en el mismo. Certifico que estoy en buena forma física, que tengo la formación y preparación suficiente para participar en el evento y que un médico cualificado no me ha indicado lo contrario. Reconozco que este formulario de Exención de Accidentes y Exención de Responsabilidad será de uso de los organizadores y patrocinadores de este evento y que regirá mis acciones y responsabilidades en dicho evento. En consideración a mi solicitud y permitiéndome participar en este evento, por el presente tomo acción para mí, mis herederos, familiares más cercanos, sucesores y cesionarios de la siguiente manera: (A) Renuncia, Liberación y Relevo de cualquier y toda responsabilidad por mi muerte, discapacidad, lesiones personales, daños a la propiedad, o acciones de cualquier tipo que puedan acumularse en el futuro, incluido mi viaje hacia y desde este evento. (B) Eximir de responsabilidad a las entidades o personas mencionadas en este párrafo de todas y cada una de las responsabilidades o reclamaciones hechas como resultado de la participación en este evento. Por la presente doy mi consentimiento para recibir tratamiento médico que se considere aconsejable en caso de lesión, accidente y / o enfermedad durante este evento. Entiendo que, en este evento o actividades relacionadas, pueden fotografiarme. Acepto permitir que mi foto o video sea utilizada para cualquier propósito legítimo por los organizadores del evento y sus patrocinadores. La Exención de responsabilidad por accidente y la exención de responsabilidad se interpretarán de manera amplia para proporcionar una exención en la medida máxima permitida por la ley aplicable. Por la presente certifico que he leído este documento; y entiendo su contenido.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btn_aceptar_exho" data-bs-dismiss="modal">Aceptar y cerrar</button>
                </div>
            </div>
        </div>
    </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        function mostrarTallaJersey() {
            var generoSeleccionado = document.getElementById("genero").value;
            var tallaHombre = document.getElementById("talla_hombre_form");
            var tallaMujer = document.getElementById("talla_mujer_form");

            // Ocultar ambos campos de talla
            tallaHombre.style.display = "none";
            tallaMujer.style.display = "none";

            // Mostrar el campo de talla correspondiente al género seleccionado
            if (generoSeleccionado === "Masculino") {
                tallaHombre.style.display = "block";
            } else if (generoSeleccionado === "Femenino") {
                tallaMujer.style.display = "block";
            }
        }

        // Obtener el checkbox y el botón por su ID
        let miCheckbox = document.getElementById("check_exho");
        let botonChequear = document.getElementById("btn_aceptar_exho");


        document.getElementById('btn_aceptar_exho').addEventListener('click', function() {
            miCheckbox.checked = !miCheckbox.checked;
        });

        // Llamar a la función al cargar la página para establecer el estado inicial
        mostrarTallaJersey();

        // Llamar a la función cada vez que cambie la selección de género
        document.getElementById("genero").addEventListener("change", mostrarTallaJersey);
        const form = $("#registerImbatible");
        form.validate({
            rules: {
                tipo_identificacion: {
                    required: true
                },
                numero_identificacion: {
                    required: true
                },
                nombre_completo: {
                    required: true
                },
                fecha_nacimiento: {
                    required: true
                },
                edad: {
                    required: true
                },
                genero: {
                    required: true
                },
                correo_electronico: {
                    required: true
                },
                numero_celular: {
                    required: true
                },
                eps: {
                    required: true
                },
                contacto_emergencia: {
                    required: true
                },
                numero_contacto_emergencia: {
                    required: true
                },
                parentesco: {
                    required: true
                },
                tipo_cicla: {
                    required: true
                },
                distancia_recorrida: {
                    required: true
                },
                perfil_strava: {
                    required: true
                },
                soporte_pago: {
                    required: true
                },
                medio_pago: {
                },
                check_exho:{
                    required: true
                }
            },
            messages: {
                tipo_identificacion: {
                    required: "Por favor, ingresa tu tipo de identificación"
                },
                numero_identificacion: {
                    required: "Por favor, ingresa tu número de identificación"
                },
                nombre_completo: {
                    required: "Por favor, ingresa tu nombre completo"
                },
                fecha_nacimiento: {
                    required: "Por favor, ingresa tu fecha de nacimiento"
                },
                edad: {
                    required: "Por favor, ingresa tu edad"
                },
                genero: {
                    required: "Por favor, ingresa tu genero"
                },
                correo_electronico: {
                    required: "Por favor, ingresa tu correo electrónico"
                },
                numero_celular: {
                    required: "Por favor, ingresa tu número de celular"
                },
                eps: {
                    required: "Por favor, ingresa tu eps"
                },
                contacto_emergencia: {
                    required: "Por favor, ingresa un nombre de contacto para emergencia"
                },
                numero_contacto_emergencia: {
                    required: "Por favor, ingresa tu numero de teléfono"
                },
                parentesco: {
                    required: "Por favor, ingresa el parentesco"
                },
                tipo_cicla: {
                    required: "Por favor, ingresa tu tipo de cicla"
                },
                distancia_recorrida: {
                    required: "Por favor, ingresa distancia máxima recorrida"
                },
                perfil_strava: {
                    required: "Por favor, ingresa tu usuario en strava"
                },
                soporte_pago: {
                    required: "Por favor, adjunta el soporte de pago"
                },
                medio_pago: {
                    required: "Por favor, ingresa el medio de pago"
                },
                check_exho:{
                    required: "Por favor, ingresa el medio de pago"
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