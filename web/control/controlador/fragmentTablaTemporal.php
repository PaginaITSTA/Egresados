<?php
		include "../../src/mx/edu/itsta/Controlador/Buss.php";
		$claseBuss = new Buss();
?>

<table id="tablaEncargado" class="highlight responsive-table">
<h3 id="tituloTablaEncargado">Tabla de peticiones para ingreso al sistema.</h3>
	<thead>
		<tr>
			<th>Numero de control</th>
			<th>Nombre</th>
			<th>Teléfono</th>
			<th>Celular</th>
			<th>Correo</th>
			<th>Sexo</th>
			<th>Tipo de usuario</th>
			<th>Aporbar ingreso</th>
			<th>No aprobar ingreso</th>
		</tr>
	</thead>
	
	<!--
		<button onClick="">No aprobar</button>
		<input onClick="" />
	-->
	
	<tbody>
	<?php
		$tablaTemporal = $claseBuss->BussVerTablaTemporal();
		
		foreach($tablaTemporal as list($a, $b, $c, $d, $e, $f, $g)){
			echo "<tr>
				<td>$a</td>
				<td>$b</td>
				<td>$c</td>
				<td>$d</td>
				<td>$e</td>
				<td>$f</td>
				<td>$g</td>
				<td>
					<p>
      					<input onClick=\"\" type=\"checkbox\" id=\"".$a."aprobado\" />
      					<label for=\"".$a."aprobado\">Aprobar</label>
    				</p>
				</td>
				<td>
					<p>
      					<input type=\"checkbox\" id=\"".$a."desAprobado\" />
      					<label for=\"".$a."desAprobado\">Desaprobar</label>
    				</p>
				</td>
			  </tr>";
		}
	?>
		
	</tbody>
</table>