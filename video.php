<?php

if (isset($_POST["submit"]))
{
	$file_name = $_FILES["video"]["tmp_name"];
	$cut_from = $_POST["cut_from"];
	$duration = $_POST["duration"];

	$command = "C:/xampp/htdocs/split-video/ffmpeg/bin/ffmpeg -i " . $file_name . " -vcodec copy -ss " . $cut_from . " -t " . $duration . " output.mp4";
	system($command);

}

?>

<h1>Uspesno</h1>

