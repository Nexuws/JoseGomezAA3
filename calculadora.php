

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CALCULADORA</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='estiloCalcu.css'>
    <link rel="stylesheet" type="text/css" href="estiloCurriculum.css">
    <script src='jsCalcu.js'></script>
    
</head>

<body>

    <center>
        <br><h1>CALCULADORA</h1>
        <h2>Cantidad 1: </h2>
        <input type='text' name='entrada1' id = 'caja1' class = 'miCalcuClaseCSS'>
        <h2>Cantidad 2: </h2>
        <input type='text' name='entrada2' id = 'caja2' class = 'miCalcuClaseCSS'>
        <br><br><br><input type='submit' name='btnSuma' id = 'suma' value = 'Sumar' class="btn-abrir" onclick="suma()">
        <input type='submit' name='btnResta' id = 'resta' value = 'Restar' class="btn-abrir" onclick="resta()">
        <input type='submit' name='btnMult' id = 'multi' value = 'Multiplicar' class="btn-abrir" onclick="multiplicacion()">
        <input type='submit' name='btnDiv' id = 'div' value = 'Dividir' class="btn-abrir" onclick="division()">
        <br>
        <button onclick="RegresarVideo()" id='Regresar' class="btn-abrir">Regresar</button>
    </center>
    <script src="popup.js"></script>
</body>
</html>