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
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$type = $_FILES["file"]["type"];
	$check = getimagesize($_FILES["file"]["tmp_name"]);

	if($check["mime"] == "image/png" || $check["mime"] == "image/gif"){
		$uploadOk = 1;
	}else{
		$uploadOk = 0;
		echo "Mime?";
		echo $check["mime"];
	} 
  if($uploadOk == 1){
      move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
      echo "File uploaded /uploads/".$_FILES["file"]["name"];
  }
}
?>

</body>
</html>
