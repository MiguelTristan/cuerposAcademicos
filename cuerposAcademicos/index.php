<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include ('./dotk/00head/analitycs.html'); ?>
        <?php include ('./dotk/00head/cabecera.html'); ?>
        <?php include ('./dotk/00head/estilos.html'); ?>
        <!-- libreria Animate-css -->
        <link href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css" rel="stylesheet">
        </link>
    </head>
    <body>
        <a id="arriba">
        </a>
        <header>
            <!-- Logos e imagen de hidalgo -->
            <?php include ('../lib18/seph/hf/header.html'); ?>
            <nav>
                <!-- Menu principal superior -->
                <?php include ('../lib18/coreFRONTx/01header/nav/menu-superior/menu.html'); ?>
            </nav>
        </header>
        <!-- Menu menu-pegajoso DarkDesign -->
        <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>
        <main class="main container">
            <div class="alert alert-info text-center m-1 animated zoomInDown" role="alert">
                Bienvenidos sean todas y todos ustedes a este espacio de comunicación
            </div>
            <div class="text-muted text-justify">
                <p>
                    la Dirección de Posgrado de la Universidad Politécnica de Pachuca pone a disposición de la comunidad universitaria interesada en conocer información general de su oferta educativa y de las actividades académicas que en esta dirección se realizan para los Programas Educativos de Doctorado en Biotecnología, Maestría en Biotecnología, Maestría en Mecatrónica, Maestría en Tecnologías de la Información y Comunicaciones y Maestría en Enseñanza de las Ciencias. Hagan suyo este espacio, el cual crecerá con sus comentarios y participación.
                </p>
            </div>
            <!-- Slide  -->
            <div class="carousel slide col-md-8 offset-md-2" data-ride="carousel" id="carouselExampleIndicators">
                <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators">
                    </li>
                    <li data-slide-to="1" data-target="#carouselExampleIndicators">
                    </li>
                    <li data-slide-to="2" data-target="#carouselExampleIndicators">
                    </li>
                    <li data-slide-to="3" data-target="#carouselExampleIndicators">
                    </li>
                    <li data-slide-to="4" data-target="#carouselExampleIndicators">
                    </li>
                    <li data-slide-to="5" data-target="#carouselExampleIndicators">
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img alt="First slide" class="d-block w-100" src="./images/img-slide/header2.jpg">
                        </img>
                    </div>
                    <div class="carousel-item">
                        <img alt="Second slide" class="d-block w-100" src="./images/img-slide/header3.jpg">
                        </img>
                    </div>
                    <div class="carousel-item">
                        <img alt="Third slide" class="d-block w-100" src="./images/img-slide/header4.jpg">
                        </img>
                    </div>
                    <div class="carousel-item">
                        <img alt="Third slide" class="d-block w-100" src="./images/img-slide/header5.jpg">
                        </img>
                    </div>
                    <div class="carousel-item">
                        <img alt="Third slide" class="d-block w-100" src="./images/img-slide/header6.jpg">
                        </img>
                    </div>
                    <div class="carousel-item">
                        <img alt="Third slide" class="d-block w-100" src="./images/img-slide/header7.jpg">
                        </img>
                    </div>
                </div>
                <a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button">
                    <span aria-hidden="true" class="carousel-control-prev-icon">
                    </span>
                    <span class="sr-only">
                        Previous
                    </span>
                </a>
                <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button">
                    <span aria-hidden="true" class="carousel-control-next-icon">
                    </span>
                    <span class="sr-only">
                        Next
                    </span>
                </a>
            </div>
            <!-- fin slide -->
            <!-- mision, vision -->
            <nav>
                <div class="nav nav-tabs m-3" id="nav-tab" role="tablist">
                    <a aria-controls="nav-objetivo" aria-selected="true" class="nav-item nav-link active" data-toggle="tab" href="#nav-objetivo" id="nav-objetivo-tab" role="tab">
                        <i class="fas fa-chess">
                        </i>
                        Objetivos
                    </a>
                    <a aria-controls="nav-mision" aria-selected="false" class="nav-item nav-link" data-toggle="tab" href="#nav-mision" id="nav-mision-tab" role="tab">
                        <i class="fas fa-flag">
                        </i>
                        Misión
                    </a>
                    <a aria-controls="nav-vision" aria-selected="false" class="nav-item nav-link" data-toggle="tab" href="#nav-vision" id="nav-vision-tab" role="tab">
                        <i class="fas fa-low-vision">
                        </i>
                        Visión
                    </a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div aria-labelledby="nav-objetivo-tab" class="tab-pane fade show active" id="nav-objetivo" role="tabpanel">
                    <p>
                        Generales
                    </p>
                    <p class="text-muted text-justify">
                        La Unidad Politécnica de Innovación y Desarrollo Empresarial (UPINNEM), tiene como objetivo Fomentar y Promover el Espíritu Emprendedor, Innovación, Gestión y Desarrollo Tecnológico, así como la Incubación de Empresas, fortaleciendo al desarrollo de nuestra zona de influencia y del Estado.
                    </p>
                    <p>
                        Particulares
                    </p>
                    <ul class="text-muted text-justify">
                        <li>
                            Fortalecer la planeación, organización, gestión y evaluación colegiada de los programas de posgrado de la UPPachuca.
                        </li>
                        <li>
                            Fomentar la vinculación e internacionalización de los programas de posgrado de la UPPachuca.
                        </li>
                        <li>
                            Ofertar programas de posgrado reconocidos por su calidad a través del reconocimiento del Padrón Nacional de Posgrados de CONACyT.
                        </li>
                    </ul>
                    <div class="col-md-6">
                        <img alt="" class="rounded offset-md-6 wow fadeInDownBig" src="images/OBJETIVOS.jpg" width="100%">
                        </img>
                    </div>
                </div>
                <div aria-labelledby="nav-mision-tab" class="tab-pane fade" id="nav-mision" role="tabpanel">
                    <p class="text-muted text-justify">
                        La Dirección de Posgrado de la Universidad Politécnica de Pachuca coordina, conduce y gestiona programas de Posgrado pertinentes en el estado y el país, mediante trabajo en colaboración, respeto al medio ambiente y optimización de recursos, privilegiando la excelencia en la investigación con aplicación básica y desarrollo tecnológico, para incidir en la calidad de sus Programas Académicos que garanticen la alta especialización de los profesionistas, competentes, emprendedores e investigadores calificados con valores universales para contribuir al desarrollo sustentable, social y económico del país.
                    </p>
                    <div class="col-md-6">
                        <img alt="" class="rounded offset-md-10 wow jello" src="images/MISION.jpg" width="100%"/>
                    </div>
                </div>
                <div aria-labelledby="nav-vision-tab" class="tab-pane fade" id="nav-vision" role="tabpanel">
                    <p class="text-muted text-justify">
                        La Dirección de Posgrado de la Universidad Politécnica de Pachuca gestiona procesos de calidad académica con la finalidad de proyectar sus programas educativos en los más altos estándares nacionales e internacionales de calidad, pertinencia y equidad mediante la ejecución de actividades de investigación, innovación, docencia y vinculación para la formación integral de egresados con plena orientación a las necesidades del desarrollo económico, social y productivo regional, nacional e internacional.
                    </p>
                    <div class="col-md-6">
                        <img alt="" class="rounded offset-md-10 wow zoomInUp" src="images/VISION.jpg" width="100%"/>
                    </div>
                </div>
            </div>
            <!-- fin mision, vision -->
            <!-- seccion -->
            <div>
                <hr class="featurette-divider">
                    <!-- Menu con todos los sitios y mini sitios de la página -->
                    <?php include ('../lib18/coreFRONTx/main/tmenu-footer/menufooter.php'); ?>
                </hr>
            </div>
        </main>
        <footer>
            <!-- footer de gobierno del estado -->
            <?php include ('../lib18/seph/hf/footer.html'); ?>
        </footer>
        <!-- Librerias javascript -->
        <?php include ('../lib18/coreFRONTx/09js/java.html'); ?>
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
