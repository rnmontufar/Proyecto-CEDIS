<?php 
?>
<div class="row">
	<div class="col-md-12">
		<h1>Solicitudes</h1>


		<?php
$devos = SolicitudData::getAll();
		if(count($devos)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>#</th>
			<th>Codigo</th>
			<th>Titulo</th>
			<th>categoria</th>
			<th>cui</th>
			<th>DNI</th>
			<th>Estado</th>
			<th>fecha de solicitud</th>
			<th>fecha de entrega</th>
			<th>Acciones</th>
			</thead>
			<?php
			$index = 1;
			foreach($devos as $obj){
				$book = $obj->getBook();
				$category  = $book->getCategory();
				$estado = $obj->getStatus();
				?>
				<tr>
				<td><?php echo $index++; ?></td>
				<td><?php echo $obj->id; ?></td>
				<td><?php echo $book->title; ?></td>
				<td><?php echo $category->name; ?></td>
				<td><?php echo $obj->cui; ?></td>
				<td><?php echo $obj->dni; ?></td>
				<td><?php echo $estado->name;  ?></td>
				<td><?php echo $obj->fech_ent;  ?></td>
				<td><?php echo $obj->fech_sol;  ?></td>
				
				<td style="width:210px;">
				<a href="index.php?view=editsoli&id=<?php echo $obj->id;?>" class="btn btn-warning btn-xs">Editar</a>
				</td>
				</tr>
				<?php

			}


				?>
				</table>
				<?php

		}else{
			echo "<p class='alert alert-danger'>No hay libros para devolver</p>";
		}
		?>
	</div>
</div>