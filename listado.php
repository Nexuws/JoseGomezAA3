<?php
$file = simplexml_load_file("lista.xml");
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" type="text/css" href="estiloVideo.css">
    <!--<link rel="stylesheet" type="text/css" href= "estiloTabla.css">-->
</head>

<body>
    <center>
        <h1>Lista de Estudiantes UNL</h1>
    </center>
    <div>
        <?php
        echo ('<table id = tabla align:center>');
        echo ('<tr>');
        echo ('<th> Cédula  </th>');
        echo ('<th> Nombres  </th>');
        echo ('<th> Apellidos  </th>');
        echo ('<th> Celular  </th>');
        echo ('</tr>');

        foreach ($file->estudiante as $UNL) {

            echo ('<tr>');
            echo ('<td> ' . $UNL->cedula . ' </td>');
            echo ('<td> ' . $UNL->nombre . ' </td>');
            echo ('<td> ' . $UNL->apellido . ' </td>');
            echo ('<td> ' . $UNL->celular . ' </td>');
            echo ('</tr>');
        }

        echo ('</table>');
        ?>
        </estudiantes>
        <center>

            <button onclick="RegresarVideo()" id='Regresar' class="btn-abrir">Regresar</button>

        </center>
        <script src="popup.js"></script>

</body>