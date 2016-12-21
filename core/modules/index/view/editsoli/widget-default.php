<?php
$soli = SolicitudData::getById($_GET["id"]);
$book = $soli->getBook();
$estado =StatusData::getAll();
?>

<div class="row">
<div class="col-md-12">
<h1><?php echo $book->title; ?> <small>Editar Estado</small></h1>
<form class="form-horizontal" role="form" method="post" action="./?action=updatesolicitud">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Codigo</label>
    <div class="col-lg-10">
      <?php echo $soli->id; ?>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Titulo del Libro</label>
    <div class="col-lg-10">
      <?php echo $book->title; ?>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">DNI</label>
    <div class="col-lg-10">
      <?php echo $soli->dni; ?>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">CUI</label>
    <div class="col-lg-10">
      <?php echo $soli->cui; ?>
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Estado</label>
       <div class="col-lg-10">
           <select name="status_id" class="form-control">
                 <?php foreach($estado as $p):?>
                   <option value="<?php echo $p->id; ?>" <?php if($soli->status_id==$p->id){ echo "selected"; }?>><?php echo $p->name; ?></option>
                  <?php endforeach; ?>
           </select>
       </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id" value="<?php echo $soli->id; ?>">
      <button type="submit" class="btn btn-success">Actualizar Solicitud</button>
      <button type="reset" class="btn btn-default" id="clear">Limpiar Campos</button>
    </div>
  </div>
</form>

</div>
</div>
