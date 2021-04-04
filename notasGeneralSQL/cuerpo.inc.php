<?php
include "../sql/conexion.inc.php";
$sql="
SELECT n.sigla 'SIGLA',SUM(n.CH) 'CH',SUM(n.LP) 'LP',SUM(n.CB) 'CB',SUM(n.OR) 'OR',SUM(n.PT) 'PT',SUM(n.TJ) 'TJ',SUM(n.SC) 'SC',SUM(n.BE) 'BE',SUM(n.PD) 'PD'
FROM(
SELECT sigla,
avg(CASE WHEN departamento='01' THEN nota_final else 0 end) 'CH',
avg(CASE WHEN departamento='02' THEN nota_final else 0 end) 'LP',
avg(CASE WHEN departamento='03' THEN nota_final else 0 end) 'CB',
avg(CASE WHEN departamento='04' THEN nota_final else 0 end) 'OR',
avg(CASE WHEN departamento='05' THEN nota_final else 0 end) 'PT',
avg(CASE WHEN departamento='06' THEN nota_final else 0 end) 'TJ',
avg(CASE WHEN departamento='07' THEN nota_final else 0 end) 'SC',
avg(CASE WHEN departamento='08' THEN nota_final else 0 end) 'BE',
avg(CASE WHEN departamento='09' THEN nota_final else 0 end) 'PD'
FROM persona,nota
WHERE persona.ci = nota.ci
group by sigla,departamento) n
group by n.sigla";

$resultado = mysqli_query($con, $sql);
?>

<h4>Notas con SQL</h4>
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
	  	<?php 
		while ($fila = mysqli_fetch_array($resultado))
		{
			echo "<tr>";
			echo "<th>$fila[0]</th>";
			echo "<td>$fila[1]</td>";
			echo "<td>$fila[2]</td>";
			echo "<td>$fila[3]</td>";
			echo "<td>$fila[4]</td>";
			echo "<td>$fila[5]</td>";
			echo "<td>$fila[6]</td>";
			echo "<td>$fila[7]</td>";
			echo "<td>$fila[8]</td>";
			echo "<td>$fila[9]</td>";
			echo "</tr>";
		}
		 ?>
	  </tbody>
	</table>

</div>
