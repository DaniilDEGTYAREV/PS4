<? $con = mysqli_connect('127.0.0.1', 'root', '', 'danya_pn_11');
	
	
	if($_FILES['img']['name'] == null){
		$query = mysqli_query($con, "UPDATE ps4danya_games SET name='" . $_POST['name'] . "', price='" . $_POST['price'] . "' WHERE id='" . $_POST['id'] . "'");
		header("Location: http://ps4danya/phpindex.php"); 
	} else {
		$query = mysqli_query($con, "UPDATE ps4danya_games SET name='" . $_POST['name'] . "', price='" . $_POST['price'] . "', img='imggames/" . $_FILES['img']['name'] . "' WHERE id='" . $_POST['id'] . "'");
		header("Location: http://ps4danya/phpindex.php"); 
	 	move_uploaded_file($_FILES['img']['tmp_name'], 'imggames/' . $_FILES['img']['name']);

	}
	