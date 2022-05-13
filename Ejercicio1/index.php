<?php
if ($_POST['ejecutar']) {
    require_once('hora.php');
    $hora = $_POST["hora"];
    $minutos = $_POST["minutos"];
    $segundos = $_POST["segundos"];
    $hora_procesada = new Hora($hora, $minutos, $segundos);
    $hora_procesada->setHora($hora);
    $hora_procesada->setMinutos($minutos);
    $hora_procesada->setSegundos($segundos);
    $h = $hora_procesada->getHora();
    $m = $hora_procesada->getMinutos();
    $s = $hora_procesada->getSegundos();
    echo $hora_procesada->getHoras();
    echo $hora_procesada->imprimirHora();
}

?>
<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>El constructor</title>
</head>

<body>
    
    <form action="" method="POST">
        <br><br>
        <label for=""><h3>ingresar valores nuevos</h3></label>
        <input type="number" name="hora">
        <input type="number" name="minutos">
        <input type="number" name="segundos">
        <br><br>
        <button type="submit" name="ejecutar" value="ejecutar">Ejecutar</button>
        <br><br>
        <input type="text" name="h" value="<?php echo $h." : ".$m." : ".$s; ?>">

    </form>


</body>

</html>