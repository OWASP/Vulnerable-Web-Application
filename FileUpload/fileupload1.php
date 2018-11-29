<!DOCTYPE html>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
    Select image -> 
    <input type="file" name="file" id="file">
    <hr>
    <input type="submit" value="Submit" name="submit">
</form>
<?php

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    echo "File uploaded /uploads/".$_FILES["file"]["name"];
}
?>

</body>
</html>
