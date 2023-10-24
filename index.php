<!DOCTYPE html>
<html lang="en">

<?php require_once "email.php"; ?>

<head>
  <title>Portafolio de Mario</title>

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="Tooplate" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

  <!-- CSS -->
  <link rel="stylesheet" href="css/tooplate-ben-resume-style.css" />

  <!-- SweetAlert 2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

  <!-- BARRA DE MENÚ -->
  <nav class="navbar navbar-expand-lg scroll">

    <div class="container">

      <a class="navbar-brand" href="#"> Portafolio </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

      </button>

      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav mx-auto">

          <li class="nav-item">
            <a href="#intro" class="nav-link smoothScroll">Inicio</a>
          </li>

          <li class="nav-item">
            <a href="#about" class="nav-link smoothScroll">Sobre mí</a>
          </li>

          <li class="nav-item">
            <a href="#testimonials" class="nav-link smoothScroll">Habilidades</a>
          </li>

          <li class="nav-item">
            <a href="#testimonials" class="nav-link smoothScroll">Projectos</a>
          </li>

          <li class="nav-item">
            <a href="#contact" class="nav-link smoothScroll">Contacto</a>
          </li>
        </ul>

        <div class="mt-lg-0 mt-3 mb-4 mb-lg-0">
          <a href="archivos/CV de Mario Alberto López.pdf" target="_blank" class="custom-btn btn">Descargar CV</a>
        </div>

      </div>

    </div>

  </nav>

  <!-- INICIO -->
  <section class="hero d-flex flex-column justify-content-center align-items-center" id="intro">

    <div class="container">

      <div class="row">

        <div class="mx-auto col-lg-5 col-md-5 col-10">
          <img src="images/mario1.png" class="img-fluid rounded-circle" alt="" />
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center col-lg-7 col-md-7 col-12">

          <div class="hero-text">

            <h1 class="hero-title">👋 Mario Alberto López <br /></h1>

            <a href="archivos/CV de Mario Alberto López.pdf" target="_blank" class="email-link">Descargar CV</a>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- SOBRE MÍ -->
  <section class="about section-padding" id="about">

    <div class="container">

      <div class="row">

        <div class="col-lg-6 col-md-6 col-12 text-justify">

          <h3 class="mb-4">Sobre mí</h3>

          <p>
            Soy licenciado en derecho egresado de la UAQ y actual estudiante
            de los últimos semestres de la ingeniería en desarrollo de
            software en la UnADM. Me apasiona la programación y todo lo que
            tiene que ver con software y hardware, es por eso que decidí
            estudiar una ingeniería y así poder dedicarme a lo que realmente
            me apasiona.
          </p>

          <p>
            Soy una persona tranquila, con buenas habilidades blandas, muy
            autodicacta y siempre estoy dispuesto a ayudar, por lo que es muy
            fácil trabajar conmigo.
          </p>

          <ul class="mt-4 mb-5 mb-lg-0 profile-list list-unstyled personal-data">

            <li><strong>Nombre:</strong> Mario Alberto López</li>

            <li><strong>Año de nacimiento:</strong> 19 de Septiembre 1991</li>

            <li><strong>Lugar de residencia:</strong> Queretaro, Qro.</li>

            <li><strong>Email:</strong> as.mario.152653@gmail.com</li>

          </ul>

        </div>

        <div class="col-lg-5 mx-auto col-md-6 col-12">
          <img src="images/yo-trabajando2.jpeg" class="about-image img-fluid" alt="Foto trabajando" />
        </div>

      </div>

    </div>

  </section>

  <!-- HABILIDADES -->
  <section class="testimonials section-padding" id="testimonials">

    <div class="container text-center">

      <div class="row">

        <div class="col-12">
          <h3 class="mb-5 text-center">Habilidades</h3>
        </div>

      </div>

      <div class="row font-cool">

        <div class="col">HTML</div>
        <div class="col">CSS</div>
        <div class="col">Bootstrap</div>

      </div>

      <div class="row row-cool font-cool">

        <div class="col">PHP</div>
        <div class="col">JavaScript</div>
        <div class="col">Ajax</div>

      </div>

      <div class="row row-cool font-cool">

        <div class="col">MySQL</div>
        <div class="col">SQL Server</div>
        <div class="col">GitHub</div>

      </div>

      <div class="row row-cool font-cool">

        <div class="col">Java</div>
        <div class="col">C++</div>
        <div class="col">C#</div>

      </div>

      <div class="row row-cool font-cool">

        <div class="col">UML</div>
        <div class="col">Office</div>
        <div class="col">Inglés avanzado</div>

      </div>

    </div>

  </section>

  <!-- FAQ -->
  <section class="faq section-padding">

    <div class="container">

      <div class="row">

        <div class="col-lg-12 col-12">
          <h3 class="mb-5">Proyectos</h3>

          <div class="projects-description text-justify">

            <p>
              En esta sección se muestran los proyectos que he realizado hasta
              la fecha. Para cada uno de ellos realicé un vídeo explicativo el
              cual pueden encontrar en cada botón con la leyenda "Ver vídeo".
              <br /><br />Si desean analizar con más detalle el código fuente,
              la base de datos o la funcionalidad de la aplicación, con mucho
              gusto lo podemos hacer en una videollamada.
            </p>

          </div>

          <div class="accordion" id="accordionExample">

            <!-- Sección del sistema del sistema de control de inventarios -->
            <div class="card">

              <div class="card-header" id="headingOne">

                <h2 class="mb-0">

                  <button class="btn btn-link d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <span>1.- Sistema para el control de activos fijos</span>
                    <!-- Icono de flecha hacia abajo -->
                    <i class="fas fa-chevron-down"></i>
                  </button>

                </h2>

              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">

                <div class="card-body">

                  <div class="row row-cool font-cool">

                    <div class="col-sm-8 text-justify">

                      <p>
                        Este es un sistema que realicé para la empresa AGCO
                        Corporation con el objetivo de llevar un control de
                        los activos fijos de la empresa, así como de los
                        empleados que tienen asignados dichos activos.
                      </p>

                      <p>
                        El sistema cuenta con varias funcionalidades muy
                        útiles, tales como la generación de reportes en excel,
                        en PDF, asignar activos a empleados, consultar
                        historial de movimientos, etc.
                      </p>

                    </div>

                    <div class="col-sm-4">

                      <div>
                        <img src="images/af_system.png" class="img-fluid img-cool" alt="af System" />
                      </div>

                      <!-- Botón de YouTube -->
                      <div class="row row-yutu-button">

                        <a href="https://www.youtube.com/watch?v=jwsv_pD3G0s" target="_blank" class="col d-flex yutu-button">

                          <div class="col" style="width: 5%; text-align: right">
                            <img src="images/yutuicon.png" class="img-fluid yutu-icon" alt="icono de yutu" />
                          </div>

                          <div class="col-sm-8 d-flex align-items-center" style="width: 95%">
                            <p class="yutu-text">Ver video</p>
                          </div>

                        </a>

                      </div>
                      <!-- Fin del botón de YouTube -->

                      <!-- Botón de Github -->
                      <div class="row row-yutu-button">

                        <a href="" target="_blank" class="col d-flex git-button">

                          <div class="col" style="width: 5%; text-align: right">
                            <img src="images/githu-icon.png" class="img-fluid git-icon" alt="icono de yutu" />
                          </div>

                          <div class="col-sm-8 d-flex align-items-center" style="width: 95%">
                            <p class="yutu-text">Ver en Git</p>
                          </div>

                        </a>

                      </div>
                      <!-- Fin del botón de Github -->

                    </div>

                  </div>

                </div>

              </div>

            </div>

            <!-- Sección del sistema del sistema de la base del conocimiento -->

            <div class="card">

              <div class="card-header" id="headingTwo">

                <h2 class="mb-0">

                  <button class="btn btn-link d-flex justify-content-between collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                    <span>2.- Sistema de almacenamiento de información</span>
                    <!-- Icono de flecha hacia abajo -->
                    <i class="fas fa-chevron-down"></i>

                  </button>

                </h2>

              </div>

              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">

                <div class="card-body">

                  <div class="row row-cool font-cool">

                    <div class="col-sm-8 text-justify">

                      <p>
                        Este es un sistema muy sencillo que me pidieron en la
                        misma empresa AGCO Corporation, el cual tiene como
                        objetivo almacenar información relevante para el área
                        de TI, como procesos, manuales, etc.
                      </p>

                      <p>
                        A pesar de ser muy sencillo, en él implemento un
                        código muy eficiente, pues realicé las clases, métodos
                        y funciones de forma tal que se puedan reutilizar en
                        la mayor parte de los modulos del sistema.
                      </p>

                    </div>

                    <div class="col-sm-4">

                      <div>
                        <img src="images/knowledge_system.png" class="img-fluid img-cool" alt="Knowledge System" />
                      </div>

                      <!-- Botón de Yutu -->
                      <div class="row row-yutu-button">

                        <a href="https://www.youtube.com/watch?v=wZMLFCN3l-0" target="_blank" class="col d-flex yutu-button">

                          <div class="col" style="width: 5%; text-align: right">
                            <img src="images/yutuicon.png" class="img-fluid yutu-icon" alt="icono de yutu" />
                          </div>

                          <div class="col-sm-8 d-flex align-items-center" style="width: 95%">
                            <p class="yutu-text">Ver video</p>
                          </div>

                        </a>

                      </div>
                      <!-- Fin del botón de Yutu -->

                      <!-- Botón de Github -->
                      <div class="row row-yutu-button">

                        <a href="" target="_blank" class="col d-flex git-button">

                          <div class="col" style="width: 5%; text-align: right">
                            <img src="images/githu-icon.png" class="img-fluid git-icon" alt="icono de yutu" />
                          </div>

                          <div class="col-sm-8 d-flex align-items-center" style="width: 95%">
                            <p class="yutu-text">Ver en Git</p>
                          </div>

                        </a>

                      </div>
                      <!-- Fin del botón de Github -->

                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <section class="contact section-padding pt-0" id="contact">

    <div class="container">

      <div>
        <h3 class="mb-5 text-center contact-tittle" style="padding-top: 50px">Contacto</h3>
      </div>

      <!-- Sección de contacto -->

      <div class="contact-secction">

        <div class="text-center" style="padding-bottom: 25px">
          <h6>Envíame un mensaje</h6>
        </div>

        <form method="post" class="contact-form webform">

          <div class="form-group d-flex flex-column-reverse">
            <input type="text" class="form-control" name="nombreEmisor" id="nombreEmisor" placeholder="Tu Nombre" />
            <label for="nombreEmisor" class="webform-label">Nombre</label>
          </div>

          <div class="form-group d-flex flex-column-reverse">
            <input type="email" class="form-control" name="emailEmisor" id="emailEmisor" placeholder="Tu Email" required />
            <label for="emailEmisor" class="webform-label">Tu Email</label>
          </div>

          <div class="form-group d-flex flex-column-reverse">
            <textarea class="form-control" rows="5" name="mensaje" id="mensaje" placeholder="Escribe aquí el mensaje" required></textarea>
            <label for="mensaje" class="webform-label">Mensaje</label>
          </div>

          <div class="align-items-center">
            <button type="submit" class="form-control" id="submit-button" name="submit" style="margin: auto">Enviar</button>
          </div>

          <?php
          $mensaje = new Mensaje();
          $mensaje->enviarMensaje()
          ?>

        </form>

      </div>

    </div>

  </section>

  <!-- SCRIPTS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>