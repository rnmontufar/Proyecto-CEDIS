<?php
$book = BookData::getById($_GET["id"]);
$categories = CategoryData::getAll();
$estado =StatusData::getAll();
?>

<div class="row">
<div class="col-md-12">
<h1><?php echo $book->title; ?> <small>Detalles del Libro</small></h1>
<form class="form-horizontal" role="form" method="post" action="./?action=updatebook" id="addbook">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Codigo</label>
    <div class="col-lg-10">
      <?php echo $book->id; ?>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Titulo</label>
    <div class="col-lg-10">
      <?php echo $book->title; ?>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Autor(es)</label>
    <div class="col-lg-10">
      <?php echo $book->author; ?>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Edicion</label>
    <div class="col-lg-10">
      <?php echo $book->edition; ?>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Categoria</label>
    <div class="col-lg-10">
      <?php foreach($categories as $p):?>
          <?php if($book->category_id==$p->id){ echo $p->name; }?>
      <?php endforeach; ?>
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Observaciones</label>
    <div class="col-lg-10">
      <?php echo $book->observations; ?>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">CD</label>
    <div class="col-lg-10">
      <?php if($book->has_cd == 0){echo "NO";}else {echo "SI";}  ?>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Estado</label>
    <div class="col-lg-10">
      <?php foreach($estado as $p):?>
          <?php if($book->status_id==$p->id){ echo $p->name; }?>
      <?php endforeach; ?>
    </div>
  </div>

</form>

</div>
</div>
