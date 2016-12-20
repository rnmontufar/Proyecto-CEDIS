<div class="row">
	<div class="col-md-12">
<h1>Solicitudes</h1>
<br>
<form class="form-horizontal" role="form">
<input type="hidden" name="view" value="reports">

</form>



	<?php
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
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name." ".$user->lastname; ?></td>
				<td><?php echo $user->username; ?></td>
				<td>
					<?php if($user->is_active):?>
						<i class="glyphicon glyphicon-ok"></i>
					<?php endif; ?>
				</td>
				<td>
					<?php if($user->is_admin):?>
						<i class="glyphicon glyphicon-ok"></i>
					<?php endif; ?>
				</td>
				<td style="width:30px;"><a href="index.php?view=edituser&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a></td>
				</tr>
				<?php
			}
		}else{
			// no hay usuarios
		}
	?>


	</div>
</div>