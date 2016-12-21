<?php $categoria = CategoryData::getById($_GET["id"]);
$estado =StatusData::getAll();
?>

<div class="row">
<div class="col-md-12">
<h1><?php echo $categoria->name; ?> <small>Ver Categoria</small></h1>
<form class="form-horizontal" role="form" method="post" action="./?action=updatebook" id="addbook">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre</label>
    <div class="col-lg-10">
      <?php echo $categoria->name; ?>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descripcion</label>
    <div class="col-lg-10">
      <?php echo $categoria->description; ?>
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Estado</label>
    <div class="col-lg-10">
      <?php foreach($estado as $p):?>
          <?php if($categoria->status_id==$p->id){ echo $p->name; }?>
      <?php endforeach; ?>
    </div>
  </div>

</form>

</div>
</div>
