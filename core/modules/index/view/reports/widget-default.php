<div class="row">
	<div class="col-md-12">
<h1>Solicitudes</h1>
<br>
<form class="form-horizontal" role="form">
<input type="hidden" name="view" value="reports">

</form>



	<?php
	echo "ok";
	$reqs = RequestData::getAll();
		if(count($reqs)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead>
				<th>Codigo</th>
				<th>Titulo</th>
				<th>Categoria</th>
				<th>CUI</th>
				<th>Usuario</th>
				<th>DNI</th>
				<th>Tipo Prestamo</th>
				<th>Fecha Solicitud</th>
				<th>Fecha entrega</th>
				<th>Acciones</th>
			</thead>

			<?php
			foreach($reqs as $req){
				?>
				<tr>
					<td><?php echo $req->id; ?></td>
					<td></td>
					<td></td>
					<td><?php echo $req->cui; ?></td>
					<td><?php echo $req->user_id; ?></td>
					<td><?php echo $req->dni; ?></td>
					<td><?php echo $req->tipo_prestamo; ?></td>
					<td><?php echo $req->fech_sol; ?></td>
					<td><?php echo $req->fech_ent; ?></td>
					<td style="width:30px;"><a href="index.php?view=edituser&id=<?php echo $req->id;?>" class="btn btn-warning btn-xs">Aceptar</a></td>
				</tr>
				<?php
			}
		}else{
			// no hay usuarios
		}
	?>


	</div>
</div>