<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<ol>
		<?php foreach(glob($log_directory.'*.html') as $file): ?>
			<li><a href="/<?= $file ?>"><?= $file ?></a></li>
		<?php endforeach ?>
	</ol>
</body>
</html>