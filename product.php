<?php 
	if ($_GET['id'] == '1') {
  		$output = '<h1>You chose the Mac</h1>';
	} else if ($_GET['id'] == '2') {
		$output = '<h1>You chose Ubuntu</h1>';
	} else {
  		$output = '<h1>You chose Windows</h1>';
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