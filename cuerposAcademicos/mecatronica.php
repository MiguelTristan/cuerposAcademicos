<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './dotk/00head/analitycs.html';?>
        <?php include './dotk/00head/cabecera.html';?>
        <?php include './dotk/00head/estilos.html';?>
        <!-- libreria Animate-css -->
        <link href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css" rel="stylesheet">
        </link>
    </head>
    <body>
        <a id="arriba">
        </a>
        <header>
            <!-- Logos e imagen de hidalgo -->
            <?php include '../lib18/seph/hf/header.html';?>
            <nav>
                <!-- Menu principal superior -->
                <?php include '../lib18/coreFRONTx/01header/nav/menu-superior/menu.html';?>
            </nav>
        </header>
        <!-- Menu menu-pegajoso DarkDesign -->
        <?php include './dotk/01header/02begajoso/menu-pegajoso.html';?>
        <main class="main container">
            <!-- titulo -->
            <div class="alert alert-info text-center m-1" role="alert">
                Maestría en Mecatrónica
            </div>
            <!-- fin-titulo -->
            <!-- maestria-info -->
            <div class="bd-example bd-example-tabs">
                <div class="row">
                    <div class="col-3">
                        <div aria-orientation="vertical" class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
                            <a aria-controls="v-pills-objetivo" aria-selected="true" class="nav-link active" data-toggle="pill" href="#v-pills-objetivo" id="v-pills-objetivo-tab" role="tab">
                              <i class="fas fa-chess-knight"></i>
                                Objetivo
                            </a>
                            <a aria-controls="v-pills-ingreso" aria-selected="false" class="nav-link" data-toggle="pill" href="#v-pills-ingreso" id="v-pills-ingreso-tab" role="tab">
                              <i class="fas fa-user"></i>
                                Perfil de ingreso
                            </a>
                            <a aria-controls="v-pills-egreso" aria-selected="false" class="nav-link" data-toggle="pill" href="#v-pills-egreso" id="v-pills-egreso-tab" role="tab">
                              <i class="fab fa-leanpub"></i>
                                Perfil de egreso
                            </a>
                            <a aria-controls="v-pills-estudios" aria-selected="false" class="nav-link" data-toggle="pill" href="#v-pills-estudios" id="v-pills-estudios-tab" role="tab">
                              <i class="fas fa-book"></i>
                                Plan de estudios
                            </a>
                            <a aria-controls="v-pills-academico" aria-selected="false" class="nav-link" data-toggle="pill" href="#v-pills-academico" id="v-pills-academico-tab" role="tab">
                              <i class="fas fa-address-card"></i>
                                Nucleo Academico
                            </a>
                            <a aria-controls="v-pills-lgac" aria-selected="false" class="nav-link" data-toggle="pill" href="#v-pills-lgac" id="v-pills-lgac-tab" role="tab">
                              <i class="fas fa-cogs"></i>
                                LGAC
                                <p><small class="text-muted">Líneas de Generación y/o Aplicación del Conocimiento</small></p>
                            </a>
                            <a aria-controls="v-pills-alumno" aria-selected="false" class="nav-link" data-toggle="pill" href="#v-pills-alumno" id="v-pills-alumno-tab" role="tab">
                              <i class="fas fa-graduation-cap"></i>
                                Alumnos
                            </a>
                            <a aria-controls="v-pills-productividad" aria-selected="false" class="nav-link" data-toggle="pill" href="#v-pills-productividad" id="v-pills-productividad-tab" role="tab">
                              <i class="fas fa-address-book"></i>
                                Productividad
                            </a>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div aria-labelledby="v-pills-objetivo-tab" class="tab-pane fade show active" id="v-pills-objetivo" role="tabpanel">
                                <p class="text-justify text-muted mb-2">
                                Formar recursos humanos altamente capacitados en áreas específicas de la mecatrónica mediante el desarrollo de capacidades y competencias profesionales con la finalidad de resolver problemas tecnológicos, generar investigación, innovación y desarrollo tecnológico en el sector académico y productivo de la región y del país.
                                </p>
                                <div class="col-md-7 offset-2">
                                <img alt="" class="rounded wow bounceInRight" src="images/img-mecatronica/M_MEC_IMAGEN_OBJETIVO.jpg" width="100%">
                                </img>
                                </div>
                            </div>
                            <div aria-labelledby="v-pills-ingreso-tab" class="tab-pane fade" id="v-pills-ingreso" role="tabpanel">
                                <p class="text-justify text-muted mb-2">
                                El aspirante debe demostrar vocación y conocimientos en las áreas de la mecatrónica, así como, conocimientos de lectura técnica del idioma inglés; habilidades para trabajar en equipo y pensamiento crítico.
                                </p>
                                <div class="col-md-7 offset-2">
                                <img alt="" class="rounded wow fadeInLeft" src="images/img-mecatronica/M_MEC_IMAGEN_INGRESO.jpg" width="100%">
                                </img>
                                </div>
                            </div>
                            <div aria-labelledby="v-pills-egreso-tab" class="tab-pane fade" id="v-pills-egreso" role="tabpanel">
                                <p class="text-justify text-muted mb-2">
                                El egresado del PE-MM será un profesional con una sólida formación tecnológica, científica y humanista con valores universales, con capacidad de integrarse al trabajo de manera autónoma o multidisciplinaria y dar solución a problemas tecnológicos, poniendo en práctica competencias profesionales en actividades de investigación científica, labor de academia y divulgación del conocimiento científico y tecnológico.
                                </p>
                                <div class="col-md-7 offset-2">
                                <img alt="" class="rounded wow bounceInUp" src="images/img-mecatronica/M_MEC_IMAGEN_EGRESO.jpg" width="100%">
                                </img>
                                </div>
                            </div>
                            <div aria-labelledby="v-pills-estudios-tab" class="tab-pane fade" id="v-pills-estudios" role="tabpanel">
                              <iframe id="blockrandom" name="iframe" src="http://upp.edu.mx/posgrado/images/Maestria/Mecatronica/Documentos/M_MEC_MAPA_PLAN_ESTUDIOS.pdf" scrolling="auto" class="wrapper" width="100%" height="500" frameborder="1">
