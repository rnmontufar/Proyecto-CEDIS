<div class="row">
	<div class="col-md-12">
	<h1>Nueva Categoria</h1>
	<br>
		<form class="form-horizontal" method="post" id="addcategory" action="./index.php?action=addcategory" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-lg-10">
      <input type="text" name="name" required class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descripcion*</label>
    <div class="col-lg-10">
    <textarea class="form-control" name="descripcion" required class="form-control" id="descripcion" placeholder="Observacion"></textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Estado*</label>
    <div class="col-lg-10">
      <input type="checkbox" name="estado" id="estado" value = "2"> Inactivo<br>
      <input type="checkbox" name="estado" id="estado" value = "3" checked> Activo<br>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Categoria</button>
    </div>
  </div>
  <script>
   $('input[type="checkbox"]').on('change', function() {
     $('input[type="checkbox"]').not(this).prop('checked', false);
  });
  </script>
</form>
	</div>
</div>