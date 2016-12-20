<?php

if(!empty($_POST)){
$r = new BookData();
$r->title = $_POST["title"];
$r->author = $_POST["author"];
$r->edition = $_POST["edition"];
$r->category_id = $_POST["category_id"]!="" ? $_POST["category_id"] : "NULL";
$r->observations = $_POST["observations"];
$r->has_cd = $_POST["has_cd"];
$r->status_id = $_POST["status_id"]!="" ? $_POST["status_id"] : "NULL";
$r->add();
}
//Core::alert("Agregado exitosamente!");
Core::redir("./index.php?view=books");
?>