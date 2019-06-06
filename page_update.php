<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="update.php" enctype="multipart/form-data">
		<? echo '<input type="hidden" name="id" value="' . $_POST['id'] . '">'; ?>
		<? echo '<input  name="name" value="' . $_POST['name'] . '">'; ?>
		<? echo '<input  name="price" value="' . $_POST['price'] . '">'; ?>
		<? echo '<input  type="file" name="img">'; ?>
		
		<button type="submit">Обновить</button>

	</form>
</body>
</html>