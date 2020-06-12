<?php require 'header.php'; ?>

	<div class="container">
		<div class="contenedor">
			<div class="post">
				<article>
					<h2 class="titulo">Nuevo post</h2>
					<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
						<input type="text" name="titulo" placeholder="Titulo del post">
						<input type="text" name="extracto" placeholder="Extracto del post">
						<textarea name="texto" placeholder="Texto del post"></textarea>
						<input type="file" name="thumb">
						<input type="submit" value="Crear nuevo post">
					</form>
				</article>
			</div>
		</div>
	</div>

<?php require 'footer.php'; ?>
