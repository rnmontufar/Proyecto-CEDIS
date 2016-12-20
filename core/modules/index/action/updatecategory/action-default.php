<?php

if(count($_POST)>0){
	$user = CategoryData::getById($_POST["user_id"]);
	$user->name = $_POST["name"];
	$user->descripcion = $_POST["descripcion"];
	$user->status_id = $_POST["estado"];
	$user->update();
print "<script>window.location='index.php?view=categories';</script>";


}


?>