<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
	<a href="index.php?view=newcategory" class="btn btn-default"><i class='fa fa-th-list'></i> + Nueva Categoria</a>
</div>
		<h1>Categorias</h1>
<br>
		<?php

		$users = CategoryData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>#</th>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th>Estado</th>
			<th># Libros</th>
			<th>Acciones</th>
			</thead>
			<?php
			$index = 1;
			foreach($users as $user){
				$estado = $user->getStatus();
				?>
				<tr>
				<td><?php echo $index++; ?></td>
				<td><?php echo $user->name; ?></td>
				<th><?php echo $user->description; ?></th>
				<th><?php echo $estado->name; ?></th>
				<th><?php echo $user->book_counter; ?></th>
				<td style="width:130px;">
				<a href="index.php?view=viewcategory&id=<?php echo $user->id;?>" class="btn btn-info btn-xs">O</a>
				<a href="index.php?view=editcategory&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a> 
				<a href="index.php?action=delcategory&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a></td>
				</tr>
				<?php

			}
			?>
			</table>
			<?php
		}else{
			echo "<p class='alert alert-danger'>No hay Categorias</p>";
		}


		?>


	</div>
</div>
