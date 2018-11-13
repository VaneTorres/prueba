<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Procesos</title>
    <link rel="stylesheet" href="view/css/Pstyle.css">
</head>
<body>
<?php require ("view/html/genery/menu.php");?>
<div class="container">
    <table id="procesos" method="get">
        <tr>
            <th>Numero de proceso</th>
            <th>Descripción</th>
            <th>Fecha de creación</th>
            <th>Sede</th>
            <th>Presupuesto (Pesos) </th>
            <th>Presupuesto (Dolar) </th>
            <th></th>
        </tr>
        <?php include("core/models/functions/goInfo.php");?>

    </table>
</div>
</body>
</html>