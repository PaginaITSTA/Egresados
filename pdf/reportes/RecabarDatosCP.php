<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<form action="ReporteCP.php" method="post">
  <p>
    <label for="textfield10">Fecha de expedicón:</label>
    <input type="text" name="dateExpedicion" id="textfield10">
  </p>
  <p>
    <label for="textfield9">Nombre del Director de Vinculacion y Extencion:</label>
    <input type="text" name="nomDirectorVinculacion" id="textfield9">
  </p>
  <p>
    <label for="textfield3">Nombre del Alumno:</label>
    <input type="text" name="texNomAlumno" id="textfield3">
  </p>
  <p>
    <label for="textfield9">Numero de Control:</label>
    <input type="text" name="numControl" id="textfield9">
  </p>
  <p>
    <label for="textfield14">Carrera:</label>
    <input type="text" name="texCarreraAlumno" id="textfield14">
  </p>
  <p>
    <label for="textfield15">Especialidad:</label>
    <input type="text" name="texEspecialidad" id="textfield15">
  </p>
  <p>
    <label for="textfield">Asesor Empresarial:</label>
    <input type="text" name="texEncargado" id="textfield">
  </p>
  <p>
    <label for="textfield8">Cargo del Asesor:</label>
    <input type="text" name="puestoEncargado" id="textfield8">
  </p>
  <p>
    <label for="textfield2">Nombre de la Empresa:</label>
    <input type="text" name="texEmpresa" id="textfield2">
  </p>
  <p>Lugar de Residencia: 
    <input type="text" name="texLugar" id="textfield3">
  </p>
  <p>
    <label for="textfield11">Periodo de Inicio de Residencia :</label>
    <input type="text" name="fechaInicio" id="textfield11">
  </p>
  <p>
    <label for="textfield12">Periodo de Termino de Residencias:</label>
    <input type="text" name="fechaTermino" id="textfield12">
  </p>
  <p>
    <label for="textfield13">Fecha Límite de Residencias :</label>
    <input type="text" name="fechaLimite" id="textfield13">
  </p>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="submit" id="submit" value="Generar PDF">
  </p>
</form>
</form>
</body>
</html>