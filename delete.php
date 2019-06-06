<? 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'danya_pn_11');
	$query = mysqli_query($con, "DELETE FROM ps4danya_games WHERE id='" . $_POST['id'] . "'");
	header("Location: http://ps4danya/phpindex.php")
?>