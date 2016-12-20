<?php

$categories = CategoryData::getAll();
$estado = StatusData::getAll();

?>

<div class="row">
<div class="col-md-12">
<h1>Nuevo Libro</h1>
<form class="form-horizontal" role="form" method="post" action="./?action=addbook" id="addbook">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Codigo</label>
    <div class="col-lg-10">
      <input type="text" name="id" class="form-control" id="inputEmail1" placeholder="AutoGenerado" disabled>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Titulo</label>
    <div class="col-lg-10">
      <input type="text" name="title" required class="form-control" id="inputEmail1" placeholder="Titulo">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Autor(es)</label>
    <div class="col-lg-10">
      <input type="text" name="author" required class="form-control" id="inputEmail1" placeholder="Titulo">
    </div>
  </div>

  <div class="form-group">
    <label for="sel1" class="col-lg-2 control-label">Edicion: </label>
    <div class="col-lg-2">
      <select class="form-control" name="edition" id="edition">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Categoria</label>
      <div class="col-lg-10">
        <select name="category_id" class="form-control">
           <option value="">-- SELECCIONE --</option>
             <?php foreach($categories as $p):?>
               <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
                <?php endforeach; ?>
        </select>
      </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Observaciones</label>
    <div class="col-lg-10">
    <textarea class="form-control" name="observations" placeholder="Descripcion"></textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">CD</label>
    <div class="col-lg-10">
      <div class="radio">
        <label><input type="radio" name="has_cd" value="0" checked>NO</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="has_cd" value="1" >SI</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Estado</label>
    <div class="col-lg-10">
        <select name="status_id" class="form-control">
           <option value="">-- SELECCIONE --</option>
             <?php foreach($estado as $p):?>
               <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
                <?php endforeach; ?>
        </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Libro</button>
      <button type="reset" class="btn btn-default" id="clear">Limpiar Campos</button>
    </div>
  </div>
</form>

</div>
</div>
