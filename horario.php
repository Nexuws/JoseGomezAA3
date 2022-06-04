<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css"-->
    <link rel="stylesheet" type="text/css" href="estiloVideo.css">
</head>

<body>
    <div class="container" background-color="#ffffff">
        <div class="section">
            <center>
                <h1><b>HORARIO</b></h1>
                <button class="btn-abrir" id="boton"
                    style="background-color: #07038b; border-radius: 12px; margin-bottom: 10px; font-weight: bold;">Horario</button>
            </center>

            <table style="background-color: rgba(255, 255, 255, 0.808);">
                <thead>
                    <tr>
                        <th>
                            <center><b>HORA</b></center>
                        </th>
                        <th><b>LUNES</b></th>
                        <th><b>MARTES</b></th>
                        <th><b>MIERCOLES</b></th>
                        <th><b>JUEVES</b></th>
                        <th><b>VIERNES</b></th>
                    </tr>
                </thead>
                <tbody id="res">

                </tbody>
            </table>
        </div>
    </div>

    <div>
        <center>
            <h1>Materias Quinto Ciclo</h1>
        </center>
        <h2>Fundamentos de Redes</h2>
        La asignatura de Fundamentos de Redes de comunicaciones, perteneciente al Ciclo V ciclo de la Carrera en
        computación tiene como propósito facilitar al estudiante información teórica,
        métodos y técncias sobre los fenómenos que giran en todo proceso de comunicación de datos, desde el origen y
        destino, dividiendo este proceso en niveles o capas de acuerdo a los
        modelos de referencia, estándares y protocolos actuales que ringen el mundo de las redes de comunicaciones.
        <h2>Desarrollo basado en Plataformas</h2>
        Formar profesionales con capacidades científico, técnicas y humanistas en los campos de estudio de las
        tecnologías web y móviles, para el desarrollo de competencias que le permitan
        la implementación de propuestas que contribuyan a la solución de los problemas en el manejo de la información
        <h2>Sistemas Digitales</h2>
        Sistemas Digitales es una asignatura de formación profesional, forma parte del plan de estudios de la carrera de
        Computación, impartida en el quinto ciclo. Es un curso teórico-práctico
        que permite obtener sólidos conocimientos para diseño de sistemas embebidos, combinando las mejores prácticas de
        programación y análisis de arquitecturas de microcontroladores, para realizar aplicaciones en varios sectores
        tecnológicos. Además se introducirá al uso de RTOS (Real Time Operating Systems) para microcontroladores y
        aplicaciones M2M (Machine to Machine).
        Los conocimientos, destrezas y habilidades adquiridas en esta asignatura permiten sentar las bases para el
        itinerario 3 (Computación Aplicada): Internet of Things, además permitirán
        analizar, diseñar, implementar y evaluar nuevas tecnologías de sistemas embebidos basados en microcontroladores.
        Al finalizar la asignatura, los estudiantes presentarán un proyecto de sistema embebido programado con ANSI C,
        armado en un circuito físico.
        <h2>Simulacion</h2>
        La asignatura tiene como objetivo el orientar a los estudiantes de ingeniería de Computación en el ámbito
        científico académico para que el profesional en formación tenga la capacidad
        de implementar en los diferentes lenguajes de programación modelos matemáticas para simular diferentes eventos
        que suceden a su alrededor.
        <h2>Analisis Numerico</h2>
        Esta asignatura trata sobre la teoría y los algoritmos propios para el desarrollo de métodos numéricos que
        permiten resolver problemas de ingeniería con exactitud controlada y un
        soporte computacional, profundizando en la resolución de ecuaciones no lineales, sistemas de ecuaciones
        lineales, interpolación, diferenciación e integración y resolución de ecuaciones
        diferenciales ordinarias y parciales.
    </div>
    <br>
    <script src="leerhorario.js"></script>
    <center>
        <br><br> <br><br>
        <button onclick="RegresarVideo()" id='Regresar' class="btn-abrir">Regresar</button>

    </center>
    <script src="popup.js"></script>
</body>

</html>