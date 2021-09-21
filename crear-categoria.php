<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>	
<?php require_once 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Crear categorias</h1>
	<p>
		Añade nuevas categorias al blog para que los usuarios puedan
		usarlas al crear sus entradas.
	</p>
	<br/>
	<form action="guardar-categoria.php" method="POST">
		<label for="nombre">Nombre de la categoría:</label>
		<input type="text" name="nombre" />
		
		<input type="submit" value="Guardar" />
	</form>

</div> <!--fin principal-->
			
<?php require_once 'includes/pie.php'; ?>