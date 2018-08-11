<?php

include_once "config.php";
$id = $_GET['id'];
$query=$class->fetchdata("DELETE FROM `crud` WHERE id='$id'");
$class->redirect("index.php");
?>