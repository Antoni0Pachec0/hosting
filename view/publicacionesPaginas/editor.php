<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8" />
		<link rel="icon" type="image/svg+xml" href="/vite.svg" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script defer src="../../html/js/editor_tiny.js"></script>
		<link rel="stylesheet" href="../../html/css/p_editor.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    	<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		
		<script src="../../view/publicacionesPaginas/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
		<title>Editor Tinymce</title>

	</head>
	
	<body>

		<?php
			if(isset($_GET['idCurso'])){
				$idCurso = $_GET['idCurso'];
			}
		?>

		<div class="contenedor">
			<form id="formulario" class="formulario" method="POST">
				<div class="input-box">
					<p>Nombre del articulo:</p>
					<input type="text" id="inputName">
					<input type="number" id="inputId" value="<?php echo $idCurso ?>" readonly>
				</div>
				<textarea id="editor" placeholder="Escribe..."></textarea>
				<input type="submit" value="Enviar" id="btn_enviar" name="btn_enviar">
			</form>
		</div>
	</body>
</html>