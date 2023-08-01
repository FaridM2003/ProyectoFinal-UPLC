
<?php
require_once("cabezera.php")
?>



<!--ASIDER-->
<aside class="asider">
    <div class="card">
        <h2>Calendario Escolar</h2>
        <p><strong>Fecha:</strong> 15 de septiembre de 2023</p>
        <p><strong>Evento:</strong> Día de la Independencia</p>
        <p><strong>Descripción:</strong> Celebración del Día de la Independencia en la escuela. No hay clases.</p>
    </div>
</aside>

<!--CENTRAL-->

   <div class="main">
    <div class="ofertasEdu">
        <ul>
            <li><button id="IngenieriaSoftware"             onclick="bttonSoft()"   >Ingenieria de Software</button></li>
            <li><button id="IngenieriaMecatronica"          onclick="bttonMeca()"   >Ingenieria en Mecatronica</button></li>
            <li><button id="IngenieriaTecnologiaAmbiental"  onclick="bttonTecnoA()" >Ingeniera en Tecnologia Ambiental</button></li>
            <li><button id="IngenieriaLogistica"            onclick="bttonLogist()" >Ingenieria en Logistica y Transporte</button></li>
            <li><button id="LicenciaturaNegocios"           onclick="bttonNego()"   >Licenciatura en Negocios Internacionales</button></li>
        </ul>
    </div>
    <div class="Edu">
            <div class="idInfo">    
                <!-- INGENIERIA SOFTWARE -->
                <div id="infoIngeSoft">   
                <h3>INGENIERIA DE SOFTWARE</h3>
                <br>
                    <p>
                        En esta carrera podrás desarrollar soluciones tecnológicas que a 
                        través del uso de metodologías y herramientas, generen beneficios
                        para la empresa. Con el paso de los años estudiarás distintas
                        áreas como análisis, diseño e implementación de sistemas software;
                        administración de bases de datos, redes informáticas, seguridad en
                        aplicaciones web o móviles, entre muchas más.

                        Preparar profesionales capacitados con disciplina formada en el área de Software capaces de integrar y administrar y construcción de aplicaciones de sistemas y áreas profesionales en la programación de manera óptima a las herramientas técnicas de desarrollo de programas informáticos más conocidos como softwares.
                    </p>
                </div>
                <div id="infoIngeMeca">  
                    
                <h3>INGENIERIA DE MECATRONICA</h3>
                    <p>
                        Esta especialidad es una rama interdisciplinaria que combina las ciencias
                        biológicas con ingeniería computacional, electrónica y mec
                        atronica aplicada al control industrial, procesamiento de
                        información, gestión ambiental, transporte, logística, etc.,
                        permitiendo un amplio abanico de posibilidades profesionales.

                    </p>
                </div>
                <div id="infoIngeTecnoA">  
                <h3>INGENIERIA DE TECNOLOGIA AMBIENTAL</h3>
                    <p>
                        La Ingeniera de Tecnologia Ambiental se encarga de analizar,
                        planificar, construir, operar y mantener instalaciones tanto
                        naturales como artificiales, desde su creación inicial a su
                        posterior retirada del sistema natural. Se desarrollará mediante
                        la aplicación práctica de los conceptos fundamentales sobre el manejo
                        sostenible de recursos naturales (agua, tierra, energía).
                    </p>
                </div>
                <div id="infoIngeLogist">
                <h3>INGENIERIA DE LOGISTICA Y TRANSPORTE</h3>
                    <p>
                        Es la disciplina responsable por diseñar e implementar sistemas
                        integrados para satisfacer las necesidades de movilidad humana en todo tipo
                        de entornos urbanos o suburbanos. Con esta finalidad, bus
                        principalmente estudiantes que cursen licenciatura en ciencias
                        administrativas, comercializadoras, ingenierías civiles u
                        afines con experiencia laboral en áreas relacionadas al sector
                        logístico-transporte. El programa ofrece una formación integral
                        orientada hacia la gestión empresarial, así como habilidades
                        transversales en marketing digital, finanzas corporativas,
                        organización industrial, planeamiento estratégico, análisis
                        competitivo, etc., logrando un perfil profesional completo
                        dentro de la industria transportadora.

                    </p>
                </div>   
                    
                <div id="infoLinceNegocio"> 
                <h3>LICENCIATURA DE NEGOCIOS INTERNACIONALES</h3>
                <p>
                    La Licenciatura en Negocios Internacionais es el último paso
                    del proceso formativo y está dirigida a personas que quieren trabajar
                    globalmente y desarrollarse profesionalmente en diferentes campos
                    de actividad. Este programa prepara los futuros líderes globales
                    capaces de liderar negocios multinacionales, crear valor agregado
                    mediante tecnología innovadora, generar nuevos tipos de relaciones
                    públicas y privadas, mejorar procesos productivos y servicios
                    sociales para todos los sectores económicos, ambientales y polít
                    icos. Es ideal para las personas que desean ser agentes transformadores
                    cambiando el mundo por medio de su capacidad intelectual y creativo.
                </p>
                <p>
                    Se de nuestra misión es la formación de licenciados y su capacidad de análisis en negocios internacionales para generar un sentido profesional en el ámbito empresarial, y sean capaces de lograr negociar, administrar, gestionar y comercializar productos del mercado internacional y servicios internacionales.
                </p>
            </div>
            </div>
    </div>
   </div>

   <!--SCRIPT-->
<script>
    Software    = document.getElementById("infoIngeSoft");
    Mecatronica = document.getElementById("infoIngeMeca");
    Ambiental   = document.getElementById("infoIngeTecnoA");
    Logistica   = document.getElementById("infoIngeLogist");
    Negocios    = document.getElementById("infoLinceNegocio");
    Software.style.display="none";
    Mecatronica.style.display="none";
    Ambiental.style.display="none";
    Logistica.style.display="none";
    Negocios.style.display="none";

    function bttonSoft(){
        Software.style.display="flex";
    Mecatronica.style.display="none";
    Ambiental.style.display="none";
    Logistica.style.display="none";
    Negocios.style.display="none";
    }
    function bttonMeca(){
        Software.style.display="none";
    Mecatronica.style.display="flex";
    Ambiental.style.display="none";
    Logistica.style.display="none";
    Negocios.style.display="none";
    }
    function bttonTecnoA(){
        Software.style.display="none";
    Mecatronica.style.display="none";
    Ambiental.style.display="flex";
    Logistica.style.display="none";
    Negocios.style.display="none";
    
    }
    function bttonLogist(){
        Software.style.display="none";
    Mecatronica.style.display="none";
    Ambiental.style.display="none";
    Logistica.style.display="flex";
    Negocios.style.display="none";
    }   
    function bttonNego(){
        Software.style.display="none";
    Mecatronica.style.display="none";
    Ambiental.style.display="none";
    Logistica.style.display="none";
    Negocios.style.display="flex";
    }
</script>






<?php
require_once("footer.php")

?>