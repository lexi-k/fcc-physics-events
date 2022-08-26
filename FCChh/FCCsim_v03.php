<html>
<head>
<title>FCC-hh full simulation events</title>

<style>
<?php include '../style/main.css'; ?>
</style>
</head>

<?php
$txt_file    = file_get_contents('../data/FCChh/FCCsim_v03.txt');
$rows        = explode("\n", $txt_file);
?>

<?php include 'topbar_fcchh.php'; ?>

<body>

 
<?php



$lname=array('NO','Dir','Nevents','Nfiles','Neos','Nbad', 'Size(GB)','aleksa','azaborow','cneubuse','djamin','helsens','jhrdinka','jkiesele','novaj','selvaggi','vavolkl');



$NbrCol 	= count($lname); // $NbrCol : le nombre de colonnes

foreach($rows as $row => $data)
  {
    //get row data
    $row_data = explode(',,', $data);

    for ($i=0; $i<$NbrCol-1; $i++)
      {
        $info[$row][$lname[$i+1]] = $row_data[$i]; 
      }
  }

$NbrLigne 	= count($info);  // $NbrLigne : le nombre de lignes

?>

<?php include '../search.php'; ?>


<h2>FCC-hh full Simulation v03</h2>
<input type="text" id="myInput" onkeyup="search()" placeholder="Search for names.." title="Type in a name">
<table id="myTable">
  <thead>
  <tr class="header">

  <?php
  for ($i=0; $i<$NbrCol; $i++)
    {
      ?>
      <th> <?php 
      echo $lname[$i] ;
      ?> 
      </th>
      <?php
    }
?>

  </tr>
</thead>
<tbody>

<?php
$no 	= 1;
$totale 	= 0;
$totalf 	= 0;

for ($i=0; $i<$NbrLigne-1; $i++) { 
  echo '<tr >';
  for ($j=0; $j<$NbrCol; $j++) {
    if ($j==0)echo '<td>'.$no.'</td>';
    else echo '<td>'.$info[$i][$lname[$j]].'</td>';
  }
  echo  '</tr>';
  $no++;
}
?>
</tbody>

<!--tfoot>
  <tr>
  <th colspan="4">TOTAL</th>
  <th><?=number_format($totale)?></th>
  <th><?=number_format($totalf)?></th>

  </tr>
</tfoot-->
</table>
</body>
</html>

