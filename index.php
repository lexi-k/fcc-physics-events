
<?
ini_set('display_errors', '1');
error_reporting(E_ALL);
$debug=(isset($_GET["debug"])?$_GET["debug"]:false);
if(!isset($gobase)){$gobase="";}
?>

<html>
<head>

<style>
<?php include 'style/main.css'; ?>
</style>
</head>


<?php include 'topbar.php'; ?>


<body>


</body>

<p>FCC simulation based on madgraph gridpacks or standalone Pythia8</p>

<footer>
<p>Created by Clement Helsens</p>
</footer>   

   </html>	
   

