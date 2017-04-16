<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<form action="ReportePDF.php" method="post">
  <p>
    <label for="date">Fecha:</label>
    <input type="date" name="dateExpedicion" id="date">
  </p>
  <p>
    <label for="textfield">Persona encargada:</label>
    <input type="text" name="texEncargado" id="textfield">
  </p>
  <p>
    <label for="textfield8">puesto Encargado:</label>
    <input type="text" name="puestoEncargado" id="textfield8">
  </p>
  <p>
    <label for="textfield2">Empresa de residencia:</label>
    <input type="text" name="texEmpresa" id="textfield2">
  </p>
  <p>Lugar de residencia: 
    <input type="text" name="texLugar" id="textfield3">
  </p>
  <p>
    <label for="textfield4">Nombre alumno:</label>
    <input type="text" name="texNomAlumno" id="textfield4">
  </p>
  <p>
    <label for="textfield7">Numero de control:</label>
    <input type="text" name="numControl" id="textfield7">
  </p>
  <p>
    <label for="textfield5">Carrera:</label>
    <input type="text" name="texCarreraAlumno" id="textfield5">
  </p>
  <p>
    <label for="textfield6">Especialidad del alumno:</label>
    <input type="text" name="texEspecialidad" id="textfield6">
  </p>
  <p>
    <label for="date2">periodo de inicio de residencia:</label>
    <input type="date" name="fechaInicio" id="date2">
  </p>
  <p>
    <label for="date3">Periodo de termino de residencias:</label>
  <input type="date" name="fechaTermino" id="date3">
</p>
  <p>
    <label for="date4">Fecha limite de residencias:</label>
    <input type="date" name="fechaLimite" id="date4">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Generar PDF">
  </p>
</form>
</form>
</body>
</html>