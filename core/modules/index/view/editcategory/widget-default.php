<?php $user = CategoryData::getById($_GET["id"]);?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar Categoria</h1>
	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?action=updatecategory" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-lg-10">
      <input type="text" name="name" value="<?php echo $user->name;?>" class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descripcion*</label>
    <div class="col-lg-10">
    <textarea class="form-control" name="descripcion" required class="form-control" id="descripcion"><?php echo $user->description;?></textarea>
    </div>
  </div>

  <div class="form-group" id="checkear">
    <label for="inputEmail1" class="col-lg-2 control-label">Estado*</label>
    <div class="col-lg-10">
      <div class="radio">
        <label><input type="radio" name="estado" value="2" checked>Inactivo</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="estado" value="3" >Activo</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-success">Actualizar Categoria</button>
    </div>
  </div>
</form>
	</div>
</div>