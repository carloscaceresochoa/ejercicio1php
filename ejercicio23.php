<?php 

$a = false;
$c = 0;

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Codigo fuera de las etiquetas</title>
 </head>
 <body>
 	<?php if($a == true): ?>
		<h1>Soy un titulo</h1>
	<?php else: ?>
		<p>Soy un parrafo</p>
 	<?php endif; ?>

<?php while($c <= 3): ?>
	<p>Parrafo <?php echo $c; ?></p>
	<?php $c++; ?>
<?php endwhile; ?>
 </body>
 </html>