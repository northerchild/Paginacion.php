<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Paginación</title>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="contenedor">
		<h1>Articulos</h1>
		<section class="articulos">
			<ul>
				<?php foreach ($articulos as $articulo): ?>
					<li><?php echo $articulo['id'].'.-'.$articulo['articulos'];?></li>
				<?php endforeach ?>
			</ul>
		</section>
		<section class="paginacion">
			<ul>
				<!--Funcionalidad del boton Atras-->
				<?php if($pagina == 1):?>
					<li class="disabled">&laquo;</li>
				<?php else:?>
					<li><a href="?pagina=<?php echo $pagina -1;?>">&laquo;</a></li>	
				<?php endif;?>	

				<!--Creamos el ciclo para mostrar cada uno de los articulos y la pagina-->
				<?php
					for ($i=1; $i <=$numeroPaginas ; $i++) { 
						if ($pagina == $i) {
							echo "<li class=active><a href='?pagina=$i'>$i</a></li>";
						}
						else{
							echo "<li><a href='?pagina=$i'>$i</a></li>";
						}
					}
				?>
				
				<!--Funcionalidad del boton siguiente-->
				<?php if($pagina == $numeroPaginas):?>
					<li class="disabled">&raquo;</li>
				<?php else:?>
					<li><a href="?pagina=<?php echo $pagina +1;?>">&raquo;</a></li>	
				<?php endif;?>	

				<!--<li class="disabled">&laquo;</li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">&raquo;</a></li>-->
			</ul>
		</section>
	</div>
</body>
</html>




