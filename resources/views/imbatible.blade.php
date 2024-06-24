<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Descubre la experiencia IMBATIBLE EDICIÓN BUSCANDO EL ALBA. Únete a nuestro desafío de ciclismo nocturno y enfrenta tus límites mientras cazamos juntos el primer rayo de sol. ¡Regístrate ahora y prepárate para una jornada inolvidable llena de aprendizaje, diversión y conexión con otros apasionados como tú!">


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- Carrousel -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/index.css') }}" />

    <link rel="shortcut icon" href="{{ asset('/img/favicon/favicon.png') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>IMBATIBLE</title>
    <style>
        #modalTerminosCondiciones {
            color: #000;
            text-align: justify;
        }

        #modalTerminosCondiciones .modal-title {
            margin-left: 2rem;
        }
    </style>
</head>

<body>

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


    <div class="whatsapp-icon">
        <a href="https://api.whatsapp.com/send?phone=573213028666&text=Hola,%20estoy%20interesado%20en%20obtener%20m%C3%A1s%20informaci%C3%B3n%20sobre%20el%20evento%20IMBATIBLE." target="_blank">
            <img src="{{ asset('/img/whatsapp.webp') }}" alt="Icono de WhatsApp">
        </a>
    </div>
    <button onclick="topFunction()" id="goToTopBtn" title="Ir arriba">
        <i class="fa-solid fa-arrow-up"></i>
    </button>
    <!-- Menú de navegación -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars text-white"></i>
            </button>

            <img src="{{ asset('/img/logo/logo_inline.png') }}" alt="Logo imbatible" class="logo_nav_movile" />
            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav w-100 d-flex justify-content-between">
                    <li class="nav-item d-flex">
                        <img src="{{ asset('/img/logo/logo_inline.png') }}" alt="Logo imbatible" class="logo_nav" />
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#inicio">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#que_es">¿QUÉ ES IMBATIBLE?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#buscando">EDICIÓN BUSCANDO EL ALBA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reglas">REGLAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#premiacion">PREMIACIÓN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kit">KIT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#inscripcion">INSCRIPCIÓN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#patrocinadores">PATROCINADORES</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carrusel -->
    <section class="section section_carrousel w-100" id="inicio">
        <div class="slider">
            <img src="{{ asset('/img/slider_001.webp') }}" alt="Edición 1 Imbatible" />
            <img src="{{ asset('/img/slider_002.webp') }}" alt="Edición 1 Imbatible" />
            <img src="{{ asset('/img/slider_003.webp') }}" alt="Edición 1 Imbatible" />
        </div>

        <div class="slider_movile">
            <img src="{{ asset('./img/slider_001_movile.webp') }}" alt="Edición 1 Imbatible" />
            <img src="{{ asset('./img/slider_002_movile.webp') }}" alt="Edición 1 Imbatible" />
            <img src="{{ asset('./img/slider_003_movile.webp') }}" alt="Edición 1 Imbatible" />
        </div>

        <div class="section_counter">
            <div class="titulo_header">
                <span class="title_one">FALTAN</span>
            </div>
            <div class="contador" id="contador"></div>
            <span class="text-center text-end">PARA IMBATIBLE EDICIÓN BUSCANDO EL ALBA</span>
            <a href="https://www.instagram.com/reel/C1ccVRpuJyM/" target="_blank" class="btn btn-primary px-5 py-3"><i class="fa-solid fa-film"></i> VIDEO 1RA EDICIÓN</a>
        </div>
    </section>

    <section class="section section_001" id="que_es">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7">
                    <img src=" {{ asset('./img/st01.webp') }}" class="img_st01" alt="¿Qué es imbatible?" />
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="content_article">
                        <article>
                            <!-- <span class="title title_section">EXPLORANDO LÍMITES</span> -->
                            <span class="title title_section">DESCUBRIENDO FORTALEZA INTERIOR</span>
                            <p class="paragrahp_section">
                                <strong>IMBATIBLE</strong> es un reto de ciclismo diferente, donde cada participante
                                buscará superar sus límites, enfrentándose a un exigente recorrido y a la incertidumbre
                                de lo que pueda suceder en el camino. Muchos kilómetros y desnivel para sacar a flote
                                ese espíritu inquebrantable que todos llevamos dentro, pero muchas veces desconocemos.
                            </p>
                        </article>
                        <article>
                            <p class="paragrahp_section">
                                En <strong>IMBATIBLE</strong> nos sumergimos es un reto que va más allá de la
                                competencia física. Es un viaje hacia el interior de cada participante, donde se
                                redescubre una fortaleza hasta entonces desconocida. A través de cada pedalazo, se
                                revela un espíritu resiliente, capaz de enfrentar los desafíos más grandes con
                                determinación y coraje.
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section_002" id="buscando">
        <div class="container">
            <div class="row">
                <span class="title title_section_main">EDICIÓN BUSCANDO EL ALBA</span>
                <div class="col-md-6 section_002_item">
                    <div class="content_article">
                        <article>
                            <span class="title title_section">DESAFIANDO LA OSCURIDAD </span>
                            <p class="paragrahp_section">
                                <strong>El 27 de julio del 2024 llega la segunda edición de IMBATIBLE</strong>, en esta
                                ocasión el objetivo es recorrer de manera auto asistida <strong>238 km con 5400 metros
                                    de desnivel</strong> teniendo como largada la luz de la luna, iniciaremos el
                                recorrido de noche e iremos en busca del amanecer, cazando la luz del primer rayo de sol
                                al tiempo que superamos nuestros miedos.
                            </p>
                            <p class="paragrahp_section">
                                <strong>La salida será en la Vega Cundinamarca</strong>, y para ser considerados
                                finalistas oficiales tendrán que pasar por tres puntos de control obligatorios y llegar
                                a la meta antes del tiempo límite de 13 horas para hombres y 14 horas para mujeres.
                            </p>
                            <p class="paragrahp_section">
                                <strong>¿Cuál es la Meta y el recorrido?</strong> Esta información solo será compartida
                                a los inscritos al evento y socializada en el congresillo técnico, pero te adelantamos
                                que terminarás cerca a Bogotá.
                            </p>
                        </article>
                    </div>
                </div>
                <div class="col-md-6 section_002_item">
                    <img src=" {{ asset('./img/st02_01.webp') }}" alt="Imagen de primera edición
          imbatible" class="img_section_002">
                </div>
            </div>
            <div class="row flex_inverse_section_item mt-5">
                <div class="col-md-6 section_002_item">
                    <img src=" {{ asset('./img/st02_02.webp') }}" alt="Imagen de primera edición
          imbatible" class="img_section_002">
                </div>
                <div class="col-md-6 section_002_item">
                    <div class="content_article">
                        <article>
                            <span class="title title_section"> DATOS PRIMERA EDICIÓN</span>
                            <p class="paragrahp_section">
                                El 25 de noviembre del 2023, 31 valientes se
                                enfrentaron a 233 kilómetros con 5300 Desnivel positivo, solo el 64% de inscritos
                                logro llegar en el tiempo límite.
                                ¿Eres capaz de superar el reto en esta segunda edición?
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section_004" id="reglas">
        <div class="container">
            <div class="row w-100 m-0" style="margin-bottom: 8rem !important;">
                <span class="title title_section_main">ALTIMETRÍA DEL EVENTO</span>
                <img src=" {{ asset('./img/altimetria.webp') }}" alt="imagen explicativa de reglas" class="article_rules_img w-100">
            </div>
            <span class="title title_section_main">REGLAMENTO DE LA CARRERA</span>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <article>
                        <div class="subtitle_section">1. Autosuficiencia</div>
                        <img src=" {{ asset('./img/rule_01.webp') }}" alt="imagen explicativa de reglas" class="article_rules_img">
                        <p class="paragrahp_section">Está <strong>prohibido</strong> el apoyo de terceros como motos,
                            vehículos
                            acompañantes o
                            ciclistas gregarios fuera de los
                            inscritos. Cada ciclista inscrito será autónomo en la asistencia de problemas mecánicos,
                            alimentación u
                            otros, aunque contará con acompañamiento de la organización y dos puntos de abastecimiento.
                        </p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <article>
                        <div class="subtitle_section">2. Tiempo</div>
                        <img src="{{ asset('./img/rule_02.webp') }}" alt="imagen explicativa de reglas" class="article_rules_img">
                        <p class="paragrahp_section">Para ser considerado finisher debes completar el recorrido por
                            debajo del tiempo límite establecido, además de pasar obligatoriamente por los puntos de
                            control.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <article>
                        <div class="subtitle_section">3. Condiciones</div>
                        <img src="{{ asset('./img/rule_03.webp') }}" alt="imagen explicativa de reglas" class="article_rules_img">
                        <p class="paragrahp_section">No pueden acceder a premiación o podio
                            ciclistas profesionales o aquellos que lo hayan sido en los tres años anteriores a la
                            fecha del evento, tampoco se puede participar en bicicletas asistidas o de motor.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <article>
                        <div class="subtitle_section">4. Descalificación</div>
                        <img src="{{ asset('./img/rule_04.webp') }}" alt="imagen explicativa de reglas" class="article_rules_img">
                        <p class="paragrahp_section">El ciclista que reciba ayuda externa será descalificado de la
                            competencia. Lo anterior será supervisado por jueces de la organización que
                            acompañarán el recorrido.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="section section_003" id="premiacion">
        <div class="container">
            <div class="col-md-5">
                <span class="title title_section">PREMIACIÓN</span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="paragrahp_section">Premiación en efectivo, categorías únicas, masculina y femenina, para
                        acceder a
                        podio es obligatorio que hayan terminado dentro del tiempo límite.</p>

                    <span class="d-flex justify-content-between gap-5 flex-wrap">
                        <div class="item_premio">
                            <span class="icon_premio premio_1"></span>
                            <span class="valor_premio">$800.000 COP</span>
                        </div>

                        <div class="item_premio">
                            <span class="icon_premio premio_2"></span>
                            <span class="valor_premio">$600.000 COP</span>
                        </div>

                        <div class="item_premio">
                            <span class="icon_premio premio_3"></span>
                            <span class="valor_premio">$400.000 COP</span>
                        </div>
                    </span>


                    <p class="paragrahp_section mt-5 fw-medium text-info">*En caso de no obtener el mínimo de inscritos
                        por
                        categoría, 40 hombres y 20
                        mujeres, los valores de la premiación variarán a:

                    <div class="paragrahp_section">1re puesto $650.000</div>
                    <div class="paragrahp_section">2do puesto $450.000</div>
                    <div class="paragrahp_section">3ro $300.000</div>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section_007" id="kit">
        <div class="container">
            <span class="title title_section">KIT</span>


            <div class="row">
                <div class="content_items">
                    <div class="items">
                        <i class="fa-solid fa-shirt"></i>
                        <span class="title_item">Jersey Oficial X PHIGMA</span>
                    </div>
                    <div class="items">
                        <i class="fa-solid fa-briefcase"></i>
                        <span class="title_item">Maletín Folk Mini</span>
                    </div>
                    <div class="items">
                        <i class="fa-solid fa-location-dot"></i>
                        <span class="title_item">2 puntos de abastecimiento</span>
                    </div>
                    <div class="items">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span class="title_item">Póliza de actividad</span>
                    </div>
                    <div class="items">
                        <i class="fa-solid fa-motorcycle"></i>
                        <span class="title_item">Acompañamiento en motos y carro</span>
                    </div>
                    <div class="items">
                        <i class="fa-solid fa-camera"></i>
                        <span class="title_item">Fotos oficiales</span>
                    </div>
                    <div class="items">
                        <i class="fa-solid fa-gift"></i>
                        <span class="title_item">Participación en rifas</span>
                    </div>
                    <div class="items">
                        <i class="fa-solid fa-tags"></i>
                        <span class="title_item">Descuentos marcas aliadas</span>
                    </div>

                    <div class="items">
                        <i class="fa-solid fa-award"></i>
                        <span class="title_item">Recordatorio de Finisher <br> (Exclusivo finalistas antes del tiempo
                            límite)</span>
                    </div>
                    <div class="items">
                        <i class="fa-solid fa-ranking-star"></i>
                        <span class="title_item">Derecho a premiación en caso de acceder a podio</span>
                    </div>

                </div>

            </div>
        </div>
        <div class="text-center py-5">
            <a href="https://drive.google.com/drive/folders/1Oe91e1MxgcQdzJoFmUXoR1mbQFnn9vMw" target="_blank" class="btn btn-primary px-5 py-3"><i class="fa-solid fa-camera"></i> VER FOTOS 1RA EDICIÓN </a>
        </div>
    </section>

    <section class="section section_006" id="inscripcion">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <span class="title title_section">INSCRIPCIONES</span>
                    <p class="paragrahp_section">¡Bienvenidos al evento que estabas esperando! Estamos emocionados de
                        invitarte a
                        participar en esta experiencia única que te llevará a nuevos desafíos y logros. En IMBATIBLE
                        EDICIÓN
                        BUSCANDO EL ALBA, nos comprometemos a brindarte una jornada inolvidable, llena de aprendizaje,
                        diversión y
                        conexión con otros apasionados como tú. Para asegurar tu lugar en esta aventura, te
                        proporcionamos todos los
                        detalles necesarios para completar tu inscripción</p>

                    <div class="paragrahp_section">
                        <ul class="paragrahp_section">
                            <li><strong>Valor Inscripción:</strong> $250.000</li>
                            <li><strong>Financieras digitales:</strong> NEQUI/DAVIPLATA #3213028666</li>
                            <li><strong>Titular de cuenta:</strong> John Hernández Sibo</li>
                        </ul>

                        <p>
                            Descuento grupos: Paga 4 e inscribe a 5 personas, escríbenos al correo
                            info@imbatible.com o al Instagram @imbatible_ solicitando más información.
                        </p>
                    </div>

                    <div class="divider"></div>


                    <span class="title title_section">PASOS</span>

                    <ol class="paragrahp_section">
                        <li>Paga el valor de la inscripción </li>
                        <li>Ve al <a href="/registro" target="_blank" class="text-info">formulario de inscripción</a>
                        </li>
                        <li>Diligencia y adjunta el soporte de pago</li>
                        <li>Luego de confirmado el pago y corroborados los datos, recibirás correo electrónico con link para unirte al grupo de WhatsApp oficial del evento</li>
                    </ol>

                </div>

                <div class="col-md-12 col-lg-12">
                    <div class="contador_inscripciones">
                        <span class="contador">{{ 80 - $count }}</span>
                        <span class="title">CUPOS DISPONIBLES</span>
                        <a href="/registro" class="btn btn-primary px-5 py-3"><i class="fa-solid fa-person-biking"></i>
                            SI YA REALIZASTE EL PAGO REGISTRATE AQUÍ</a>
                    </div>
                </div>
            </div>
    </section>

    <section class="section section_005" id="patrocinadores">
        <div class="container">
            <span class="title title_section">PATROCINADORES</span>

            <span class="content_sponsor">
                <a href="https://14ochomiles.com/wahoo" aria-label="Visitar sitio oficial de wahoo" target="_blank"><span class="sponsor_logo sponsor_logo_a "></span></a>

                <a href="https://14ochomiles.com/" aria-label="Visitar sitio oficial de 14ochomiles" target="_blank"><span class="sponsor_logo sponsor_logo_c"></span></a>

                <a href="https://phigma.co/" aria-label="Visitar sitio oficial de phigma" target="_blank"><span class="sponsor_logo sponsor_logo_e"></span></a>
                <a href="https://www.ramo.com.co/" aria-label="Visitar sitio oficial de ramo" target="_blank"><span class="sponsor_logo sponsor_logo_f"></span></a>
            </span>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex flex-column gap-4">
                    <div class="footer_b1">
                        <img src="{{ asset('./img/logo/logo_inline.png') }}" alt="imagen de cierre web" class="w-50">
                        <p>Explora IMBATIBLE en nuestras redes y únete a nuestra comunidad de aventureros del ciclismo.
                        </p>
                    </div>
                    <div class="social_media">
                        <a href="https://www.instagram.com/imbatible__/" target="_blank" class="text-white"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.instagram.com/imbatible__/" target="_blank" class="text-white"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/imbatible__/" target="_blank" class="text-white"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://www.instagram.com/imbatible__/" target="_blank" class="text-white"><i class="fa-brands fa-square-x-twitter"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="footer_b2">
                        <li>
                            <a href="https://drive.google.com/drive/folders/1Oe91e1MxgcQdzJoFmUXoR1mbQFnn9vMw" target="_blank">
                                <i class="fa-solid fa-code-compare"></i>
                                Imbatible 1° Edición
                            </a>
                        </li>
                        <li><a href="#">
                                <i class="fa-solid fa-person-biking"></i>
                                Registro</a></li>
                        <li><a href="/login">
                                <i class="fa-solid fa-arrow-right-to-bracket"></i>
                                Iniciar sesión</a></li>
                        <li><a href="https://www.instagram.com/johnsibo_/" target="_blank">
                                <i class="fa-solid fa-user"></i>
                                Jhon Sibo | Organizador</a></li>
                        <li><a href="3" data-bs-toggle="modal" data-bs-target="#modalTerminosCondiciones">
                                <i class="fa-solid fa-file-contract"></i>
                                Términos y Condiciones</a></li>
                    </ul>
                </div>
                <div class="col-md-4 footer_b3">
                    <p>¡Únete a la aventura de IMBATIBLE! Regístrate ahora para asegurar tu lugar en la línea de
                        partida.</p>
                    <a href="/registro" class="btn btn-primary px-5 py-3"><i class="fa-solid fa-person-biking"></i> Registrate
                        aquí</a>
                </div>
            </div>
        </div>
    </footer>



    <div class="modal fade" id="modalTerminosCondiciones" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header py-5">
                    <h1 class="modal-title fs-5 text-primary fw-bold" id="exampleModalLabel">POLITICAS DE DEVOLUCIONES </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5 py-4">
                    <ul>
                        <li class="mb-5">
                            <span class="fw-bold">Si solicitas devolución posterior a la fecha de cierre oficial de inscripciones</span> a IMBATIBLE se pierde todo derecho a reembolso de dinero pagado o aplazamiento del cupo para otro evento.
                        </li>
                        <li class="mb-5">
                            <span class="fw-bold">Si solicitas devolución antes de la fecha de cierre de inscripciones</span>, se descontará el 15% del valor abonado por gastos administrativos. El saldo a favor lo podrás redimir en otro evento de IMBATIBLE o será devuelto en 10 días hábiles posteriores a la solicitud la cual debe hacerse al correo <span class="text-primary">info@retoimbatible.com</span> (En caso de escoger otro evento, se debe ejecutar la participación, ya que de lo contrario se perderá el valor abonado).
                        </li>
                        <li class="mb-5">
                            Si solicitas cancelación o devolución luego del cierre de inscripciones <span class="fw-bold">puedes ceder el cupo a otra persona</span> con la aclaración que dicha persona recibirá el jersey en la talla que inicialmente se solicitó en el formulario. <span class="fw-bold">O puedes elegir recibir el kit de participante</span> y decidir no participar.
                        </li>
                        <li class="mb-5">
                            <span class="fw-bold">En caso de ceder el cupo el plazo máximo para hacerlo es 8 días calendario antes del evento</span>, posterior a esa fecha no se podrá ceder el cupo, ni habrá devolución.
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Carrusel -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js//index.js') }} "></script>
</body>

</html>