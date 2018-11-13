<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar proceso</title>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php require ("view/html/genery/menu.php");?>
<form class="formulario" method="post">
    <h2>Formulario de modificación de proceso</h2>
    <p> Los campos con <span class="import">*</span> son obligatorios </p>
    <div id="_AJAX_"></div>
    <div class="form-group">
        <label>Número de proceso<span class="import">*</span></label>
        <input type="text" class="proceso" id="process" maxlength="8">
    </div>
    <div class="form-group">
        <label>Descripción<span class="import">*</span></label>
        <textarea  class="descripcion" id="description" maxlength="200" rows="2"></textarea>
        <!--<input type="text" class="descripcion" id="description">-->
    </div>
    <div class="form-group">
        <label>Fecha de creación<span class="import">*</span></label>
        <input type="text" id="date">
    </div>
    <div class="form-group">
        <label>Sede<span class="import">*</span></label>
        <select id="sede">
            <option>Seleccione</option>
            <option>Bogotá</option>
            <option>México</option>
            <option>Peru</option>
        </select>
    </div>
    <div class="form-group">
        <label>Presupuesto<span class="import">*</span></label>
        <div class="pesos">
            <span>$</span>
            <input type="text" id="presupuesto">
            <span>.00</span>
        </div>
    </div>
    <button id="btn-create">Crear proceso</button>
</form>
<script src="view/js/edit.js"></script>
<?php require ("view/html/genery/footer.php");?>
</body>
</html>