Esta opción no funcionará correctamente. Lamentablemente, su navegador no soporta URLs embebidas.</iframe>
                            </div>
                            <div aria-labelledby="v-pills-academico-tab" class="tab-pane fade" id="v-pills-academico" role="tabpanel">
                                <p class="text-justify text-muted mb-2">
                                <ul>
                                   <li><a href="pdf/pdf-profes/pdf-mecatronica/CV_Trejo_Macotela_MM.pdf" target="_blank">Dr. Trejo Macotela Francisco Rafael</a></li>
                                   <li><a href="pdf/pdf-profes/pdf-mecatronica/M_MEC_CV_EDUARDO_CAMPOS.pdf" target="_blank">Dr. Campos Mercado Eduardo</a></li>
                                   <li><a href="pdf/pdf-profes/pdf-mecatronica/CV_Gerardo_Benitez.pdf" target="_blank">M. en C. Benítez Morales José Gerardo</a></li>
                                   <li><a href="pdf/pdf-profes/pdf-mecatronica/M_MEC_CV_EDGAR_VERA.pdf" target="_blank">Dr. Vera Cárdenas Edgar Ernesto</a></li>
                                   <li><a href="pdf/pdf-profes/pdf-mecatronica/M_MEC_CV_STEED_ESPINOZA.pdf" target="_blank">Dr. Espinoza Quesada Eduardo Steed</a></li>
                                   <li><a href="pdf/pdf-profes/pdf-mecatronica/CV_Zamora_Campos.pdf" target="_blank">M. en C. Zamora Campos Luis Alberto</a></li>
                                   <li><a href="pdf/pdf-profes/pdf-mecatronica/M_MEC_CV_JULIO_RAMOS.pdf" target="_blank">Dr. Ramos Fernández Julio César</a></li>
                                </ul>
                                </p>
                                <div class="col-md-7 offset-2">
                                <img alt="" class="rounded" src="images/img-mecatronica/M_MEC_IMAGEN_NUCLEO_2016.jpg" width="100%">
                                </img>
                                </div>
                            </div>
                            <div aria-labelledby="v-pills-lgac-tab" class="tab-pane fade" id="v-pills-lgac" role="tabpanel">
                                <div class="col-md-7 offset-2 mb-1">
                                <img alt="" class="rounded" src="images/img-mecatronica/M_MEC_IMAGEN_LGAC.jpg" width="100%">
                                </img>
                                </div>
                                <p>Robótica, Automatización y Control:</p>
                                <p class="text-muted text-justify">Donde se lleva a cabo investigación básica y aplicada, así como desarrollos tecnológicos y científicos concernientes a la automatización y control de procesos industriales con el apoyo de sistemas robóticos, cubriendo las necesidades de los sectores del estado de Hidalgo, en esta línea participan 4 Profesores Investigadores de Tiempo Completo.</p>
                                <p>Diseño e Innovación en Sistemas Mecatrónicos:</p>
                                <p class="text-muted text-justify">En ésta LGAC se lleva a cabo el diseño y la innovación en sistemas mecatrónicos buscando dar solución a los problemas tecnológicos del estado y del país, en esta línea participan 4 Profesores Investigadores de Tiempo Completo.</p>
                            </div>
                            <div aria-labelledby="v-pills-alumno-tab" class="tab-pane fade" id="v-pills-alumno" role="tabpanel">
                                <div class="col-md-7 offset-2 mb-1">
                                <img alt="" class="rounded wow lightSpeedIn" src="images/img-mecatronica/M_MEC_IMAGEN_ALUMNOS.jpg" width="100%">
                                </img>
                                </div>
                                <div class="card-group">
                                  <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">Generación 2015</h5>
                                      <p class="card-text">
                                        <ul class="text-muted">
                                          <li>Flores Sánchez Diego Armando</li>
                                          <li>Rodríguez Crespo Marco Antonio</li>
                                          <li>Padre Ñonthe Juan David</li>
                                          <li>Pérez Cruz Ramiro</li>
                                          <li>Reyes Montiel Christian Gerardo</li>
                                        </ul>
                                      </p>
                                    </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">Generación 2014</h5>
                                      <p class="card-text">
                                        <ul class="text-muted">
                                          <li>Cardosa Godínez Blanca</li>
                                          <li>Díaz Moreno Jorge</li>
                                          <li>Domínguez Pacheco Jorge Arturo</li>
                                          <li>Flores Romero Habacuc</li>
                                          <li>Muñoz Palacios José Ángel</li>
                                        </ul>
                                      </p>
                                    </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">Generación 2013</h5>
                                      <p class="card-text">
                                        <ul class="text-muted">
                                          <li>Ángeles Maqueda Daniel Alejandro</li>
                                          <li>González Vidal Julio César</li>
                                          <li>Hernández Hernández Jonathan</li>
                                          <li>López López Ebismar</li>
                                          <li>Luminosa Morgado González Irving</li>
                                          <li>Ortega Vargas Giobany</li>
                                          <li>Reynoso Cerón Martín</li>
                                          <li>Rodríguez Pastrana Clemente Rogelio</li>
                                          <li>Sánchez Reséndiz Bonifacio</li>
                                          <li>Santander Reyes Juan Norman</li>
                                          <li>Soto Márquez Marina</li>
                                        </ul>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <!-- 2do card group -->
                                <div class="card-group">
                                  <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">Generación 2012</h5>
                                      <p class="card-text">
                                        <ul class="text-muted">
                                          <li>Magaña Méndez Mario Alberto</li>
                                          <li>Martínez Terán Gerardo</li>
                                          <li>Monroy Cruz Ernesto</li>
                                          <li>Montufar Aguilar David Isaías</li>
                                          <li>Rodríguez Marroquín Víctor</li>
                                        </ul>
                                      </p>
                                    </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">Generación 2011</h5>
                                      <p class="card-text">
                                        <ul class="text-muted">
                                          <li>Alamilla Daniel María de los Ángeles</li>
                                          <li>Cerecero Natale Luis Fidel</li>
                                          <li>García Cruz Luis Gabriel</li>
                                          <li>Hernández Paredes José Miguel</li>
                                          <li>Lara López Joel</li>
                                          <li>Licona Rodríguez Ángel Ricardo</li>
                                          <li>Pérez Tapia Cristian Gisel</li>
                                          <li>Villagomez García Gerardo</li>
                                        </ul>
                                      </p>
                                    </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">Generación 2010</h5>
                                      <p class="card-text">
                                        <ul class="text-muted">
                                          <li>Díaz López Fabián Alfonso</li>
                                          <li>González Hernández Fernando</li>
                                          <li>González Montes de Oca Roel</li>
                                          <li>Monter Vargas José de Jesús</li>
                                          <li>Monzalvo Palafox Simón</li>
                                          <li>Pedroza Araujo Abraham Christian</li>
                                          <li>Serrano López Iván Jozael</li>
                                          <li>Serna Hernández Luis Felipe</li>
                                          <li>Sánchez Alvarado Nancy Elizabeth</li>
                                        </ul>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <!-- fin 2do card group -->
                                <div class="card-group">
                                  <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">Generación 2009</h5>
                                      <p class="card-text">
                                        <ul class="text-muted">
                                          <li>Damián Lira Raúl</li>
                                          <li>López Ortega Héctor Alonso</li>
                                        </ul>
                                      </p>
                                    </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">Generación 2008</h5>
                                      <p class="card-text">
                                        <ul class="text-muted">
                                          <li>Aguilera Jiménez Miguel Ángel</li>
                                          <li>Castro Romero Ángel de Jesús</li>
                                          <li>Hernández de Ita Marco Antonio</li>
                                          <li>Orozco Soto Santos Miguel</li>
                                        </ul>
                                      </p>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <!-- productividad -->
                            <div aria-labelledby="v-pills-productividad-tab" class="tab-pane fade" id="v-pills-productividad" role="tabpanel">
                                <div class="col-md-7 offset-2 mb-1">
                                <img alt="" class="rounded" src="images/img-mecatronica/M_MEC_IMAGEN_PRODUCTIVIDAD.jpg" width="100%">
                                </img>
                                </div>
                                <div id="accordion">
                                  <div class="card">
                                    <div class="card-header" id="headingOne">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          M. en C. Benítez Morales José Gerardo
                                        </button>
                                      </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                      <div class="card-body">
                                        <p>Artículos</p>
                                        <ul class="text-muted text-justify">
                                          <li>2015 Aumento de la estabilidad de un helicóptero de escala reducida, J. G. Benítez Morales, H. Rodríguez-Córtes, R. Castro-Linares, R. G. Hernández-García, Congreso Nacional de Control Automático, Vol.1, Pag.320-325, Memorias de congresos.</li>
                                          <li>2014 Seguimiento de la trayectoria y estabilización de la dinámica interna de un helicóptero a escala reducida mediante la técnica de seguimiento de ruta, Benítez-Morales G., Rodríguez-Cortés H., Castro-Linares R., XVI Congreso Latinoamericano de Control Automático (CLCA), Vol. , Pag.0-0, Memorias de congresos.</li>
                                          <li>2014 A New Nonlinear Controller for Trajectory Tracking of the Longitudinal Dynamics of a Small Scale Helicopter, J. G. Benítez-Morales, H. Rodríguez-Cortés, R. Castro-Linares, Journal of Intelligent & Robotic Systems, Vol.73, Pag.99-121, Revistas Indizadas.</li>
                                          <li>2013 Nonlinear Control for the Longitudinal Dynamics of a Small Scale Helicopter, J. G. Benítez- Morales, H. Rodríguez-Cortés, R. Castro-Linares, Control Conference (ECC), 2013 European, Vol.1, Pag.3870-3875, Memorias de congresos.</li>
                                          <li>2013 A static feedback stabilizer for the longitudinal dynamics of a small scale helicopter including the rotor dynamics with stabilizer bar, J. G. Benítez-Morales, H. Rodríguez-Cortés, R. Castro-Linares, Unmanned Aircraft Systems (ICUAS), 2013 International Conference on, Vol.1, Pag.634-641, Memorias de congresos.</li>
                                          <li>2012 Control No Lineal de la Dinámica Longitudinal de un Helicóptero a Escala Reducida, J. G. Benítez-Morales, H. Rodríguez-Cortés, R. Castro-Linares, AMCA, Vol.1, Pag.278-283, Memorias de congresos.</li>
                                          <li>2009 Diseño y Construcción de Máquina Roladora de Perfil Tubular Semiautomatizada, Javier Hernández Pérez, Miguel Ángel Aguilera Jiménez, Francisco Marroquín Gutiérrez, José Gerardo Benítez Morales, José Alberto Zarazúa Sánchez, Domingo Domínguez Trejo, VII Congreso Internacional sobre Innovación y Desarrollo Tecnológico, Vol. , Pag.0-0, Memorias de congresos.</li>
                                          <li>2006 Modelling of an Electrically Powered Helicopter Prototype, J. G. Benítez-Morales, R. Castro-Linares, E. Liceaga-Castro, 2006 Proceedings the International Conference on Dynamics Instrumentation and Control, Vol., Pag.0-0, Memorias de congresos.</li>
                                          <li>2005 Trajectory Tracking of the Main Rotor Speed in an Electrically Powered Helicopter Prototype, R. Castro-Linares, E. Liceaga-Castro, J. G. Benítez-Morales, Proceedings of the 2005 IEEE International Conference on Control Applications, Vol. , Pag.0-0, Memorias de congresos.</li>
                                        </ul>
                                        <p>Capítulos de libro</p>
                                        <ul class="text-muted text-justify">
                                          <li>
                                          2007 Modelling of an Electrically Powered Helicopter Prototype, Advances in Dynamics, Instrumentation and Control. Lozano, A. Rakheja, S. Chun-Yi, S., World Scientific, Vol. 2, Pags. 8, José Gerardo Benitez Morales, Rafael Castro Linares, Eduardo Liceaga Castro.
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-header" id="headingTwo">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          M. en C. Zamora Campos Luis Alberto
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                      <div class="card-body">
                                        <p>Artículos</p>
                                        <ul class="text-muted text-justify">
                                          <li>2013 Diseño de una Banda Transportadora para Manejo de Residuos Sólidos Municipales. Etapa uno. L.A. Zamora-Campos, F. Marroquín, SIMCI 2013.</li>
                                          <li>2011 Diseño, Simulación y Construcción de un Convertidor DC/DC para un Sistema de Recarga, Basado en Celdas de Combustible PEM, Grandos Pérez, Zamora Campos, SIMCI</li>
                                        </ul>
                                        <p>Capítulo de Libro</p>
                                        <ul class="text-muted text-justify">
                                          <li>
                                            2014 Celdas de Combustible, Fuentes de Energías Alternas: Teoría y Práctica. Createspace Independent Publis García A, Domínguez O, Marroquín, F, Zamora L.A.
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-header" id="headingThree">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          Dr. Campos Mercado Eduardo
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                      <div class="card-body">
                                        <ul class="text-muted text-justify">
                                          <li>2016 Control PI Difuso de Ganancias Programables para un Sistema Mecatrónico de Posicionamiento Angular-Lineal, Luis F. Cerecero-Natale, Julio C. Ramos-Fernández, Marco A. Márquez-Vera, Eduardo Campos- Mercado, COMIA 2016, Vol. , Pag.23-28, Memorias de congresos.</li>
                                          <li>2016 Control en Orientación de un Micro Vehículo Submarino Mediante un Sistema Embebido, J. Monroy, J. Torres, E. Campos, III Congreso internacional de Robótica y computación 2016, Vol. , Pag.155-161, Memorias de congresos.</li>
                                          <li>2015 Real-Time Experimental Comparison of Two Depth Control Schemes for Underwater Vehicles, ISSN:1729-8806, Divine Maalouf, Vincent Creuze, Ahmed Chemori, Ivan Torres Tamanaja, Eduardo Campos Mercado, Jorge Torres Muñoz, Rogelio Lozano and Olivier Tempier, Advanced Robotic Systems, Vol. , Pag.0-0, Revistas Indizadas.</li>
                                          <li>2015 Implementing Basic Computer Vision for LIRMIA III Autonomous Underwater Vehicle, C. Rouvière, E. Antonio, J. Monroy, E. Campos, J. Torres, Simposio Iberoamericano Multidisciplinario de Ciencias e Ingenierías, Vol. Pag.414-420, Memorias de congresos.</li>
                                          <li>2015 Set-point control of servo systems using a nonlinear PD controller, E. Campos, L.F. Cerecero, J. Díaz, M. A. Marquez, Simposio Iberoamericano Multidisciplinario de Ciencias e Ingenierías, Vol. , Pag.420-424, Memorias de congresos.</li>
                                          <li>2015 Adaptive control for hybrid underwater gliders, O. R. U. Gosebruch, J. T. Muñoz; T. Salgado-Jimenez; E. Campos Mercado; L. G. Garcia-Valdovinos., OCEANS 2015 - MTS/IEEE Washington, Vol. Pag.19-22, Memorias de congresos.</li>
                                          <li>2015 Nonlinear PD control based for depth and forward mouvements of a Micro-AUV, J. Monroy, E. Campos, J. Torres, II Congreso internacional de Robótica y computación 2015, Vol. Pag.229-235, Memorias de congresos.</li>
                                          <li>2015 AUV pipeline following by artificial visioon, E. Campos, F. Comby, V. Creuze, J. Torres., II Congreso internacional de Robótica y computación 2015, Vol. Pag.251-256, Memorias de congresos.</li>
                                          <li>2013 From PD to Nonlinear Adaptive Depth-Control of a Tethered Autonomous Underwater Vehicle, D. Maalouf, I. Tamanaja, E. Campos, A. Chemori, V. Creuze, J. Torres, R. Lozano., 5th Symposium on System Structure and Control Part of 2013 IFAC Joint Conference SSSC, Vol. , Pag.4-6, Memorias de congresos.</li>
                                          <li>2012 Embedded System for Controlling a Mini Underwater Vehicle in Autonomous Hover Mode, (DOI) 10.3182/20120403-3-DE-3010.00041., E. Campos, I. Torres, O. Garcia, J. Torres, R. Lozano., Proceedings of the 1st IFAC Conference on Embedded Systems, Computational Intelligence and Telematics in Control - CESCIT 2012, Vol.|, Pag.266-271, Memorias de congresos.</li>
                                          <li>2012 Depth Control Using Artificial Vision With Time-Delay of an AUV, DOI: 10.1109/ICEEE.2012.6421170, E. Campos, J. Torres, S. Mondie, R. Lozano, 2012 9th International Conference on Electrical Engineering, Computing Science and Automatic Control, Vol. , Pag.1-6, Memorias de congresos.</li>
                                          <li>2011 Stabilization of a Helicopter Using Optical Flow, Z. Zamudio, R. Lozano, J. Torres, E. Campos., Electrical Engineering Computing Science and Automatic Control (CCE), 2011 8th International Conference on, Vol. , Pag.1-6, Memorias de congresos.</li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-header" id="headingFour">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                          Dr. Espinoza Quesada Eduardo Steed
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                      <div class="card-body">
                                        <p>Artículos</p>
                                        <ul class="text-muted text-justify">
                                          <li>2016 Object Transportation Using a Cooperative Mobile Multi-Robot System, Abel Garcia Barrientos; Joel Lara Lopez; Eduardo Steed Espinoza; José Hoyo; Guillermo Valencia Palomo, IEEE Latin America Transactions, Vol.14, Pag.1184-1191, Revistas Indizadas.</li>
                                          <li>2016 Online UAS local path planning algorithm for outdoors obstacle avoidance based on attractive and repulsive potential fields, Extranjero, The 2016 International Conference on Unmanned Aircraft Systems, Gary Elias Dimas Flores, Sergio, Salazar Cruz Luis Rodolfo, Garcia Carrillo Rogelio Lozano, Estados Unidos.</li>
                                          <li>2016 Adaptive High Order Sliding Mode Control for Relative Positioning and Trajectory Tracking of Spacecraft Formation Flying, Extranjero, The 24th Mediterranean Conference on Control and Automation, Luis Rodolfo Garcia Carrillo, Filiberto Muñoz Palacios, Kostas Alexis , Grecia.</li>
                                          <li>2015 A UAS Obstacle Avoidance Strategy Based on Spiral Trajectory Tracking, Extranjero, International Conference on Unmanned Aircraft Systems (ICUAS), Filiberto Muñoz, Ivan Gonzalez, Sergio Salazar Cruz, Luis Rodolgo García Carrillo, Rogelio Lozano, Estados Unidos.</li>
                                          <li>2015 An Unmanned Ground Vehicles Experimental Setup for Image-Based Object Tracking, Ernesto Monroy Cruz, Abel Garcia Barrientos, Eduardo Steed Espinoza Quesada, Luis Rodolfo Garcia Carrillo and Ruben Tapia Olvera, IEEE Latin America Transactions, Vol.13, Pag.2845-2850, Revistas Indizadas.</li>
                                          <li>2015 Algebraic Dominant Pole Placement Methodology for Unmanned Aircraft Systems With Time-Delay. Por aparecer, 2015, Eduardo S. Espinoza, Luis R. García Carrillo, Adrian Ramirez, and Sabine Mondié, IEEE Transactions on Aerospace and Electronic Systems, Vol. , Pag.0-0, Revistas Indizadas.</li>
                                          <li>2015 Aerodynamic Analysis and Performance of a Mini Airplane UAV, Extranjero, The 2015 International Conference on Unmanned Aircraft Systems, Fernando Guerrero Velez, Victor Martinez Herrera, Octavio Garcia Salazar, Anand Sanchez , Estados Unidos.</li>
                                          <li>2015 Altitude control of an Unmanned Aircraft System using a Super-Twisting controller base on High.</li>
                                          <li>2015 Implementation of leader-follower linear consensus algorithm for coordination of multiple aircrafts, Extranjero, 2015 Workshop on Research, Education and Development of Unmanned Aerial Systems, Giovanny Ortega, Filiberto Muñoz, Luis R. Garcia, Patricio Ordaz, México.</li>
                                          <li>2015 On the PD+Luenberger controller/observer for the trajectory tracking of Robot Manipulators, Nacional, 12th International Conference on Electrical Engineering, Computing Science and Automatic Control (CCE), Ebismar Lopez, Patricio Ordaz , México.</li>
                                          <li>2015 Dynamical Modeling of a Multi-Rotorcraft UAS With Morphing Capabilities, Extranjero, The 2015 International Conference on Unmanned Aircraft Systems, Giovanny Ortega Vargas, Christoph Hintz, Filiberto Muñoz Palacios, Luis Rodolfo Garcia Carrillo, Estados Unidos.</li>
                                          <li>2015 Order Sliding Mode Observer, Extranjero, 2015 Workshop on Research, Education and Development of.</li>
                                          <li>2014 Multi-UAV Testbed For Aerial Manipulation Applications, Extranjero, International Conference on Unmanned Aircraft Systems, David Isaías Montufar Aguilar, Filiberto Muñoz Palacios, Octavio García Salazar, Sergio Salazar, Estados Unidos.</li>
                                          <li>2014 Global Stability of PD+ Controller With Velocity Estimation, Extranjero, Conference on Decision and Control, Patricio Ordaz Oliver, Filiberto Muñoz Palacios, Estados Unidos.</li>
                                          <li>2014 Unmanned Aerial Systems, Filiberto Muñoz, Iván González-Hernández, Sergio Salazar Antonio.</li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-header" id="headingFive">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                          Dr. Ramos Fernández Julio César
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                      <div class="card-body">
                                        <p>Artículos</p>
                                        <ul class="text-muted text-justify">
                                          <li>2015 Modelado Difuso Takagi-Sugeno para Sintonizar un Controlador por Calefacción en un Invernadero, 1. Julio C. Ramos-Fernández 2. Marco A. Márquez-Vera,  3. Luis  F. Cerecero-Natale   4.   Frédéric Lafont  5. Jean F. Balmat, Vol.92,   Pag.69-80, Revistas Indizadas.</li>
                                          <li>2015 Control   Par   Calculado   Difuso  Basado   En  Pasividad  Para   Seguimiento  De Trayectorias   De   Robots  Manipuladores, 1. S.M.   Orozco-Soto  2. Julio C. Ramos- Fernández, Research in Computing Science, Vol.91, Pag.131-141, Revistas Indizadas.</li>
                                          <li>2015 PID  Based On Attractive Ellipsoid Method For Dynamic Uncertain And External Disturbances  Rejection  In  Mechanical  Systems, Jesus Patricio Ordaz Oliver,  Eduardo Steed  Espinoza   Quesada,  Abel  Garcia  Barrientos y Julio Cesar Ramos Fernandez, Hindawi Publishing Corporation, Vol. , Pag.2-10, Revistas Indizadas.</li>
                                          <li>2013 Identificación y Control  Wavenet  de un Motor de CA. ISSN: 1697-7912, O. Islas Gomez, L.E. Ramos Velasco,  J.C. Ramos Fernandez,  J. Garcia Lamont,  M.A. Espejel Rivera, M.A.   Marquez Vera,  Revista Iberoamericana de Automática e Informática Industrial, Vol.10, Pag.269-278.</li>
                                          <li>2012 Algoritmos Wavenet con Aplicaciones en la Aproximación de Señales: Un Estudio  Comparativo.  ISSN: 1697-7912,  C. R. Domínguez  Mayorga,  M. A. Espejel Rivera, L. E. Ramos Velasco, J.  C. Ramos  Fernández,  E. Escamilla  Hernández, Revista Iberoamericana de Automática e Informática industrial, Vol.9, Pag.347-358.</li>
                                          <li>2010 Una Metodología Neurodifusa para Modelar la Evapo-Transpiración Instantánea en Invernaderos. ISSN 1405-7743, Julio  Cesar  Ramos  Fernández, Virgilio López Morales,  Frederic  Lafont,  Gilles Enea,  Jean Duplaix,  Ingeniería, Investigación y Tecnología, Vol.11, Pag.127-139.</li>
                                          <li>2008 An  Integral  Intelligent  System  For  The  Diagnosis  And  Control   Of Tomatoes   Diseases  And  Pests In Hydroponic Greenhouse. ISSN: 0957-4174, V. Lópes-Morales, O. Lópes-Ortega,   J. C.Ramos-Fernández, L.B. Muñoz, Expert Systems with Applications, Vol.02, Pag.1506-1512.</li>
                                          <li>2006 Fuzzy Model To Target Selection In Direct Marketing For Large Client And Preferences Database. ISSN:1743-5110, Julio Cesar Ramos Fernández Virgilio López Morales Gilles Enea Jean Duplaix,  International Journal Product Lifecycle Management, Inderscience Publishers, Vol.1, Pag.249-267.</li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-header" id="headingSix">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                          Dr. Trejo Macotela Francisco Rafael
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                      <div class="card-body">
                                        <p>Artículos en revista indexada</p>
                                        <ul class="text-muted text-justify">
                                          <li>Francisco R. Trejo-Macotela, Luis A. Sánchez G., Carlos Muñiz M., Alejandro Díaz S., Roberto S. Murphy A., Abel García B., Dr. J. Miguel Rocha P. "Flipped Voltage Follower based LNAs with 640MHz BW at 2.26GHz, 1.3dB NF, 1.2V Vdd, and up to 10dBm IIP3”. Indian Journal of Pure & Applied Physics (IJPAP). Vol. 53, Agosto 2015, pp. 546-552. ISSN: 0019-5596.</li>
                                          <li>Carlos Muñiz Montero, Luis A. Sánchez Gaspariano, Jonatan Cordero Hernández, Francisco R. Trejo Macotela, Roberto J. Romero y Viloria, Fernando O. González Mananilla. “A state-variable filter with 2kHz-8kHz voltage-controlled center frequency based on ALD1106 quasi-floating-gate transistors”. Revista Visión Politécnica. UPPuebla. Año 9, Núm.1. México. 2014. ISSN: 2007-221X.</li>
                                          <li>A. G. Barrientos, J. C. G. Vidal, E. S. E. Quesada, J. P. O. Oliver, F. R. Trejo-Macotela and M. O. Domínguez. “Design and Construction of Mini-Robot for Gas LP Detection Using a Mobile Device”. IEEE Latin America Transactions. 2013. ISSN: 1578-0992.</li>
                                          <li>Abel García Barrientos, Francisco R. Trejo-Macotela, Felipe Coyotl-M., Rubén Tapia-O., Hugo Romero-T. “Design and Implementation of a FLC for DC-DC Converter in a Microcontroller for PV System”. International Journal of Soft Computing and Engineering (IJSCE). 2013. ISSN: 2231-2307.</li>
                                          <li>Abel García-B., Cristian G. Pérez-T., Eduardo S. Espinoza-Q., Francisco R. Trejo-Macotela Luis E. Ramos-V., Hugo Romero-T. and Jesús M. Muñoz-P. “Comparative Study of Three Different Path Tracking Controls in Mobile Robots”. International Journal of Computer Applications. Volume 74, No. 5, July 2013. ISSN: 0975 – 8887.</li>
                                          <li>Luis A. Sánchez Gaspariano, Carlos Muñiz Montero, Efraín G. Cuautle Zacatelco, Francisco R. Trejo Macotela, Fernando O. González Manzanilla y Mario Espinosa Tlaxcaltecatl. “Filtros no lineales de máxima y mínima en modo voltaje basados en seguidores de voltaje anidados”. Revista Visión Politécnica. Año 7, Núm. 2. UPPuebla. México. 2012. ISSN: 2007-221X.</li>
                                        </ul>
                                        <p>Artículos Publicados en memorias de congresos</p>
                                        <ul class="text-muted text-justify">
                                          <li>D. Vargas-Flores, F.R. Trejo-Macotela, M.A. García-Márquez. “Enfoque teórico de la inclusión de códigos DTC en sistemas de comunicación entre automóviles V2X”. Simposio Iberoamericano Multidisciplinario de Ciencias e Ingenierías 2015. ISSN: 2007-7394.</li>
                                          <li>F. R. Trejo-Macotela, R. Hernández Osorio, M. A. Rangel Muñoz, C. A. Villarreal Bernal, J. A. Villarreal Bernal, L. A. Sánchez-Gaspariano, C. Muñiz-Montero. “Sistema de Reconocimiento Facial para Aplicaciones Biométricas Desarrollado en JAVA y Matlab”. Simposio Iberoamericano Multidisciplinario de Ciencias e Ingenierías 2014. ISSN: 2007-7394.</li>
                                          <li>Abel García-Barrientos, Filiberto Muñoz Palacios, Francisco Rafael Trejo-Macotela. “Modelado y Simulación de un Interruptor de RF Basado en MEMs de Tipo-No-Contacto para Comunicaciones Móviles de 25 a 40GHz”. Congreso Integracionista de las Ciencias y las Tecnologías Informáticas. Cuba. 2013.</li>
                                          <li>Gerardo Martínez-Teran, Abel Garcia-Barrientos, Francisco Rafael Trejo-Macotela, Felipe Cóyotl-M., Rubén Tapia-O. “Design and Implementation of a FLC for CD-CD Converters Using a Microcontroller for PV Systems”. CONIELECOMP 2013.</li>
                                          <li>F. R. Trejo-Macotela, A. García-Barrientos, A. Bautista-Flores, M. N. Gutiérrez-Mendoza, L. A. Sánchez-Gaspariano, C. Muñiz-Montero. “Controlador Digital Mediante el Protocolo DMX-512”. Simposio Iberoamericano Multidisciplinario de Ciencias e Ingenierías 2013. 23-25 septiembre 2013. ISSN: 2007-7394.</li>
                                          <li>Viridiana Jaime-Ortega, Abel García-Barrientos, Francisco Rafael Trejo-Macotela. “Modelado y Simulación de Interruptores de RF Basados en MEMS de 25 a 50 GHz para Comunicaciones Móviles”. Simposio Iberoamericano Multidisciplinario de Ciencias e Ingenierías 2013. 23-25 septiembre 2013. ISSN: 2007-7394.</li>
                                          <li>C. I. Martínez-Gómez, L. A. Sánchez-Gaspariano, C. Muñiz-Montero, F. R. Trejo-Macotela, E. Tlelo- Cuautle y R.J. Romero y Viloria. “Transmisor de conversión directa en la banda de 550KHz para comunicaciones de amplitud modulada”. Simposio Iberoamericano Multidisciplinario de Ciencias e Ingenierías 2013. 23-25 septiembre 2013. ISSN: 2007-7394.</li>
                                        </ul>
                                        <p>Libros o capítulos de libros publicados</p>
                                        <ul class="text-muted text-justify">
                                          <li>Fortino Vázquez Monroy, Abel García Barrientos, José Luis Bernal Ponce, Eduardo Steed Espinoza Quesada, Filiberto Muñoz Palacios, Francisco Rafael Trejo Macotela, Marco Antonio Márquez Vera, “Síntesis y Caracterización de Películas Delgadas de CDs para Aplicaciones Fotovoltáicas”. Fuentes de Energías Alternas: Teoría y Práctica. Createspace Independent Publish. 2014. ISBN-13: 978-1495212000, ISBN-10: 1495212009.</li>
                                          <li>Abel García-Barrientos, Francisco Rafael Trejo-Macotela, Liz del Carmen Cruz-Netro, Volodymyr Grimalsky. “A Numerical Study of Amplification of Space Charge Waves in N-InP Films”. Numerical Simulation from Theory to Industry. Editor: Mikhaylo Andriychuk. Intech. Croacia, Septiembre 2012. ISBN: 978-953-51-0749-1</li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card">
                                    <div class="card-header" id="headingSeven">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                          Dr. Vera Cárdenas Edgar Ernesto
                                        </button>
                                      </h5>
                                    </div>
                                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                                      <div class="card-body">
                                        <p>Artículos</p>
                                        <ul class="text-muted text-justify">
                                          <li>2016 Characterization and wear performance of boride phases over tool steel substrates, Edgar E Vera Cardenas, Roger Lewis, Armando I Martinez Perez, Jose Luis Bernal Ponce, Francisco J Perez Pinal, Martin Ortiz Dominguez and Eduardo D Rivera Arreola, Advances in Mechanical Engineering, Vol.8, Pag.1-10.</li>
                                          <li>2015 "A microstructure comparison of Iron borides formed on AISI1040 and D2 steels. ISSN: 1431-9276, J. L. Bernal-Ponce, A. Irvin-Martínez, E. Vera-Cárdenas, A. García-Barrientos, A. Medina-Flores, L. Béjar-Gómez, A. Juanico, S. Borjas-García,, Microscopy and Microanalysis, Vol.21, Pag.1759-1760.</li>
                                          <li>2015 Growth kinetics and mechanical properties of Fe2B layers formed on AISI D2 steel. ISSN: 0975-1017, M. Ortiz Dominguez M. Elias Espinoza M. Keddam O.A. Gomez Vargas R. Lewis E.E. Vera Cardenas J. Zuno Silva, Indian Journal of Engineering and Materials Sciences, Vol.22, Pag.231-243</li>
                                          <li>2014 A Characterization Study of Initial Gama Phase Formation Produced by Microwave, J.L. Bernal- Ponce, A. García-Barrientos, and L. Béjar-Gómez, A. Medina-Flores, E. Vera Cárdenas, Microscopy and Microanalysis.</li>
                                          <li>2015 Nonlinear Suboptimal Control for a Class of Underactuated Mechanical Systems. ISSN: 4673-7837, Bonifacio Sanchez, Patricio Ordaz, Abel Garcia-Barrientos and Edgar Vera, IEEE Journal, Vol.978, Pag.112-117.</li>
                                          <li>2013 "Study of Solid Particle Erosion on AISI 420 Stainless Steel Using Angular Silicon Carbide and Steel Round Grit Particles ISSN: 00431648, M. Vite-Torres, J.R. Laguna-Camacho, R.E. Baldenebro-Castillo, E.A. Gallardo-Hernández, E.E. Vera-Cárdenas, J. Vite-Torres, WEAR, Vol.301, Pag.383-389.</li>
                                          <li>2012 Surface and Sliding Wear Behaviour Of Different Coatings And Steels ISSN: 14057743, Edgar Vera, Manuel Vite, Roger Lewis, Ingeniería, Investigación y Tecnología, Vol.13, Pág.85-96.</li>
                                          <li>2012 A Study of the Wear Performance Of Tin, CRN and WC/C Coatings On Different Steel Substrates, ISSN: 00431648, Edgar Vera, Manuel Vite, Roger Lewis, Ezequiel Gallardo, Juan Laguna, Wear, Vol. 271, Pag.2116-2124.</li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <!-- fin productividad -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin-infoMaestria -->
            <!-- seccion -->
            <div>
                <hr class="featurette-divider">
                    <!-- Menu con todos los sitios y mini sitios de la página -->
                    <?php include '../lib18/coreFRONTx/main/tmenu-footer/menufooter.php';?>
                </hr>
            </div>
        </main>
        <footer>
            <!-- footer de gobierno del estado -->
            <?php include '../lib18/seph/hf/footer.html';?>
        </footer>
        <!-- Librerias javascript -->
        <?php include '../lib18/coreFRONTx/09js/java.html';?>
        <!-- Script para dar la animacion al boton flotante que lleva arriba -->
        <a class="back-to-top" href="#">
            Volver arriba
        </a>
        <script src="../lib18/coreFRONTx/10boton-arriba/script.js">
        </script>
        <!-- libreria Animate -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">
        </script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>
