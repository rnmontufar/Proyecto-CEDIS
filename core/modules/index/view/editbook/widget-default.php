<?php
$book = BookData::getById($_GET["id"]);
$categories = CategoryData::getAll();
$estado =StatusData::getAll();
?>

<div class="row">
<div class="col-md-12">
<h1><?php echo $book->title; ?> <small>Editar libro</small></h1>
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
      <input type="text" name="title" required class="form-control" value="<?php echo $book->title; ?>" id="inputEmail1" placeholder="Titulo">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Autor(es)</label>
    <div class="col-lg-10">
      <input type="text" name="author" class="form-control" value="<?php echo $book->author; ?>" id="inputEmail1" placeholder="Subtitulo">
    </div>
  </div>

  <div class="form-group">
    <label for="sel1" class="col-lg-2 control-label">Edicion: </label>
    <div class="col-lg-2">
      <select name="edition" class="form-control">
                 <?php foreach($estado as $p):?>
                   <option value="<?php echo $p->id; ?>" <?php if($book->edition==$p->id){ echo "selected"; }?>><?php echo $p->id; ?></option>
                  <?php endforeach; ?>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Categoria</label>
      <div class="col-lg-10">
        <select name="category_id" class="form-control">
              <?php foreach($categories as $p):?>
                <option value="<?php echo $p->id; ?>" <?php if($book->category_id!=null && $book->category_id==$p->id){ echo "selected"; }?>><?php echo $p->name; ?></option>
                 <?php endforeach; ?>
        </select>
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Observaciones</label>
    <div class="col-lg-10">
    <textarea class="form-control" name="observations" placeholder="Descripcion"><?php echo $book->observations; ?></textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">CD</label>
    <div class="col-lg-10">
      <div class="radio">
        <label><input type="radio" name="has_cd" value="0" >NO</label>
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
                 <?php foreach($estado as $p):?>
                   <option value="<?php echo $p->id; ?>" <?php if($book->status_id==$p->id){ echo "selected"; }?>><?php echo $p->name; ?></option>
                  <?php endforeach; ?>
           </select>
       </div>
  </div>
  <div class="form-group">


    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id" value="<?php echo $book->id; ?>">
      <button type="submit" class="btn btn-success">Actualizar Libro</button>
      <button type="reset" class="btn btn-default" id="clear">Limpiar Campos</button>
    </div>
  </div>
</form>

</div>
</div>
