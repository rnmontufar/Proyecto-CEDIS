<?php

if(count($_POST)>0){
$r = SolicitudData::getById($_POST["id"]);
$r->status_id = $_POST["status_id"];
$r->update();

Core::alert("Actualizado exitosamente!");
print "<script>window.location='./index.php?view=soli';</script>";

}

?>