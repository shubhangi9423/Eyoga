
<?php include("config.php"); ?>
<?php


$target_dir = "uploads/videos/";
$target_file = $target_dir . basename($_FILES["FILE"]["name"]);
$qry=mysql_query("insert into tblvideo(vname) values('$target_file')");

$uploadOk = 1;


$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["btn"])) {
    $check = getvideosize($_FILES["FILE"]["tmp_name"]);
	echo("$check");

    if($check !== false) {
        echo "File is an video - " . $check["mime"] . ".";
        $uploadOk = 1;
		echo("$uploadOk");
    } else {
        echo "File is not an video.";
        $uploadOk = 0;
		echo("$uploadOk");

    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["FILE"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "MP4" && $imageFileType != "mp3" && $imageFileType != "3gp"
&& $imageFileType != "wmv"&& $imageFileType != "aiv"&& $imageFileType != "mp4" ) {
    echo "Sorry, only mp4, , PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["FILE"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["FILE"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>