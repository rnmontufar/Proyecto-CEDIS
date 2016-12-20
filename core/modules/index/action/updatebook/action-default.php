<?php

if(count($_POST)>0){
$r = BookData::getById($_POST["id"]);
$r->title = $_POST["title"];
$r->author = $_POST["author"];
$r->edition = $_POST["edition"];
$r->category_id = $_POST["category_id"]!="" ? $_POST["category_id"] : "NULL";
$r->observations = $_POST["observations"];
$r->has_cd = $_POST["has_cd"];
$r->status_id = $_POST["status_id"]!="" ? $_POST["status_id"] : "NULL";
$r->update();


Core::alert("Actualizado exitosamente!");
print "<script>window.location='./index.php?view=books';</script>";

}


?>