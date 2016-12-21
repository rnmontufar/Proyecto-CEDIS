<?php
$devo = DevolucionData::getById($_GET["id"]);
$book = $devo->getBook();
$estado =StatusData::getAll();
?>

<div class="row">
<div class="col-md-12">
<h1><?php echo $book->title; ?> <small>Editar Estado</small></h1>
<form class="form-horizontal" role="form" method="post" action="./?action=updatedevo">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Codigo</label>
    <div class="col-lg-10">
      <?php echo $devo->id; ?>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Titulo</label>
    <div class="col-lg-10">
      <?php echo $book->title; ?>
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Estado</label>
       <div class="col-lg-10">
           <select name="status_id" class="form-control">
                 <?php foreach($estado as $p):?>
                   <option value="<?php echo $p->id; ?>" <?php if($devo->status_id==$p->id){ echo "selected"; }?>><?php echo $p->name; ?></option>
                  <?php endforeach; ?>
           </select>
       </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id" value="<?php echo $devo->id; ?>">
      <button type="submit" class="btn btn-success">Actualizar devolucion</button>
      <button type="reset" class="btn btn-default" id="clear">Limpiar Campos</button>
    </div>
  </div>
</form>

</div>
</div>
