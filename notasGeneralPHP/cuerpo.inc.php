<?php
include "../sql/conexion.inc.php";	
$resultado = mysqli_query($con, "select sigla,nota_final,departamento from NOTA,persona where NOTA.ci=persona.ci");
$agr=[];
$dept=[];
while ($fila = mysqli_fetch_array($resultado))
		{
			$agr[$fila[0]][$fila[2]]+=1;
			$agr[$fila[0]][$fila[2].'N']+=$fila[1];
			$dept[$fila[2]]+=1;
		}
		ksort($dept);
?>

<h4>Notas con PHP</h4>

<div class="table-responsive">
	<table class="table table-striped table-hover ">
	  <caption>Promedio de Notas</caption>
	  <thead class="thead-dark|thead-light">
	    <tr>
	      <th scope="col">SIGLA</th>
	      <?php  
	      	while ($d = current($dept))
			{
				switch (key($dept)) {
					case '01':
						echo ($d!=0)?'<th scope="col">CH</th>':"";
						break;
					case '02':
						echo ($d!=0)?'<th scope="col">LP</th>':"";
						break;
					case '03':
						echo ($d!=0)?'<th scope="col">CB</th>':"";
						break;
					case '04':
						echo ($d!=0)?'<th scope="col">OR</th>':"";
						break;
					case '05':
						echo ($d!=0)?'<th scope="col">PT</th>':"";
						break;
					case '06':
						echo ($d!=0)?'<th scope="col">TJ</th>':"";
						break;
					case '07':
						echo ($d!=0)?'<th scope="col">SC</th>':"";
						break;
					case '08':
						echo ($d!=0)?'<th scope="col">BE</th>':"";
						break;
					case '09':
						echo ($d!=0)?'<th scope="col">PD</th>':"";
						break;
				}
				next($dept);
			}
	      ?>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php
		while ($fila = current($agr))
		{
			echo "<tr>";
			echo "<th>".key($agr)."</th>";
			echo ($fila['01']!=0)?"<td>".($fila['01N']/$fila['01'])."</td>":(($dept['01']>0)?"<td>-</td>":"");
			echo ($fila['02']!=0)?"<td>".($fila['02N']/$fila['02'])."</td>":(($dept['02']>0)?"<td>-</td>":"");
			echo ($fila['03']!=0)?"<td>".($fila['03N']/$fila['03'])."</td>":(($dept['03']>0)?"<td>-</td>":"");
			echo ($fila['04']!=0)?"<td>".($fila['04N']/$fila['04'])."</td>":(($dept['04']>0)?"<td>-</td>":"");
			echo ($fila['05']!=0)?"<td>".($fila['05N']/$fila['05'])."</td>":(($dept['05']>0)?"<td>-</td>":"");
			echo ($fila['06']!=0)?"<td>".($fila['06N']/$fila['06'])."</td>":(($dept['06']>0)?"<td>-</td>":"");
			echo ($fila['07']!=0)?"<td>".($fila['07N']/$fila['07'])."</td>":(($dept['07']>0)?"<td>-</td>":"");
			echo ($fila['08']!=0)?"<td>".($fila['08N']/$fila['08'])."</td>":(($dept['08']>0)?"<td>-</td>":"");
			echo ($fila['09']!=0)?"<td>".($fila['09N']/$fila['09'])."</td>":(($dept['09']>0)?"<td>-</td>":"");
			echo "</tr>";
		next($agr);
		}
		 ?>

	  </tbody>
	</table>

</div>

<!-- forma completa
<div class="table-responsive">
	<table class="table table-striped table-hover ">
	  <caption>Promedio de Notas</caption>
	  <thead class="thead-dark|thead-light">
	    <tr>
	      <th scope="col">SIGLA</th>
			<th scope="col">CH</th>
			<th scope="col">LP</th>
			<th scope="col">CB</th>
			<th scope="col">OR</th>
			<th scope="col">PT</th>
			<th scope="col">TJ</th>
			<th scope="col">SC</th>
			<th scope="col">BE</th>
			<th scope="col">PD</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php /*
		while ($fila = current($agr))
		{
			echo "<tr>";
			echo "<th>".key($agr)."</th>";
			echo ($fila['01']!=0)?"<td>".($fila['01N']/$fila['01'])."</td>":"<td>-</td>";
			echo ($fila['02']!=0)?"<td>".($fila['02N']/$fila['02'])."</td>":"<td>-</td>";
			echo ($fila['03']!=0)?"<td>".($fila['03N']/$fila['03'])."</td>":"<td>-</td>";
			echo ($fila['04']!=0)?"<td>".($fila['04N']/$fila['04'])."</td>":"<td>-</td>";
			echo ($fila['05']!=0)?"<td>".($fila['05N']/$fila['05'])."</td>":"<td>-</td>";
			echo ($fila['06']!=0)?"<td>".($fila['06N']/$fila['06'])."</td>":"<td>-</td>";
			echo ($fila['07']!=0)?"<td>".($fila['07N']/$fila['07'])."</td>":"<td>-</td>";
			echo ($fila['08']!=0)?"<td>".($fila['08N']/$fila['08'])."</td>":"<td>-</td>";
			echo ($fila['09']!=0)?"<td>".($fila['09N']/$fila['09'])."</td>":"<td>-</td>";
			echo "</tr>";
		next($agr);
		}*/
		 ?>
	  </tbody>
	</table>

</div>-->