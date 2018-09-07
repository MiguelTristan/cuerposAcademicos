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
          <!-- titulo -->
          <div class="alert alert-info text-center m-1" role="alert">
            Maestría en Biotecnología
          </div>
          <!-- fin titulo -->
          <!-- pills-nav infoMaestria -->
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
                   <div class="tab-pane fade show active" id="v-pills-objetivo" role="tabpanel" aria-labelledby="v-pills-objetivo-tab">
                     <p class="text-justify text-muted mb-2">
                     Formar recursos humanos especializados, capaces de generar conocimiento y realizar proyectos de investigación, desarrollo tecnológico y/o innovación bajo un esquema de aprovechamiento integral y sustentable de los recursos bióticos para producir bienes o servicios de alto valor agregado.
                     </p>
                     <div class="col-md-7 offset-2">
                     <img alt="" class="rounded wow bounceInRight" src="images/img-biotecnologia/M_BIO_IMAGEN_OBJETIVO.jpg" width="100%">
                     </img>
                     </div>
                   </div>


                   <div class="tab-pane fade" id="v-pills-ingreso" role="tabpanel" aria-labelledby="v-pills-ingreso-tab">
                     <p class="text-justify text-muted mb-2">
                     Para ingresar al posgrado el aspirante deberá tener conocimientos en las áreas que involucra la Biotecnología: Biología, química, matemáticas, así como también conocimientos técnicos del idioma inglés; habilidades para trabajar en equipo y de pensamiento crítico (análisis, síntesis, resolución de problemas, evaluación y toma de decisiones).
                     </p>
                     <div class="col-md-7 offset-2">
                     <img alt="" class="rounded wow flipInX" src="images/img-biotecnologia/M_BIO_IMAGEN_INGRESO.jpg" width="100%">
                     </img>
                     </div>
                   </div>


                   <div class="tab-pane fade" id="v-pills-egreso" role="tabpanel" aria-labelledby="v-pills-egreso-tab">
                     <p class="text-justify text-muted mb-2">
                     El egresado de la Maestría en Biotecnología será un profesional capacitado para realizar labores de investigación y divulgación del conocimiento; será capaz de participar en la innovación de productos y procesos a partir de metabolitos biológicos u organismos vivos; definir estrategias y desarrollar tecnología para la solución de problemas en los sectores productivos, participar en equipos multidisciplinarios de trabajo con una sólida formación tecnológica, científica y humanista con valores universales éticos de respeto al medio ambiente y a la diversidad cultural.
                     </p>
                     <div class="col-md-7 offset-2">
                     <img alt="" class="rounded wow zoomIn" src="images/img-biotecnologia/M_BIO_IMAGEN_EGRESO.jpg" width="100%">
                     </img>
                     </div>
                   </div>


                   <div class="tab-pane fade" id="v-pills-estudios" role="tabpanel" aria-labelledby="v-pills-estudios-tab">
                     <iframe id="blockrandom" name="iframe" src="http://adistancia.upp.edu.mx/posgrado2017/mapa_curricular_bio.pdf" scrolling="auto" class="wrapper" width="100%" height="500" frameborder="1">
	Esta opción no funcionará correctamente. Lamentablemente, su navegador no soporta URLs embebidas.</iframe>
                   </div>


                   <div class="tab-pane fade" id="v-pills-academico" role="tabpanel" aria-labelledby="v-pills-academico-tab">
                     <ul class="text-muted text-justify mb-2">
                        <li><a href="http://adistancia.upp.edu.mx/posgrado2017/CV_Maria%20del%20Rocio%20Ramirez%202017_Bio.pdf" target="_blank">Dra. Ramírez Vargas María del Rocío </a></li>
                        <li><a href="http://adistancia.upp.edu.mx/posgrado2017/CV_Alejandro%20Tellez%202017_Bio.pdf" target="_blank">Dr. Téllez Jurado Alejandro</a></li>
                        <li><a href="http://adistancia.upp.edu.mx/posgrado2017/CV_Yuridia%202017_Bio.pdf" target="_blank">Dra. Mercado Flores Yuridia</a></li>
                        <li><a href="http://adistancia.upp.edu.mx/posgrado2017/CV%20Miguel%20Anducho%202017_bio.pdf" target="_blank">Dr. Anducho Reyes Miguel Ángel</a></li>
                        <li><a href="http://adistancia.upp.edu.mx/posgrado2017/CV_Jorge%20Alvarez%202017_Bio.pdf" target="_blank">Dr. Álvarez Cervantes Jorge</a></li>
                        <li><a href="http://www.upp.edu.mx/posgrado/images/Maestria/Biotecnologia/Documentos/CV_BIO_PDF_2016/CV_Alvarez_Garcia_esp.pdf" target="_blank">Dra. Álvarez García Rocío</a></li>
                        <li><a href="http://adistancia.upp.edu.mx/posgrado2017/CV_Xochitl%20Tovar%202017_Bio.pdf" target="_blank">Dra. Tovar Jiménez Xóchitl</a></li>
                        <li><a href="http://adistancia.upp.edu.mx/posgrado2017/CV_Angelica%20Jimenez%202017_Bio.pdf" target="_blank">Dra. Jiménez González Angélica</a></li>
                        <li><a href="http://www.upp.edu.mx/posgrado/images/Maestria/Biotecnologia/Documentos/M_BIO_CV_SERGIO_MEDINA.pdf" target="_blank">Dr. Medina Moreno Alejandro</a></li>
                        <li><a href="http://www.upp.edu.mx/posgrado/images/Maestria/Biotecnologia/Documentos/CV_BIO_PDF_2016/CV_Villanueva-Ibanez2016.pdf" target="_blank">Dra. Villanueva Ibañez Maricela</a></li>
                        <li><a href="http://adistancia.upp.edu.mx/posgrado2017/CV_Blanca_2017_Bio.pdf" target="_blank">Dra. Jaramillo Loranca Blanca Estela </a></li>
                        <li><a href="http://www.upp.edu.mx/posgrado/images/Maestria/Biotecnologia/Documentos/CV_BIO_PDF_2016/CV_Genaro_Vargas2016.pdf" target="_blank">Dr. Vargas Hernández Genaro </a></li>
                        <li><a href="http://www.upp.edu.mx/posgrado/images/Maestria/Biotecnologia/Documentos/CV_BIO_PDF_2016/CV_Arturo_Cadena.pdf" target="_blank">Dr. Cadena Ramírez Arturo</a></li>
                      </ul>
                      <div class="col-md-7 offset-2">
                      <img alt="" class="rounded" src="images/img-biotecnologia/M_BIO_IMAGEN_NUCLEO_2016.jpg" width="100%">
                      </img>
                      </div>
                   </div>


                   <div class="tab-pane fade" id="v-pills-lgac" role="tabpanel" aria-labelledby="v-pills-lgac-tab">
                     <div class="col-md-7 offset-2 mb-1">
                     <img alt="" class="rounded" src="images/img-biotecnologia/M_BIO_IMAGEN_LGAC.jpg" width="100%">
                     </img>
                     </div>
                     <p>Aislamiento, selección y caracterización de organismos y sistemas biológicos de interés biotecnológico.</p>
                     <p class="text-muted text-justify">
                       La finalidad de esta línea es realizar la búsqueda de organismos o sistemas biológicos que otorguen beneficios importantes en áreas como la alimentación, la salud, agropecuaria, desarrollo sustentable, industrial, ecología y medio ambiente.
                     </p>
                     <p>Desarrollo, optimización y escalamiento de bioprocesos.</p>
                     <p class="text-muted text-justify">
                       Con esta línea se pretende hacer uso de procesos biotecnológicos innovadores para la obtención de productos, bienes y servicios, con especial interés en la búsqueda del valor agregado de materias primas, productos y subproductos de diferentes actividades industriales de la zona de influencia.
                     </p>
                     <p>Ingeniería y tecnología enzimática con aplicación industrial.</p>
                     <p class="text-muted text-justify">
                       Esta línea se encuentra enfocada en la búsqueda y/o mejoramiento de enzimas con diferentes aplicaciones biotecnológicas que puedan ser aplicadas en diferentes procesos productivos que beneficien al sector industrial específicamente las áreas; alimentaría, energética, agrícola, farmacéutica, textil, entre otras.
                     </p>
                     <p>Desarrollo de procesos biotecnológicos aplicados a la biorremediación, monitoreo y/o reducción de la contaminación ambiental.</p>
                     <p class="text-muted text-justify">
                       La prioridad de esta línea es buscar estrategias que permitan medir el grado de contaminación en agua, suelo y aire, así como, la utilización de procesos químico-biológicos que permitan el mejoramiento y/o recuperación de ambientes con especial énfasis en agua y suelos contaminados con hidrocarburos y metales pesados, así mismo, se buscan alternativas amigables con el ambiente para el control y manejo de plagas y enfermedades de importancia agrícola.
                     </p>
                   </div>


                   <div class="tab-pane fade" id="v-pills-alumno" role="tabpanel" aria-labelledby="v-pills-alumno-tab">
                     <div class="col-md-7 offset-2 mb-1">
                     <img alt="" class="rounded wow lightSpeedIn" src="images/img-biotecnologia/M_BIO_IMAGEN_ALUMNOS.jpg" width="100%">
                     </img>
                     </div>

                     <!-- card-generaciones -->
                     <div class="card-group">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Generación 2016</h5>
                            <p class="card-text">
                              <ul class="text-muted">
                                <li>Alonso Vargas Monserrat</li>
                                <li>Ángeles Vázquez Blanca Vianey</li>
                                <li>Balderrama Gómez Alexandra</li>
                                <li>Frausto Molina Janette</li>
                                <li>Hernández Huerta Itzel</li>
                                <li>Leyva Campohermoso Carlos Iván</li>
                                <li>López Hernández Eleazar</li>
                                <li>López Medina Emma Nallely</li>
                                <li>Monroy Oropeza Saraí Guadalupe</li>
                                <li>Reyes Cervantes Alejandro</li>
                                <li>Robles Morales Diana Laura</li>
                                <li>Velázquez De Lucio Brianda Susana</li>
                              </ul>
                            </p>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Generación 2015</h5>
                            <p class="card-text">
                              <ul class="text-muted">
                                <li>Flores García Jenny</li>
                                <li>Marcelino Pérez Edgar</li>
                                <li>Bautista Monroy Suri Sadai</li>
                                <li>Mendoza Tolentino Angélica</li>
                                <li>Lucio Ávila Pedro Gersain</li>
                                <li>Pérez Viveros Karla Jareth</li>
                                <li>Álvarez Gaona Fidel</li>
                                <li>Cruz Hernández Jarvy Francisco</li>
                                <li>Peñafiel López Fabiola</li>
                                <li>Cartagena Luna Adriana</li>
                              </ul>
                            </p>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Generación 2014</h5>
                            <p class="card-text">
                              <ul class="text-muted">
                                <li>Sánchez Maya Hasdra Elena</li>
                                <li>Tec Caamal Edgar Noé</li>
                                <li>Roa Velázquez Daniela</li>
                                <li>Marcelino Pérez Gabriel</li>
                                <li>Yañ̃ez Cruz María Guadalupe</li>
                                <li>Huerta García Antonio de Jesús</li>
                                <li>Eusebio Moreno José Carlos</li>
                                <li>Vargas Morales Antonia Karina</li>
                              </ul>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="card-group">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Generación 2013</h5>
                            <p class="card-text">
                              <ul class="text-muted">
                                <li>Pineda Muñoz Cuauhtemoc Francisco</li>
                                <li>Castañeda Cisneros Yamily Elianeth</li>
                                <li>García Rubio Diana Lesem</li>
                                <li>Fernández Rendón Carlos Leopoldo</li>
                                <li>Ángeles Pérez Oscar</li>
                              </ul>
                            </p>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Generación 2012</h5>
                            <p class="card-text">
                              <ul class="text-muted">
                                <li>Aristeo Domínguez Cynthia</li>
                                <li>Sánchez Mendoza Alma Victoria</li>
                                <li>Islas Valdez Samira</li>
                                <li>Callejas Hernández Francisco</li>
                                <li>Ibarra García Víctor Gerardo</li>
                                <li>Francisco Escudero Juan</li>
                                <li>Hernández Cruz Miguel Ángel</li>
                                <li>Ibarra Díaz Nayeli</li>
                              </ul>
                            </p>
                          </div>
                        </div>
                      </div>
                     <!-- fin card-generaciones -->
                   </div>


                   <div class="tab-pane fade" id="v-pills-productividad" role="tabpanel" aria-labelledby="v-pills-productividad-tab">
                     <div class="col-md-7 offset-2 mb-1">
                     <img alt="" class="rounded" src="images/img-biotecnologia/M_BIO_IMAGEN_PRODUCTIVIDAD.jpg" width="100%">
                     </img>
                     </div>
                     <div id="accordion">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Dra. Ramírez Vargas María del Rocío
                            </button>
                          </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                          <div class="card-body">
                            <p>Publicaciones en Revistas (Thomson JCR)</p>
                            <ul class="text-muted text-justify">
                              <li>Vital-Jacome, M., <strong>Ramirez-Vargas, R.</strong>, Dochain. Temperature effects on kinetic and stoichiometric parameters in activated sludge processes. 2017. Water Research. Publicación en revisión.</li>
                              <li><strong>Ramirez-Vargas, R.</strong>, Serrano-Silva, N., Navarro-Noya, Y. E., Alcántara-Hernández, R. J., Luna-Guido, M. Thalasso, F., Dendooven, L. 2015. 454 pyrosequencing-based characterization of the bacterial consortia in a well established nitrifying reactor. Water Science &amp; Technology. ISSN: 1996-9732.</li>
                              <li><strong>Ramirez-Vargas, R.</strong>, Vital-Jacome, M., Camacho-Perez, E., Hubbard, L., Thalasso F. 2014. Characterization of oxygen transfer in a 24-well microbioreactor system and potential respirometric applications. Journal of Biotechnology. ISSN: 0168-1656.</li>
                              <li>Esquivel-Rios, I., <strong>Ramirez-Vargas, R.</strong>, Hernandez-Martinez, G. R., Vital-Jacome, M., Ordaz, A., Thalasso, F. 2013. A microrespirometric method for the determination of stoichiometric and kinetic parameters of heterotrophic and autotrophic cultures. Biochemical Engineering Journal. ISSN: 1369-703X.</li>
                              <li>Hernandez-Paniagua, I.Y., <strong>Ramirez-Vargas, R.</strong>, Ramos-Gomez, M.S., Dendooven, L., Avelar-Gonzalez, F.J. and Thalasso, F. 2013. Greenhouse gas emissions from stabilization ponds in subtropical climate. Environmental Technology. ISSN: 1479-487X.</li>
                              <li><strong>Ramirez-Vargas, R.</strong>, Ordaz, A., Carrión, M., Hernandez-Paniagua, I.Y., Thalasso, F. 2012. Comparison of static and dynamic respirometry for the determination of stoichiometric and kinetic parameters of a nitrifying process. Biodegradation. ISSN: 1572-9729.</li>
                            </ul>
                            <p>Capítulos de libros</p>
                            <ul class="text-muted text-justify">
                              <li>Pineda Muñoz Cuauhtémoc Francisco, Ramirez-Vargas Rocio, Medina Moreno Sergio Alejandro, Villanueva Ibañez Maricela, Lucho Constantino Carlos Alexander, Trejo Aguilar Gloria Maribel, Jiménez González Angélica. Ultrasonicacación de baja frecuencia aplicada a la producción biológica de hidrogeno. 2017. Aceptado y por publicar.</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Dr. Téllez Jurado Alejandro
                            </button>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                          <div class="card-body">
                            <p>Artículos&nbsp;en&nbsp;revista&nbsp;indexada</p>
                            <ul class="text-muted text-justify">
                              <li>Castañeda-Casasola C., Arana-Cuenca A., Favela-Torres E., Anducho-Reyes M.A., González-Becerra A.E., <strong>Téllez-Jurado A.</strong> (2018). Xylanase enzymes production by <em>Aspergillus fumigatus</em> in solid state fermentation and sumerge fermentation. Rev. Mex. Ing. Quim. 17 (1), 47-61.</li>
                              <li>López-López E., Mejía O., Mercado-Flores Y., <strong>Téllez-Jurado A.</strong>, Anducho-Reyez M.A. (2017). Variation of the bacterial communities in the rhizosphere of threee species of the genus <em>Tagetes</em> (marigold) over time. Appl. Ecol Environ. Res. 15 (4), 1327-1345.</li>
                              <li>Gómez-Aldapa C.A., Portillo-Torres, L.A., Vollagómez-Ibarra, J.R., Rangel-Vargas, E., <strong>Téllez-Jurado, A</strong>., Cruz-Gálves, A.M., Castro-Rosas, J. (2017). Survival of fooborne bacteria on strawberries and antibacterial activities of <em>Hibiscus sabdariffa</em> extracs and chemical sanitizers on strawberries. J. Food Safety. 1-8. DOI: 10.1111/jfs.12378</li>
                              <li>Tovar-Jiménez X., Muro-Urista C.R., <strong>Téllez-Jurado A</strong>., Mercado-Flores Y., Abreu-Corona A., Arana-Cuenca A., (2017). Hydrolysate antimicrobial activity released from bovine whey protein concéntrate by the aspartyl protease <em>Eap</em>1 of <em>Sporisorium</em><em> reilianum</em>. Rev Mex Ing Quim. 1(1), 11-18. ISSN 1665-2738 (México).</li>
                              <li>García-Alcántara J.A., Maqueda-Gálvez A.P., <strong>Téllez-Jurado A</strong>., Hernández-Martínez R., Lizardi-Jiménez M.A., (2016). Maya crude-oil degradation by a <em>Bacillus licheniformis</em> consortium isolated from a Mexican termal source using a bubble column biorreactor. Water, Air &amp; Soil Pollution. 227(11), 413. ISSN 0049-6979 (Print), 1573-2932 (Online)</li>
                              <li>Serna-Díaz M.G., Arana-Cuenca A., Madina-Marín J., Seck-Tuoh J.C., Mercado-Flores Y., Jiménez-González A., <strong>Téllez-Jurado A</strong>. (2016). Modeling of sulfite concentration, particle size, and reaction time in lignosufonate production from barley Straw using surface methodology and artificial neural network. Bioresources. 11(4), 9219-9230. ISSN 1930-2126 (Online) (USA).</li>
                              <li>Sierra-Solache R.E., Muro-Urista C.R., Ortega-Aguila R.E., Arana-Cuenca A., <strong>Téllez-Jurado A</strong>. (2016). Application of immobilized fungi on food efluent treatment using airlift reactor. Desalination &amp; Water Treatment. 57 (27), 12743-12754. ISSN 1944-3994 (Print), 1944-3986 (Online)</li>
                              <li>Muro-Urista C, Gracida-Rodríguez J, Abreu-Corona A, Arana-Cuenca A, <strong>Téllez-Jurado A</strong>. (2016). Pigments from fungi, an apportunity of productiod for diverse applications. Biologia, 71(19), 1067-1079 (Online). ISSN 1336-9563, DOI doi.org//10.1515/biolog-2016-0144.</li>
                              <li>Mandujano-González V., <strong>Téllez-Jurado A</strong>., Anducho-Reyes A., Arana-Cuenca A., Mercado-Flores Y. (2016). Purification and characterization of the extrecellular aspartyl protease APSm1 from the phytopathogen fungus <em>Stenocarpella maydis.</em> Protein Expresion and Purification. 117, 1-5. ISSN 1046-5928 (Online). DOI: doi.org//10.1016/j.pep.2015.09.017.</li>
                              <li>Padilla-García, V., Castillo-Reyes, F., Aguilar-González, C.N., Arana-Cuenca, A., <strong>Téllez-Jurado, A</strong>., Reyes-Valdez, M.H., Rodríguez-Herrera, R. (2014). Molecular characterization of six tannase-producers <em>Aspergillus</em> strains using PCR-RFLP of ITS and IGS regions and RAPD’s. International Journal of Molecular Biology. ISSN 1422-0067 (Online), 1661-6596 (Print) .</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Dra. Mercado Flores Yuridia
                            </button>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body">
                            <p>Artículos indexados</p>
                            <ul class="text-muted text-justify">
                              <li>Tovar-Jimenez, X., Muro-Urista, C.R., Tellez-Jurado, A., <strong>Mercado-Flores, Y</strong>., Abreu-Corona, A., Arana-Cuenca, A. (2017). Hydrolysate antimicrobial activity released from bovine whey protein concentrate by the aspartyl protease eap1 of <em>Sporisorium reilianum</em>. Revista Mexicana de Ingeniería Química. 16: 11-18.</li>
                              <li>Álvarez-Cervantes, J., Domínguez-Hernández, E.M., <strong>Mercado-Flores, Y.</strong>, Díaz-Godínez, G. (2016). Mycosphere Essay 10: Properties and characteristics of microbial xylanases. Mycosphere. Doi 10.5943/mycosphere/si/3b/2.</li>
                              <li>Serna-Diaz MG, Arana-Cuenca A, Medina-Marin J, Seck-Tuoh-Mora JC, <strong>Mercado-Flores Y</strong>, Jiménez-González A, Tellez-Jurado A. (2016). Modeling of sulfite concentration, particle size, and reaction time in lignosulfonate production from barley straw using response surface methodology and artificial neural network. BioResources.Cuenca. 11(4): 9219-9230.</li>
                              <li>Álvarez-Cervantes, J., Díaz-Godínez, G., <strong>Mercado-Flores, Y.</strong>, Gupta, V.K., Anducho-Reyes, M.A. (2016). Phylogenetic analysis of β-xylanase SRXL1 of <em>Sporisorium reilianum</em> and its relationship with families (GH10 and GH11) of Ascomycetes and Basidiomycetes. Sci Rep. 6:24010. doi: 10.1038/srep24010.</li>
                              <li>Mandujano-González, V., Villa-Tanaca, L., Anducho-Reyes, M.A., <strong>Mercado-Flores, Y.</strong> (2016). Secreted fungal aspartic proteases: A review. Rev Iberoam Micol. 33: 76-82. doi:10.1016/j.riam.2015.10.003.</li>
                              <li>Mandujano-González, V., Tellez-Jurado, A., Anducho-Reyes, M.A., Arana-Cuenca, A.,&nbsp; <strong>Mercado-Flores, Y.</strong> (2016). Puriﬁcation and characterization of the extracellular aspartyl protease APSm1 from the phytopathogen fungus <em>Stenocarpella maydis</em>. Protein Expr. Purif. 117:1-5.</li>
                              <li><strong>Mercado-Flores, Y.</strong>, Cárdenas-Álvarez, I.O., Rojas-Olvera, A.V., Pérez-Camarillo, J.P., Leyva-Mir, S.G. y Anducho-Reyes, M.A. (2014). Application of <em>Bacillus subtilis</em> in the biological control of the phytopathogenic fungus <em>Sporisorium reilianum</em>. Biol Control. 76:36-40.</li>
                              <li>Hernández-Domínguez, E.M., Rios-Latorre, R.A., Álvarez-Cervantes, J., Loera-Corral, O., Román-Gutiérrez, A.D., Díaz-Godínez, G. y <strong>Mercado-Flores, Y.</strong> (2014). Xylanases, Cellulases, and Acid Protease Produced by <em>Stenocarpella maydis</em> Grown in Solid-state and Submerged Fermentation. BioResources. 9(2):2341-2348.</li>
                              <li>Mandujano-González, V., Arana-Cuenca, A.,&nbsp; Anducho-Reyes, M.A., Tellez-Jurado, A., González-Becerra A.E. y <strong>Mercado-Flores, Y</strong>. (2013). Biochemical study of the extracellular aspartyl protease Eap1 from the phytopathogen fungus <em>Sporisorium reilianum</em>. Protein Expr. Purif. 92: (2) 214-222</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingFour">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Dr. Anducho Reyes Miguel Ángel
                            </button>
                          </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                          <div class="card-body">
                            <p>Artículos</p>
                            <ul class="text-muted text-justify">
                              <li>Warbuton M., Norgaard J., Alarcón J. C., López C. G., Davenport G., Anducho-Reyes M., George M. L., Regalado E., and Dreisigacker S. (2005) CIMMYT Molecular characterization data for maize and wheat. Publicaciones CIMMYT, Int.</li>
                              <li>Cognato A. I., Jiang-Hua S., Anducho-Reyes M. A., and Owen D. R. (2005). Genetic variation and origin of red turpentine beetle (Dendroctonus valens LeConte) introduced to the People´s Republic of China. Agricultural and Forest Entomology 7:87-94.</li>
                              <li>Anducho-Reyes M. A., Cognato A. I., Hayes J. L., and Zúñiga G. (2008). Phylogeography of the bark beetle Dendroctonus mexicanus Hopkins (Coleoptera:Curculionidae: Scolytinae). Molecular Phylogenetics and Evolution 49:1055-7903.</li>
                              <li>Petatán-Sagahón I., Anducho-Reyes M.A., Silva-Rojas H.V., Arana-Cuenca A., Téllez-Jurado A., Cárdenas-Álvarez I.O., Mercado-Flores Y. Isolation of Bacteria with Antifungal Activity against the Phytopathogenic Fungi Stenocarpella maydis and Stenocarpella macrospora. International Journal of Molecular Sciences. 2011; 12(9):5522-5537.</li>
                              <li>Mandujano-González, V., Arana-Cuenca, A., Anducho-Reyes, M. Á., Téllez-Jurado, A., González-Becerra, A. E., & Mercado-Flores, Y. (2013). Biochemical study of the extracellular aspartyl protease Eap1 from the phytopathogen fungus Sporisorium reilianum. Protein expression and purification, 92(2), 214-222.</li>
                              <li>Mercado-Flores, Y., Cárdenas-Álvarez, I. O., Rojas-Olvera, A. V., Pérez-Camarillo, J. P., Leyva-Mir, S. G., & Anducho-Reyes, M. A. (2014). Application of Bacillus subtilis in the biological control of the phytopathogenic fungus Sporisorium reilianum. Biological Control, 76, 36-40.</li>
                              <li>Mandujano-González, , Téllez-Jurado, A., Anducho-Reyes, M. A., Arana-Cuenca, A., & Mercado-Flores, Y. (2016). Purification and characterization of the extracellular aspartyl protease APSm1 from the phytopathogen fungus Stenocarpella maydis. Protein expression and purification , 117, 1-5.</li>
                              <li>Mandujano-González, , Villa-Tanaca, L., Anducho-Reyes, M.A., Mercado-Flores Y. (2016) Secreted fungal aspartic proteases: A review. Revista Iberoamericana de Micología.</li>
                              <li>Álvarez-Cervantes, J., Díaz-Godínez, G., Mercado-Flores, Y., Gupta, V.K., Anducho-Reyes, M.A. (2016). Phylogenetic analysis of b-xylanase SRXL1 of Sporisorium reilianum and its relationship with families (GH10 and GH11) of Ascomycetes and Basidiomycetes. Scientific Reports 6, Article number: 24010. http://dx.doi.org/10.1038/srep24010</li>
                              <li>Zafra, G., Absalón, A.E., Anducho-Reyes, M.A., Fernandez, F.J., Cortés-Espinosa, D.V. (2017). Construction of PAH-degrading mixed microbial consortia by induced selection in soil. Chemosphere, 172, 120-126. ISSN 0045-6535, https://doi.org/10.1016/j.chemosphere.2016.12.038.</li>
                              <li>López-López, E., Mejía, O., Mercado-Flores, Y., Téllez-Jurado, A., Anducho-Reyes, M. A. (2017)  Variation of the bacterial communities in the rhizosphere of three species of the genus Tagetes (marigold) over time. Applied Ecology and Environmental Research 15(4):1327-1345. http://dx.doi.org/10.15666/aeer/1504_13271345</li>
                              <li>Castañeda-Casasola, C., Arana-Cuenca, A., Favela-Torres, E., Anducho-Reyes, M.A., González, A.E., Téllez-Jurado, A. (2018). Xylanase enzymes production by Aspergillus fumigatus in solid state fermentation and submerge fermentation. Revista Mexicana De Ingeniería Química, 17(1), 47-61.</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingFive">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              Dr. Álvarez Cervantes Jorge
                            </button>
                          </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                          <div class="card-body">
                            <p>Artículos indexados</p>
                            <ul class="text-muted text-justify">
                              <li>Luis Felipe Candia-Sanchez, <strong>Jorge Álvarez-Cervantes</strong>, Rubén Díaz, Gerardo Díaz-Godínez. (2017). Potential use of bioreactors for laccases production of basidiomycete fungi/Uso potencial de biorreactores para la producción de lacasas de hongos basidiomicetos. <em>Mexican Journal of Biotechnology </em>2(1):15-36.</li>
                              <li><strong>Álvarez-Cervantes, J.,</strong> Sánchez, C., Díaz, R., &amp; Díaz-Godínez, G. (2016). Characterization of production of laccases, cellulases and xylanases of <em>Pleurotus ostreaus</em> grown on solid-state fermentation using an inert support.&nbsp;<em>Revista Mexicana de Ingeniería Química</em>,&nbsp;<em>15</em>(2), 323-331.</li>
                              <li><strong>Álvarez-Cervantes J,</strong> Domínguez-Hernández EM, Mercado-Flores Y, Díaz-Godínez G 2016 – Mycosphere Essay 10: Properties and characteristics of microbial xylanases. Mycosphere 7(10), 1600–1619, Doi 10.5943/mycosphere/si/3b/12.</li>
                              <li><strong>Álvarez-Cervantes, J.,</strong> Díaz-Godínez, G., Mercado-Flores, Y., Gupta, V. K., &amp; Anducho-Reyes, M. A. (2016). Phylogenetic analysis of β-xylanase SRXL1 of <em>Sporisorium reilianum</em> and its relationship with families (GH10 and GH11) of Ascomycetes and Basidiomycetes.&nbsp;<em>Scientific reports</em>,&nbsp;<em>6</em>.</li>
                              <li>Hernández-Domínguez, E. M., Rios-Latorre, R. A., <strong>Álvarez-Cervantes, J.,</strong> Loera-Corral, O., Román-Gutiérrez, A. D., Díaz-Godínez, G., &amp; Mercado-Flores, Y. (2014). Xylanases, cellulases, and acid protease produced by <em>Stenocarpella maydis</em> grown in solid-state and submerged fermentation.&nbsp;<em>BioResources</em>,&nbsp;<em>9</em>(2), 2341-2358.</li>
                              <li><strong>Álvarez-Cervantes, J.,</strong> Hernández-Domínguez, E. M., Arana-Cuenca, A., Díaz-Godínez, G., &amp; Mercado-Flores, Y. (2013). Purification and characterization of xylanase SRXL1 from <em>Sporisorium reilianum</em> grown in submerged and solid-state fermentation.&nbsp;<em>BioResources</em>,&nbsp;<em>8</em>(4), 5309-5318.</li>
                            </ul>
                            <p>Solicitudes de Patentes</p>
                            <ul class="text-muted text-justify">
                              <li>Enzima con actividad xilanolítica producida por el hongo Sporisorium reilianum (Expediente: MX/a/2014/002236), Folio: MX/E/2014/013772.</li>
                              <li>Método para producir extractos enzimáticos con actividad xilanolítica libres de celulasas utilizando el hongo Stenocarpella maydis cultivado en fermentación sólida con residuos de maíz como soporte. (Expediente: MX/a/2014/013471), Folio: MX/E/2014/079949.</li>
                              <li>Método para producir extractos enzimáticos con actividad xilanolítica libres de celulasas utilizando el hongo Stenocarpella maydis cultivado en fermentación líquida y sólida utilizando medios definidos. (Expediente: MX/a/2014/013470), Folio: MX/E/2014/079948.</li>
                            </ul>
                            <p>Libros y/o capítulos de libro</p>
                            <ul class="text-muted text-justify">
                              <li><strong>Jorge Álvarez-Cervantes</strong>, Edna María Hernández-Domínguez, Maura Téllez-Téllez, Virginia Mandujano-González, Yuridia Mercado-Flores and Gerardo Díaz-Godínez. Ed. Sadia Sultan. 2016. Stenocarpella maydis and Sporisorium reilianum: two pathogenic fungi of maize. Fungal Pathogenicity. Capítulo 3, Pag. 45-60. Ed. Intech. Doi: 10.5772/62662. &nbsp;</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingSix">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              Dra. Álvarez García Rocío
                            </button>
                          </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                          <div class="card-body">
                            <p>Artículos en revista indexada</p>
                            <ul class="text-muted text-justify">
                              <li>M. Villanueva-Ibáñez, M.G. Yañez-Cruz, R. Álvarez-García, M.A. Hernández-Pérez, M.A.&nbsp; Flores-González. “Aqueous&nbsp; cornhusk&nbsp; extract–mediated&nbsp; green&nbsp; synthesis&nbsp; of&nbsp; AgCl and Ag nanoparticles”. Materials Letters, 2015, 152: 166-169. </li>
                            </ul>
                            <p>Artículos Publicados en memorias de congresos</p>
                            <ul class="text-muted text-justify">
                              <li>Y.&nbsp; E.&nbsp; Castañeda-Cisneros,&nbsp; A.&nbsp; Arana-Cuenca,&nbsp; R.&nbsp; Álvarez-García,&nbsp; A.&nbsp; D.&nbsp; Román-Gutiérrez,&nbsp; A.&nbsp; Tellez-&nbsp; Jurado.&nbsp; “Potencial&nbsp; de&nbsp; las&nbsp; pajas&nbsp; de&nbsp; cereales&nbsp; como&nbsp; sustrato&nbsp; sólido&nbsp; para&nbsp; la&nbsp; producción&nbsp; de&nbsp; xilanasas&nbsp; y&nbsp; celulasas”.&nbsp; Simposio&nbsp; Iberoamericano&nbsp; Multidisciplinario de Ciencias e Ingenierías 2015. ISSN: 2007-7394.</li>
                              <li>M.&nbsp; K.&nbsp; Cantero-Muñoz,&nbsp; K.&nbsp; García&nbsp; González,&nbsp; A.&nbsp; Cadena&nbsp; Ramírez,&nbsp; G.&nbsp; Vargas-Hernández,&nbsp;&nbsp; J.&nbsp;&nbsp; M.&nbsp;&nbsp; Torres-Valencia,&nbsp;&nbsp; J.&nbsp;&nbsp; Rodríguez&nbsp;&nbsp; Flores,&nbsp;&nbsp; R.&nbsp;&nbsp; Álvarez-García. “Búsqueda de Edulcorantes en Plantas del Género Stevia nativas del Estado de Hidalgo”.&nbsp; Simposio&nbsp; Iberoamericano&nbsp; Multidisciplinario&nbsp; de&nbsp; Ciencias&nbsp; e&nbsp; Ingenierías&nbsp; 2015. ISSN: 2007-7394.</li>
                              <li>Laura&nbsp; Itzel&nbsp; Torres&nbsp; Rubio,&nbsp; Rocío&nbsp; Álvarez&nbsp; García,&nbsp; Genaro&nbsp; Vargas&nbsp; Hernández,&nbsp; Claudia&nbsp; Velázquez&nbsp; González,&nbsp; Juan&nbsp; Antonio&nbsp; Gayosso&nbsp; de&nbsp; Lucio,&nbsp; Minarda&nbsp; de&nbsp; la&nbsp; O&nbsp; Arciniega. “Evaluación de la Toxicidad Aguda del Extracto acuoso de Alchemilla Aphanoides&nbsp;&nbsp; en&nbsp;&nbsp; ratones”.&nbsp;&nbsp; Revista&nbsp;&nbsp; atinoamericana&nbsp;&nbsp; de&nbsp;&nbsp; Química,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2014,&nbsp;&nbsp; 42&nbsp;&nbsp; (Suplemento especial). ISSN 0370-5943.</li>
                              <li>José Fermín Canales Palacios, Ana Rosa Gayosso Mexia, Rocío Álvarez García, J. Martín&nbsp; Torres&nbsp; Valencia.&nbsp; “Estudio&nbsp; químico&nbsp; y&nbsp; microbiológico&nbsp; de&nbsp; parte&nbsp; aérea&nbsp; de&nbsp; Gnaphalium semiamplexicaule”.&nbsp; Revista&nbsp; Latinoamericana&nbsp; de&nbsp; Química,&nbsp; 2013,&nbsp; 41&nbsp; (Suplemento especial). ISSN 0370-5943.</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingSeven">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                              Dra. Tovar Jiménez Xóchitl
                            </button>
                          </h5>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                          <div class="card-body">
                            <p>Artículos indexados</p>
                            <ul class="text-muted text-justify">
                              <li><strong>Tovar-Jiménez X, </strong>Arana-Cuenca A, Téllez-Jurado A, Abreu-Corona A, and Muro-Urista C. (2012). Traditional Methods for Whey Protein Isolation and Concentration: Effects on Nutritional Properties and Biological Activity. <em>J. Mex. Chem. Soc</em>. 56(4): 369-377; ISSN: 1870-249X</li>
                              <li><strong>Tovar-Jiménez X, </strong>Muro-Urista C, Téllez-Jurado A, Abreu-Corona A, Mercado-Flores Y, y Arana-Cuenca A.&nbsp; (2013). Suero lácteo: ¿Un desecho o una oportunidad?. <em>Ciencia y Desarrollo-Conacyt</em>. 39(265): 64-69: ISSN: 0185-0008</li>
                              <li><strong>Xochitl Tovar-Jiménez</strong>, José Caro-Corrales, Carlos A. Gómez-Aldapa, José Zazueta-Morales, Víctor Limón-Valenzuela, Javier Castro-Rosas, Juan Hernández-Ávila, Ernesto Aguilar-Palazuelos. (2015). Third generation snacks manufactured from orange by-products: physicochemical and nutritional characterization. Journal of Food Science and Technology. DOI: 10.1007/s13197-015-1726-2.</li>
                              <li>Rodríguez Nellybeth,&nbsp; <strong>Tovar-Jiménez Xochitl</strong>,&nbsp; Sánchez Susana Noguez Juan. (2015). Efecto del agua residual y la lombricomposta sobre las características fisicoquímicas del suelo y desarrollo del cilantro (<em>Coriandrum sativum</em>). Revista de Ciencias Naturales y Agropecuarias. 2(3): 458-467.</li>
                              <li><strong>Xochitl Tovar-Jiménez</strong>, Carlos A. Gómez-Aldapa, Ernesto Aguilar-Palazuelos, José Caro-Corrales (2016). Microstructure of a Third Generation Snack Manufactured by Extrusion from Potato Starch and Orange Vesicle Flour. International Journal of Food Processing Technology. 7: 563: doi:10.4172/2157-7110.1000563</li>
                              <li><strong>Tovar-Jiménez X, </strong>Muro-Urista C, Téllez-Jurado A, Abreu-Corona A, and Arana-Cuenca A. (2017). Hydrolysate antimicrobial activity released from bovine whey protein concentrate by the aspartyl protease eap1 of <em>Sporisorium reilianum.</em>&nbsp; 16: 11-18</li>
                              <li><strong>Tovar-Jiménez X, </strong>Muro-Urista C and Arana-Cuenca A. (2017). Optimization of the immobilization process of trypsin in calcium alginate beads. ECORFAN. (ACEPTADO).</li>
                              <li><strong>Tovar-Jiménez, Xochitl</strong>, Tellez-Jurado, Alejandro, López-Medina, Emma Nallely, Favela-Torres, Ernesto, Hernández-Aldana, Ithzmalzin. (2017). Obtención de extractos celulolíticos a partir de <em>Pleurotus ostreatus</em> empleando como sustrato lirio acuático. ECORFAN. (ACEPTADO).</li>
                            </ul>
                            <p>Solicitudes de Patentes</p>
                            <ul class="text-muted text-justify">
                              <li><strong>Tovar-Jiménez X, </strong>Muro-Urista CR, Téllez-Jurado A, Mercado-Flores Y, and Arana-Cuenca A.&nbsp; (2013). Liberación de péptidos antioxidante y antihipertensivos por hidrólisis enzimática. Patente en revisión por el Instituto Mexicano de la Propiedad Industrial (IMPI). Expediente: MX/E/2013/076161.</li>
                            </ul>
                            <p>Libro</p>
                            <ul class="text-muted text-justify">
                              <li>Luis Díaz Batalla, Susana Graciela Sánchez Herrera, <strong>Xochitl Tovar Jiménez, </strong>Nellybeth Rodríguez Martínez, Juan Noguez Estrada, Julia María Domínguez Soto, Gustavo Serrano Lora. Biotecnología y Alimentos; Temas desarrollados por los Cuerpos Académicos de las IES del Estado de Hidalgo. 2013. 1ra Edición. Universidad Politécnica de Francisco I. Madero. ISBN: 978-607-9260-05-7.</li>
                            </ul>
                            <p>Capítulo de libro</p>
                            <ul class="text-muted text-justify">
                              <li><strong>Tovar Jiménez Xochitl</strong>, Morales Martínez Y., Domínguez Rodríguez I., Serrano Lora G., Noguez Estrada J. Efecto de&nbsp; la concentración de Xoconostle y tiempo de marinado de la carne de conejo sobre las características microbiológicas. En Agrotecnología Mexicana. 2013.1ra Edición. Universidad Politécnica de Francisco I. Madero. pp. 229-232. ISBN: 978-607-9260-03-3.</li>
                              <li><strong>Tovar-Jiménez, X</strong>., Sánchez-Herrera SG, Rodríguez-Martínez N, Noguez-Estrada, J. Valor agregado en la cadena de producción cunícula. 2013. En Biotecnología y Alimentos; Temas desarrollados por los Cuerpos Académicos de las IES del Estado de Hidalgo. 1ra Edición. Universidad Politécnica de Francisco I. Madero. pp. 84-89. ISBN: 978-607-9260-05-7.</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingEight">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                              Dra. Jiménez González Angélica
                            </button>
                          </h5>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                          <div class="card-body">
                            <p>Artículos en revista indexada</p>
                            <ul class="text-muted text-justify">
                              <li>Aislamiento y análisis cualitativo de biomasa microbiana fúngica degradadora de hidrocarburos de un cenote de Quintana Roo. (<strong>2017</strong>). Rev. Int. Contam. Ambie. Ricardo Gómez-Reyes, Sergio Alejandro Medina-Moreno., Angélica Jiménez-González y Manuel Alejandro Lizardi-Jiménez. 33. 53-61</li>
                              <li>Predominant mode of diesel uptake: Direct interfacial versus emulsification in<br> multiphase bioreactor. <strong>(2016</strong>) Chemical Engineering Science. O. Angeles, S.A. Medina-Moreno, A. Jiménez-González, A. Coreño, M.A. Lizardi-Jiménez. S0009-2509(17)30162-8.</li>
                              <li>Evaluación de coeficientes volumétricos de transferencia de hidrocarburos poliaromáticos y oxígeno en sistemas multifasicos (liquido-líquido y liquido-liquido-gas): efecto de la carga volumétrica de solventes biocompatibles. (2015).<em>Revista Mexicana de </em><em>I</em><em>ngeniería </em><strong><em>Q</em></strong><em>uímica. </em>Vol. 14, No. 3 (2015) 723-734</li>
                              <li>Effectiveness of rabbit manure biofertilizer in barley crop yield <strong>(2015</strong>). Environ. Sci. Pollut Res. Samira Islas-Valdez., Carlos A. Lucho-Constantino., Rosa I. Beltrán-Hernández., René Gómez-Mercado., Gabriela A. Vázquez-Rodríguez2 &amp; Juan M. Herrera., Angélica Jiménez-González</li>
                              <li>Evaluation of polyaromatic hydrocarbon and oxygen volumetric transfer coefficient an multi-phase system (liquid-liquid and liquid-gas). <strong>(2015) </strong>Revista Mexicana de Ingeniería Química (13) 723-734 &nbsp;&nbsp;Jiménez González A., Vargas García AV., Lizardi Jiménez M.A. y Medina Moreno S.A.</li>
                              <li>A Effectiveness of rabbit manure biofertilizer in barley crop yield.&nbsp; Environmental Science Pollution Research. (<strong>2015</strong>) Islas Valdez S., Lucho Constantino C.A., Beltrán Hernández., Vázquez Rodríguez G. and Jiménez González</li>
                              <li>Hydrocarbon pollution studies of underwater sinkloles along Quintana Roo as function of tourism development in the mexican caribbean. (<strong>2014</strong>)&nbsp; Revista Mexicana de Ingeniería Química (13) 509-516. Medina Moreno S.A., Jiménez González A., Gutiérrez Rojas M. and Lizardi Jiménez M.A.</li>
                              <li>Hexadecane aqueous emulsion characterization and uptake by an oil-degrading microbial consortium. (<strong>2013</strong>)&nbsp; International biodeterioration and biodegradation. (84) pp 1-7. Medina Moreno S.A., Jiménez González A., Gutiérrez Rojas M. and Lizardi Jiménez M.A.</li>
                              <li>Modeling wastewater biodecoloration with reactive blue 4 in fixed bed bioreactor by Trametes subectypus: biokinetic, biosorption and transport. (2012), Medina Moreno S.A., Perez Cadena R., Jiménez González R., Tellez Jurado A. y Lucho Constantino C.A.</li>
                              <li>Modelado de la biodegradación en biorreactores de lodos de hidrocarburos totales del petróleo intemperizados en suelos y sedimentos. (2009) Revista Mexicana de Ingeniería Química.&nbsp; Medina Moreno S.A., Huerta Ochoa S., Jiménez González y Gutiérrez Rojas M.</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingNine">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                              Dr. Medina Moreno Alejandro
                            </button>
                          </h5>
                        </div>
                        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                          <div class="card-body">
                            <p>Artículos indexados y arbitrados en el Journal Citation Report</p>
                            <ul class="text-muted text-justify">
                              <li>Articulo JCR: “A Simple Kinetic Model for the Growth of Fe2B Layers on AISI 1026 Steel During the Powder-pack Boriding”. M. A. Flores-Rentería; M. Ortiz-Domínguez; M. Keddam; O. Damián-Mejía; M. Elias-Espinosa; M. A. Flores-González; S. A. Medina-Moreno; A. Cruz-Avilés; M. Villanueva-Ibañez. 2015. High Temperature Materials and Processes. Vol. 34 (1), p: 1–11. ISSN: 0334-6455.</li>
                              <li>Articulo JCR: “Simulation of growth kinetics of Fe2B layers formed on gray cast iron during the powder-pack boriding”.Martin Ortiz-Domínguez, Miguel Ángel Flores-Rentería, Mourad Keddam, Milton Elias-Espinosa, Omar Damián-Mejía, Jorge Iván Aldana-González, Jorge Zuno-Silva, Sergio Alejandro Medina-Moreno, José Gonzalo González-Reyes. 2014. Materials and technology. Vol.48 (6), p:905–916. ISSN 1580-2949.</li>
                              <li>Articulo JCR: “Hydrocarbon pollution studies of underwater sinkholes along quintanaroo as a function of tourism development in the mexican caribbean”. Medina-Moreno, S.A; A. Jiménez-González, M. Gutiérrez-Rojas, M.A. Lizardi-Jiménez. 2014. Revista Mexicana de Ingeniería Química. Vol. 13 (2), p: 509-516. ISSN: 1665-2738</li>
                              <li>Articulo JCR: “Effect of Biological and Chemical Pre-treatment on the Hydrolysis of Corn Leaf”. Kenia Ángeles Ramírez, Ainhoa Arana-Cuenca, Sergio Alejandro Medina Moreno, Octavio Loera-Corral, Arturo Cadena Ramírez, and Alejandro Téllez-Jurado. 2014. BioResources. Vol. 9 (4), p: 6861-6875. ISSN: 19302126.</li>
                              <li>Articulo JCR: “Hexadecane aqueous emulsion characterization and uptake by an oil-degrading microbial consortium”. Medina-Moreno, S.A; A. Jiménez-González, M. Gutiérrez-Rojas, M.A. Lizardi-Jiménez. 2013. International Biodeterioration &amp; Biodegradation. Vol. 84, p: 1-7. ISSN: 0964-8305.</li>
                              <li>Articulo JCR: “Modeling wastewater biodecolorization with reactive blue 4 in fixed bed bioreactor by Trametes subectypus: Biokinetic, biosorption and transport”. Medina-Moreno, S.A, R. Pérez-Cadena, A. Jiménez-González, A. Téllez-Jurado, C.A. Lucho-Constantino. 2012. Bioresource Technology. Vol.123, p: 452–462. ISSN: 0960-8524.</li>
                              <li>Articulo JCR: “Modeling rhamnolipids production by Pseudomonas aeruginosa from immiscible carbon source in a batch system “. Medina-Moreno, S.A; Jiménez-Islas D; Gracida-Rodríguez J.N; Gutiérrez-Rojas, M; Díaz-Ramírez I.J. 2011. International Journal of Environmental Science and Technology Vol. 8 (3), p: 471-482. ISSN: 1735-1472.</li>
                              <li>Artículo JCR: “ Aerosol composition from Tlaxcoapan, Hidalgo in Central México.” M. A. Martínez- Carrillo, C. Solís, K. Isaac-Olivé, E. Andrade. R. I. Beltrán-Hernández, S. A. Medina Moreno, G. Martínez- Resendiz, A. Ramírez Reyes, C. A. Lucho-Constantino, L. M. Del Razo. 2010. Revista Mexicana de Física. Vol. 56 (1), p:62–66. ISSN: 0035-001X.</li>
                              <li>Artículo JCR: “Propiedades, aplicaciones y producción de biotensoactivos una revisión” Jiménez- Islas, D; Medina-Moreno, S.A; Gracida-Rodríguez, J.N. 2010. Revista Internacional de Contaminación Ambiental. Vol. 26 (1), p:65-84. ISSN:0188-4999.</li>
                              <li>Artículo JCR: “ Modelado de la biodegradación en biorreactores de lodos de hidrocarburos totales del petróleo intemperizados en suelos y sedimentos” Medina Moreno S.A; Huerta Ochoa S; Lucho- Constantino C. A; Aguilera Vázquez L; Jiménez González A; Gutiérrez Rojas M. 2009. Revista Mexicana de Ingeniería Química. Vol. 8 (3), p: 245-258. ISSN: 1665-2738</li>
                              <li>Artículo JCR: “Hydrocarbon biodegradation in oxygen limited sequential batch reactors by consortium from weathered-contaminated soil” Medina-Moreno, S.A; Huerta-Ochoa, S; Gutiérrez-Rojas, M. 2005. Canadian Journal of Microbiology. Vol. 51, p: 231-239. ISSN: 0008-4166.</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTen">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                              Dra. Villanueva Ibañez Maricela
                            </button>
                          </h5>
                        </div>
                        <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                          <div class="card-body">
                            <p>Artículos en revista indexada</p>
                            <ul class="text-muted text-justify">
                              <li>J. L. Bernal, A. Irvin, E. Vera, P. N. Olvera, <em><span style="text-decoration: underline;">M. Villanueva</span></em>, C.A. Lasorsa, A. Medina, L. Bejar, S. Borjas, “Microstructural Characterization of Hardened AISI 4140 using CrN/CSi Coatings, Microsc. Microanal”. 23 (Suppl 1), 2017, doi:10.1017/S1431927617002768</li>
                              <li><em><span style="text-decoration: underline;">Maricela Villanueva-Ibáñez</span></em>, Mundo Nano – “Catálogo Nacional, Universidad Politécnica de Pachuca”, Revista Mundo Nano de la UNAM, Vol.9, No. 17, julio-diciembre, 2016.</li>
                              <li>Elvia Angelica Sanchez-Ramirez, Maria de los Angeles Hernandez-Perez, Jorge Ricardo Aguilar-Hernandez, Elia Guadalupe Palacios-Beas, <em><span style="text-decoration: underline;">Maricela Villanueva-Ibañez</span></em>, “Temperature and Deposition Time Effect on Properties and Kinetics of CdSe and CdS0.25Se0.75 Films Deposited by CBD”, Materials Research, 2016,&nbsp; DOI: http://dx.doi.org/10.1590/1980-5373-MR-2016-0728.</li>
                              <li>J. L. Bernal, A. Irvin, E. Vera, H. Abundis, <em><span style="text-decoration: underline;">M. Villanueva</span></em>, A. García, C.A. Lasorsa, A. Medina, L. Béjar, S. Borjas, “Microstructural Characterization of Hardened AISI 4140 Using TiN/SiC Coating”, Microsc. Microanal. 22 (Suppl 3), 2016. doi:10.1017/S143192761601076X.</li>
                              <li>M. A. Flores­Rentería, M. Ortiz­Domínguez, M. Keddam, O. Damián­Mejía, M. Elias­Espinosa, M. A. FloresGonzález,&nbsp; S.&nbsp; A.&nbsp; Medina­Moreno,&nbsp; A.&nbsp; Cruz­Avilés<em><span style="text-decoration: underline;">,&nbsp; M.&nbsp; Villanueva­Ibañez</span></em>,&nbsp; “A Simple Kinetic Model for the Growth of Fe2B Layers on AISI 1026 Steel during the Powder­pack Boriding”, High&nbsp; Temperature&nbsp; Materials&nbsp; and Processes, Vol.34, Pag.0­0,</li>
                              <li><em><span style="text-decoration: underline;">Villanueva-Ibáñez M.</span></em>, Yañez Cruz M.G., Álvarez García R., Hernández-Pérez M.-A., Flores-González M.-A., “Corn husk aqueous extract –mediated green synthesis of AgCl and Ag nanoparticles”, Materials Letters (2015) en corrección.&nbsp; ISSN: 0167-577X.</li>
                              <li>F. Legorreta García, Li.E. Hernández-Cruz, <em><span style="text-decoration: underline;">M. Villanueva-Ibáñez</span></em>, M.A. Flores-González, “Synthesis, characterization and termal stability of Solid soluciones Zr(Y,Fe,Mo)O2” Boletín de la Sociedad Española de Cerámica y Vidrio (2015) en corrección Rif 36/14.&nbsp; ISSN: 0366-3175.</li>
                              <li>Villanueva-Ibáñez M., Yañez Cruz M.G., Álvarez García R., Hernández-Pérez M.-A., Flores-González M.-A., “Corn husk aqueous extract- mediated Green synthesis of AgCl and Ag nanoparticles”, Materials Letters152(2015)166–169.&nbsp; ISSN: 0167-577X. http://dx.doi.org/10.1016/j.matlet.2015.03.097</li>
                              <li>F. Legorreta García, L. E. Hernández Cruz, <em><span style="text-decoration: underline;">M. Villanueva-Ibáñez </span></em>y M. A. Flores-González, “Síntesis de nanocompósitos NTC-13%ZrO2-87%Al2-2xFe2xO3”, (2014) Boletín de la Sociedad Española de Cerámica y Vidrio, 52(2), 76-80. ISSN 0366-3175.</li>
                              <li><em><span style="text-decoration: underline;">M. Villanueva-Ibáñez</span></em>, M.A. Hernández-Pérez, P.N. Rivera Arzola, M.A. Flores González, “Síntesis en medio poli-alcohólico y caracterización de Perovskitas BaHfO3 y BaZrO3” (2013) Revista Matéria-Brazil, 18 (4) 1501-1509. ISSN 1517-7076.</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingEleven">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                              Dra. Jaramillo Loranca Blanca Estela
                            </button>
                          </h5>
                        </div>
                        <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                          <div class="card-body">
                            <p>Artículos en revista indexada</p>
                            <ul class="text-muted text-justify">
                              <li>Nazario Bautista-Elivar; <strong>Blanca Estela Jaramillo-Loranca</strong>; Marcelino Aviles; F Javier Valiente-Soriano; Pablo Artal; Juan M Bueno. <strong>Photoreceptor Density in Diabetic and Control Rat Retinas Measured with Multiphoton Microscopy</strong>. <em>Investigative Ophthalmology &amp; Visual Science. </em><strong>20015, 56: 4710</strong></li>
                              <li>Jaramillo B.E., De la Cruz F., Munguía A.A., Luna C., Vargas G., Flores G., Zamudio S.R.1 and Garcés-Ramírez L. Neuromorphological and behaviorial study by administration of sigma receptor agonist 1,3-di-o-tolyl-guanidine in rats with neonatal ventral hippocampal lesión. Synapse. 2015. 69 (4): 213-225.</li>
                              <li>Blanca Estela Jaramillo, Fidel De la Cruz, Genaro Vargas, Oscar O. Morales, Gonzalo Flores, Sergio R. Zamudio, Linda Garcés-Ramírez. Differential effect on two immobility responses by chronic administration of 1, 3-di-o-tolyl-guanidine (sigma receptor agonist) in rats with neonatal ventral hippocampal lesion. Pharmacology &amp; Pharmacy, 2014, 5, 681-690.</li>
                              <li>González-Mariscal, L. Ponce, A. Jaramillo, B. E. y Alarcón L. “The tight junction protein ZO-2 has several functional nuclear export signals”. <em>Exp. Cell Res. </em>&nbsp;2006. Oct 15;312(17):3323-35.</li>
                              <li>Jaramillo, B. E.; Ponce, A.; Moreno, J.; Betanzos, A.; Huerta, G. M.; López Baygen, E. y González-Mariscal, L.&nbsp; “Characterization of the tight junction protein ZO-2 localized at the nucleus of epithelial cells”. <em>Exp. Cell Res.</em> 2004. 297: 247-258.</li>
                            </ul>
                            <p>Libros o capítulos de libros publicados</p>
                            <ul class="text-muted text-justify">
                              <li><strong>Jaramillo B.E.;</strong> Garcés-Ramírez L.; Villanueva-Ibañez M.; Vargas G.; Flores G.; Zamudio S.R.; De la Cruz F. 2016. “<strong>Efecto del agonismo de los receptores sigma 1, en la nocicepción en un modelo de esquizofrenia en rata”</strong>, Investigación Aplicada en el marco del XV aniversario de la Universidades Politécnicas. &nbsp;Editores: Monreal Ávila E. Paz Ramos M.A., Universidad Politécnica de Aguscalientes. Vol. 1, Pag. 340</li>
                              <li>Lopez-Bayghen, E.; <strong>Jaramillo, B. E.;</strong>&nbsp; Huerta, M.; Betanzos, A. y Gonzalez-Mariscal, L. 2004. <strong>“TJ proteins that make round trips to the nucleus” </strong>En Tight junctions.&nbsp; Gonzalez-Mariscal, L. editor. <strong><em>Landes Bioscience</em></strong>,&nbsp; George Town TX, USA. Capítulo 7.</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwelv">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwelv" aria-expanded="false" aria-controls="collapseTwelv">
                              Dr. Vargas Hernández Genaro
                            </button>
                          </h5>
                        </div>
                        <div id="collapseTwelv" class="collapse" aria-labelledby="headingTwelv" data-parent="#accordion">
                          <div class="card-body">
                            <p>Artículos</p>
                            <ul class="text-muted text-justify">
                              <li>Efraín Barragán, Barbara Gordillo, <strong>Genaro Vargas</strong> and Luis Velazco.&nbsp; The role of cobalt, copper, nickel, and zinc in the DNA replication inhibitory activity of p-aminophenyl triphenylporphyrin. Applied Organometallic Chemestry. 2004 Vol.18, Issue 7, pag. 311-317.</li>
                              <li>Efraín Barragán, Barbara Gordillo,<strong> Genaro Vargas</strong>, Ma. Teresa Cortez , Blanca E. Jaramillo, Saúl Villa-Treviño, Samia Fattel-Fazenda, Jaime Ortega, and Luis Velazco “DNA replication inhibition and fluorescence microscopy of non-cationic porphyrins in malignant cells” Arkivok, 2005 (vi) 436-448.</li>
                              <li><strong>Genaro Vargas</strong>, Iker S. Escalona, Magali Salas, Adolfo Sierra and Bárbara Gordillo 'Synthesis and RT Inhibitory Activity Evaluation of New Pyrimidine-Based seco-Nucleosides”&nbsp; nucleosides, ucleotides and acid nucleic acids. 25, 243-257, 2006.&nbsp;</li>
                              <li>Blanca Estela Jaramillo, Fidel De la Cruz, <strong>Genaro Vargas</strong>, Oscar O. Morales, Gonzalo Flores, Sergio R. Zamudio, Linda Garcés-Ramírez. Differential effect on two immobility responses by chronic administration of 1, 3-di-o-tolyl-guanidine (sigma receptor agonist) in rats with neonatal ventral hippocampal lesion. Pharmacology &amp; Pharmacy, 2014, 5, 681-690.</li>
                              <li>Jaramillo B.E., De la Cruz F., Munguía A.A., Luna C., <strong>Vargas G</strong>., Flores G., Zamudio S.R.1 and Garcés-Ramírez L. Neuromorphological and behaviorial study by administration of sigma receptor agonist 1,3-di-o-tolyl-guanidine in rats with neonatal ventral hippocampal lesión. Synapse. 69 (4): 213-225</li>
                            </ul>
                            <p>Patentes Otorgadas</p>
                            <ul class="text-muted text-justify">
                              <li><strong>Genaro Vargas</strong>, Iker Said y Bárbara Gordillo. Expediente. PA/a/2004/008649 No análogos de nucleósidos útiles como compuestos inhibidores retrovirales y métodos para su obtención. Registro 280254</li>
                              <li>Efraín Barragán, Bárbara Gordillo, <strong>Genaro Vargas</strong>. Expediente PA/a/2003/011108 Obtención y síntesis de porfirinil-nucleótidos neutros, y su aplicación como pro-drogas y su uso como agentes anticancerígenos y antivirales. Registro 281092</li>
                              <li>Zulydema Delgado Escamilla, Brenda Arianna Sánchez Vera, Iker S. Escalona Torres, Bárbara Gordillo Román,<strong>Genaro Vargas Hernández</strong> Síntesis de no análogos de nuecleósidos y evaluación de su capacidad inhibitoria contra la transcriptase inversa del VIH. Primer congreso de Innovación Biotecnológica, 18-20 Octubre 2012. Mazatlán Sinaloa.</li>
                              <li>Adriana Natyeli Lozano Martínez, Elizabeth Martínez Rojas, Diana Lesem García Rubio, Jesús Valdés Flores, Maricela Villanueva Ibáñez, Marco Antonio Flores González,<strong> Genaro Vargas Hernández</strong>. Nanopartículas e híbridos entre TR2O3@porfirinas con probable aplicación en terapia fotodinámica y realización de ensayos antitumorales. Primer congreso de InnoIación biotecnológica, 18-20 Octubre 2012. Mazatlán Sinaloa</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThirten">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThirten" aria-expanded="false" aria-controls="collapseThirten">
                              Dr. Cadena Ramírez Arturo
                            </button>
                          </h5>
                        </div>
                        <div id="collapseThirten" class="collapse" aria-labelledby="headingThirten" data-parent="#accordion">
                          <div class="card-body">
                            <p>Artículos indexados</p>
                            <ul class="text-muted text-justify">
                              <li>Arturo Cadena; Anne-Claire Texier; Ignacio González; Jorge Gómez (2007). <br> Qualitative&nbsp; and&nbsp; quantitative&nbsp; determination&nbsp; of &nbsp;a&nbsp; humic&nbsp; model&nbsp; compound&nbsp; in microbial&nbsp;&nbsp; cultures&nbsp;&nbsp; by&nbsp;&nbsp; cyclic&nbsp;&nbsp; voltammetry,&nbsp;&nbsp; Environmental&nbsp;&nbsp; Techonology, 8:1035-1044.</li>
                              <li>Ruby Brenes, Arturo Cadena y Rosario Ruiz-Guerrero (2011). Monitoreo de la&nbsp; concentración&nbsp; de&nbsp; nitrato&nbsp; en&nbsp; el&nbsp; acuífero&nbsp; del&nbsp; valle&nbsp; de&nbsp; puebla,&nbsp; Rev.&nbsp; Int.&nbsp; Contam. Ambie. 27(4):313-321.</li>
                              <li>Kenia&nbsp; Ángeles&nbsp; Ramírez,&nbsp; Ainhoa&nbsp; Arana-Cuenca,&nbsp; Sergio&nbsp; Alejandro&nbsp; Medina&nbsp; Moreno,&nbsp; Octavio&nbsp; Loera-Corral,&nbsp; Arturo&nbsp; Cadena&nbsp; Ramírez&nbsp; y&nbsp; Alejandro&nbsp; Téllez Jurado&nbsp; (2014).&nbsp; Effect&nbsp; of&nbsp; Biological&nbsp; and&nbsp; Chemical&nbsp; Pre-treatment&nbsp; on&nbsp; the&nbsp; &nbsp;Hydrolysis of Corn Leaf, BioResources 9(4), 6861-6875.</li>
                            </ul>
                            <p>Libros y/o capítulos de libro</p>
                            <ul class="text-muted text-justify">
                              <li>Arturo&nbsp; Cadena,&nbsp; Anne-Claire Texier,&nbsp; Flor&nbsp; de&nbsp; Maria&nbsp; Cuervo-Lopez,&nbsp; Ignacio&nbsp; González,&nbsp;&nbsp; Jorge&nbsp;&nbsp; Gómez,&nbsp;&nbsp; (2006)&nbsp;&nbsp; Estudio&nbsp;&nbsp; comparativo&nbsp;&nbsp; del&nbsp;&nbsp; efecto&nbsp;&nbsp; de&nbsp;&nbsp; quinonas&nbsp; y&nbsp; potenciales&nbsp; eléctricos&nbsp; en&nbsp; la&nbsp; oxidación&nbsp; de&nbsp; compuestos&nbsp; fenólicos&nbsp; por cultivos desnitrificantes, Environmental Biotechnology and Engineering. <br> Proceedings&nbsp;&nbsp; of&nbsp;&nbsp; the&nbsp;&nbsp; Second&nbsp;&nbsp; International&nbsp;&nbsp; Meeting&nbsp;&nbsp; on&nbsp;&nbsp; Environmental&nbsp;&nbsp; Biotechnology and Engineering (2IMEBE). Edited by: Poggi-Varaldo et. al.</li>
                              <li>Bautista-Monroy&nbsp;&nbsp; SS,&nbsp;&nbsp; Medina-Moreno&nbsp;&nbsp; SA,&nbsp;&nbsp; Cadena-Ramírez&nbsp;&nbsp; A.&nbsp;&nbsp; (2016).&nbsp;&nbsp; Cultivo&nbsp; Masivo&nbsp; de&nbsp; Microalgas.&nbsp; Perspectivas&nbsp; en&nbsp; el&nbsp; Estado&nbsp; de&nbsp; Hidalgo.&nbsp; en&nbsp; Biotecnología&nbsp; y&nbsp; Alimentos&nbsp; en&nbsp; Hidalgo:&nbsp; Transitando&nbsp; a&nbsp; la&nbsp; Bioeconomía.&nbsp; Editado por Luis Díaz Batalla, Carlos Alberto Gómez Aldapa, Javier Castro Rosas y Alejandro Téllez Jurado. Amalgama Arte Editorial. ISBN. 978-607-96797-1-2</li>
                              <li>Pérez-Viveros&nbsp; KJ,&nbsp; Téllez-Jurado&nbsp; A.,&nbsp; Gómez-Aldapa&nbsp; C.A.,&nbsp; Díaz-Batalla&nbsp; l.,&nbsp; Cadena-Ramírez&nbsp;&nbsp; A.&nbsp;&nbsp; (2016).&nbsp;&nbsp; Acuacultura;&nbsp;&nbsp; La&nbsp;&nbsp; Pesca&nbsp;&nbsp; Tierra&nbsp;&nbsp; Adentro.&nbsp;&nbsp; Perspectivas&nbsp; en&nbsp; el&nbsp; Estado&nbsp; de&nbsp; Hidalgo.&nbsp; en&nbsp; Biotecnología&nbsp; y&nbsp; Alimentos&nbsp; en&nbsp; Hidalgo:&nbsp; Transitando&nbsp; a&nbsp; la&nbsp; Bioeconomía.&nbsp; Editado&nbsp; por&nbsp; Luis&nbsp; Díaz&nbsp; Batalla, Carlos&nbsp; Alberto&nbsp; Gómez&nbsp; Aldapa,&nbsp; Javier &nbsp;Castro&nbsp; Rosas&nbsp; y&nbsp; Alejandro&nbsp; Téllez&nbsp; Jurado. Amalgama Arte Editorial. ISBN. 978-607-96797-1-2. Pg 121</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                   </div>
                </div>
              </div>
            </div>
          </div>
          <!-- fin pills-info -->
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
