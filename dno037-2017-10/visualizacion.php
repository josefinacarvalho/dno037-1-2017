<?php include('header.php');?>
<section>
<h2>Visualización</h2>
<?php
$viz = array_map('str_getcsv', file('data/flora-chilena.csv'));
array_walk($viz, function(&$a) use ($viz) {$a = array_combine($viz[0], $a);});
array_shift($viz);
$all = count($viz);
?>
<table class="table table-hover">
<tr>
  <th>Clase</th>
  <th>Orden</th>
  <th>Familia</th>
  <th>Nombre Cientifico</th>
  <th>Nombre Comun</th>
  <th>Origen</th>
  <th>Estado de Conservación</th>
</tr>

<?php for($n=0; $n < $all; $n++){?>
  <tr>
    <td><?php echo($viz[$n]["clase"]);?></td>
    <td><?php echo($viz[$n]["orden"]);?></td>
    <td><?php echo($viz[$n]["familia"]);?></td>
    <td><?php echo($viz[$n]["nombre_cientifico"]);?></td>
    <td><?php echo($viz[$n]["nombre_comun"]);?></td>
    <td><?php echo($viz[$n]["origen"]);?></td>
    <td><?php echo($viz[$n]["conservacion"]);?></td>
  </tr>
<?php };?>

</table>

</section>
<?php include('footer.php');?>
