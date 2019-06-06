<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title></title>
</head>
<body>
		<button class="btn btn-dark"> <a style="text-decoration: none;" href="http://ps4danya/admin.php">Добавить игру</a></button>
		<? 
		$con = mysqli_connect('127.0.0.1', 'root', '', 'danya_pn_11');
		$query = mysqli_query($con, "SELECT * FROM ps4danya_games ORDER BY id DESC ");
		?>
		<div class="row">
			<? 
			for($i = 0; $i < $query->num_rows; $i++){
				$result = $query->fetch_assoc(); ?>
					<div class="col-3">
						<p> <? echo $result['name']; ?> </p> 
						<p> <? echo $result['price']; ?> </p>
						<? echo '<img class="w-100 img-fluid img-thumbnail round-circle " src="' . $result['img'] . '">'; ?>
						<div class="row ">	
							<form method="POST" action="delete.php">
								<? echo '<input type="hidden" name="id" value="' . $result['id'] . '">'; ?>
								<div class="col-4">
									<button  class="btn btn-dark">Удалить</button> 
								</div>
							</form>	
								
							<form method="POST" action="page_update.php">
								<? echo '<input type="hidden" name="id" value="' . $result['id'] . '">'; ?>
								<? echo '<input type="hidden" name="name" value="' . $result['name'] . '">'; ?>
								<? echo '<input type="hidden" name="price" value="' . $result['price'] . '">';?>
								
									<button  class="btn btn-dark">Редактировать</button>
								
							</form>
						</div>
					</div>	

		<?php } ?>
		</div>

 			
		
			
		
		
		

</body>
</html>