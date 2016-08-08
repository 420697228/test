<?php 

echo "<html>
		<head><title>php form upload</title></head><body>
			<form method='post' action='index.php' enctype='multipart/form-data'>
			select file:<input type='file' name='filename' size='10'>
			<input type='submit' value='updata'>
			</form>";		
	if($_FILES){
		$name = $_FILES['filename']['name'];
		move_uploaded_file($_FILES['filename']['tmp_name'], $name);
		echo "updata image '$name'<br /><img src='$name'";
	}
	echo "</body></html>";

?>