<?php
		include "../../src/mx/edu/itsta/Controlador/Buss.php";
		$claseBuss = new Buss();
?>

<table id="tablaAlumnosOculta" class="highlight responsive-table">
<h3 id="tituloTablaAlumnos" >Tabla de alumnos en el sistema.</h3>
	<thead>
		<tr>
			<th>Numero de control</th>
			<th>Nombre</th>
			<th>Carrera</th>
			<th>E-mail</th>
			<th>Teléfono</th>
			<th>Celular</th>
			<th>Tipo de egreso</th>
			<th>Sexo</th>
			<th>Tipo de usuario</th>
		</tr>
	</thead>
	
	<tbody>
	<?php
		$tablaTemporal = $claseBuss->BussVerTablaAlumnos();
		
		foreach($tablaTemporal as list($a, $b, $c, $d, $e, $f, $g, $h, $i)){
			echo "<tr>
				<td>$a</td>
				<td>$b</td>
				<td>$c</td>
				<td>$d</td>
				<td>$e</td>
				<td>$f</td>
				<td>$g</td>
				<td>$h</td>
				<td>$i</td>
			  </tr>";
		}
	?>
		
	</tbody>
</table>