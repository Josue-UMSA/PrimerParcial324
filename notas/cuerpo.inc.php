<?php
include "../sql/conexion.inc.php";	
$persona = mysqli_fetch_array(mysqli_query($con, "select * from persona where ci='".$_SESSION['ci']."'"));
$resultado = mysqli_query($con, "select * from NOTA where ci='".$_SESSION['ci']."'");
?>

<div class="table-responsive">
	<p><strong>CI:</strong> <?=$persona[0]?></p>
	<p><strong>Nombre:</strong> <?=$persona[1]?></p>
	<p><strong>Fecha de Nacimiento:</strong> <?=$persona[2]?></p>
	<p>
		<strong>Departamento:</strong> <?php  
			switch ($persona[3]) {
				case '01':
					echo "Chuquisaca";
					break;
				case '02':
					echo "La Paz";
					break;
				case '03':
					echo "Cochabamba";
					break;
				case '04':
					echo "Oruro";
					break;
				case '05':
					echo "Potosí";
					break;
				case '06':
					echo "Tarija";
					break;
				case '07':
					echo "Santa Cruz";
					break;
				case '08':
					echo "Beni";
					break;
				case '09':
					echo "Pando";
					break;
				
			}
		?>
	</p>
	<table class="table table-striped table-hover ">
	  <caption>Notas</caption>
	  <thead class="thead-dark|thead-light">
	    <tr>
	      <th scope="col">SIGLA</th>
	      <th scope="col">Nota 1</th>
	      <th scope="col">Nota 2</th>
	      <th scope="col">Nota 3</th>
	      <th scope="col">Nota Final</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php 
		while ($fila = mysqli_fetch_array($resultado))
		{
		echo "<tr>";
		echo "<th>$fila[1]</th>";
		echo "<td>$fila[2]</td>";
		echo "<td>$fila[3]</td>";
		echo "<td>$fila[4]</td>";
		$bg=($fila[5]>50)?'bg-success':'bg-danger';
		echo "<td class='$bg'>$fila[5]</td>";
		echo "</tr>";
		}
		 ?>
	  </tbody>
	</table>
</div>