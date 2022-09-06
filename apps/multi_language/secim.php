<?php
session_start();
$gelenDilSecimi = $_GET["DilSecimi"];
$_SESSION["SiteDili"] = $gelenDilSecimi;
header("Location:multi_language.php");
exit();
?>