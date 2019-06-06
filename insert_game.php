<? 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'danya_pn_11');
	
	
	$query1 = mysqli_query($con, "SELECT * FROM ps4danya_games");
	$result = $query1->fetch_assoc();
	header("Location: http://ps4danya/phpindex.php");
	if($_FILES['img']['name'] == null & $_POST['name'] == null & $_POST['price'] == null){
		
		$query = mysqli_query($con, "INSERT INTO ps4danya_games (name, price, id, img) VALUES ('" . 'Game' . "', '" . 'Unknown' . "', '" . $_POST['id'] . "', 'imggames/" . "Preview.png" . "')");
		break;
	} else{
			$query = mysqli_query($con, "INSERT INTO ps4danya_games (name, price, id, img) VALUES ('" . $_POST['name'] . "', '" . $_POST['price'] . "', '" . $_POST['id'] . "', 'imggames/" . $_FILES['img']['name'] . "')");
	}

	if($_POST['name'] == null & $_POST['price'] == null){
		$query = mysqli_query($con, "INSERT INTO ps4danya_games (name, price, id, img) VALUES ('" . 'Game' . "', '" . 'Unknown' . "', '" . $_POST['id'] . "', 'imggames/" .  $_FILES['img']['name'] . "')");
		break;
	} 
	if($_FILES['img']['name'] == null){
		$query = mysqli_query($con, "INSERT INTO ps4danya_games (name, price, id, img) VALUES ('" . $_POST['name'] . "', '" . $_POST['price'] . "', '" . $_POST['id'] . "', 'imggames/" . "Preview.png" . "')");
		break;
	}
	if($_POST['name'] == null & $_FILES['img']['name'] == null){
		$query = mysqli_query($con, "INSERT INTO ps4danya_games (name, price, id, img) VALUES ('" . 'Game' . "', '" . $_POST['price'] . "', '" . $_POST['id'] . "', 'imggames/" . "Preview.png" . "')");
		break;
	}
	if($_POST['price'] == null & $_FILES['img']['name'] == null){
		$query = mysqli_query($con, "INSERT INTO ps4danya_games (name, price, id, img) VALUES ('" . $_POST['name'] . "', '" . 'Unknown' . "', '" . $_POST['id'] . "', 'imggames/" . "Preview.png" . "')");
		break;
	}

	