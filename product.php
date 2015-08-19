<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	} else {
		$id = null;
	}

	if ($id == '1') {
  		$output = '<h1>You chose the Mac</h1>';
	} else if ($id == '2') {
		$output = '<h1>You chose Ubuntu</h1>';
	} else if ($id == '3') {
  		$output = '<h1>You chose Windows</h1>';
	} else {
		$output = '<h1>Product not found.</h1>';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<?php 
		require('header.php'); 
	  	echo $output;
	  	require('footer.php');	
	?>
	
</body>
</html>