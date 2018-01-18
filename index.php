
<?
ini_set('display_errors', '1');
error_reporting(E_ALL);
$debug=(isset($_GET["debug"])?$_GET["debug"]:false);
if(!isset($gobase)){$gobase="";}
?>

<html>
<head>

<style>
<?php include 'main.css'; ?>
</style>
</head>

<div class="topnav">
  <a class="active" href="http://fcc-physics-events.web.cern.ch/fcc-physics-events/">Home</a>
  <a href="#about">About</a>
  <a href="secure_email_form.php">Contact</a>
  </div>
</div>



<body>


</body>
<?php include 'menu.php'; ?>

<p>FCC simulation based on madgraph gridpacks or standalone Pythia8</p>

<footer>
<p>Created by Clement Helsens</p>
</footer>   

   </html>	
   

