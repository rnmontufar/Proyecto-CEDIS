<?php 
?>
<div class="row">
	<div class="col-md-12">
          <a href="index.php?view=newbook" class="btn btn-default pull-right"><i class="fa fa-book"></i> + Nuevo Libro</a>

		<h1>Libros</h1>


		<?php
$books = BookData::getAll();
		if(count($books)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>#</th>
			<th>Codigo</th>
			<th>Titulo</th>
			<th>Edicion</th>
			<th>Observaciones</th>
			<th>Categoria</th>
			<th>Estado</th>
			<th>Acciones</th>
			</thead>
			<?php
			$index = 1;
			foreach($books as $user){
				$category  = $user->getCategory();
				$estado = $user->getStatus();
				?>
				<tr>
				<td><?php echo $index++; ?></td>
				<td><?php echo $user->id; ?></td>
				<td><?php echo $user->title; ?></td>
				<td><?php echo $user->edition; ?></td>
				<td><?php echo $user->observations; ?></td>
				<td><?php if($category!=null){ echo $category->name; }  ?></td>
				<td><?php echo $estado->name;  ?></td>
				
				<td style="width:210px;">
				<a href="index.php?view=editbook&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?action=delbook&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
				</td>
				</tr>
				<?php

			}


				?>
				</table>
				<?php

		}else{
			echo "<p class='alert alert-danger'>No hay Libros</p>";
		}


		?>


	</div>
</div>