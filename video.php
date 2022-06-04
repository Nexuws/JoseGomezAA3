<!Doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>LOGIN</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- CSS -->
    <link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' type='text/css' media='screen' href='estiloVideo.css'>
</head>


<body>
    <center>
        <h1>GIFS</h1>
        <img src="Media/hacker-hackerman.gif" alt="" width="300" height="200">
        <img src="Media/hackerman-break.gif" alt="" width="300" height="200">
        <img src="Media/hackerman-rami.gif" alt="" width="300" height="200">
        <br></br>
    </center>

    <h1 style="text-align:center" color="white">Reproductor de Video</h1>
    <div>
        <video class='center' width="600" height="340" id="video1">
            <source src="Media/rick.mp4" type="video/mp4">
            <source src="Media/rick.mp4" type="video/webm">
        </video>
    </div>

    <div style="text-align:center;">
        <button onclick="playPause()">&#9658;/||</button>
        <button onclick="stop()">&#9726;</button>
        <button onclick="skip(-10)">&lt;&lt;</button>
        <button onclick="skip(10)">&gt;&gt;</button>
    </div>
    <script>

        var miVideo = document.getElementById('video1');

        function playPause() {
            if (miVideo.paused) {
                miVideo.play();
            } else {
                miVideo.pause();
            }
        }

        function stop() {
            miVideo.pause();
            miVideo.currentTime = 0;
        }

        function skip(value) {
            miVideo.currentTime += value;
        }

    </script>

    <center>
        <br>
        <h1>Botones</h1>
        <br></br>
        <button onclick="Alumnos()" id='Alumnos' class="btn-abrir">Observar Lista de Alumnos</button>
        <button onclick="Curriculum()" id='Curriculum' class="btn-abrir">Observar Curriculum</button>
        <button onclick="Calculadora()" id='Calculadora' class="btn-abrir">Calculadora</button>
        <button onclick="Horario()" id='Horario' class="btn-abrir">Horario_AJAX</button>
        <br>
        <button onclick="Regresar()" id='Regresar' class="btn-abrir">Regresar</button>
    </center>
    <script src='popup.js'></script>
</body>

</html>