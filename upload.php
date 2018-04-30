<?php
if(isset($_POST["submit"]))
{
	if(!empty($_FILES["fileToUpload"])&&!empty($_POST["text"]))
	{
		switch(strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION)))
				{
						case "png":
							header("Content-type:image/png");
							$image=imagecreatefrompng($_FILES["fileToUpload"]["tmp_name"]);
							break;
						case "jpg":
							header("Content-type:image/jpeg");
							$image=imagecreatefromjpeg($_FILES["fileToUpload"]["tmp_name"]);
							break;
						case "jpeg":
							header("Content-type:image/jpeg");
							$image=imagecreatefromjpeg($_FILES["fileToUpload"]["tmp_name"]);
							break;
						case "gif":
							header("Content-type:image/gif");
							$im = imagecreatefromgif($_FILES["fileToUpload"]["tmp_name"]);
							break;
						default:
							trigger_error("Invalid Image file format");
							exit();
							break;
				}
		
		$fontpath="font.TTF";
		if(!empty($_POST['x']))
		{
			$x=$_POST['x'];
		}else
		{
			$x=10;
		}
		if(!empty($_POST['y']))
		{
			$y=$_POST['y'];
		}else
		{
			$y=100;
		}
		if(!empty($_POST['angle']))
		{
			$angle=$_POST['angle'];
		}else
		{
			$angle=0;
		}
		if(!empty($_POST['text']))
		{
			$text=$_POST['text'];
		}else
		{
			$text="Default Text";
		}
		imagettftext($image,30,$angle,$x,$y,$black,'arial.ttf',$_POST["text"]);
		
		switch(strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION)))
				{
						case "png":
							imagepng($image);
							break;
						case "jpg":
							imagejpeg($image);
							break;
						case "jpeg":
							imagejpeg($image);
							break;
						case "gif":
							imagegif($image);
							break;
						default:
							trigger_error("Invalid Image file format");
							exit();
							break;
				}
		imagedestroy($image);
	}else
	{
			echo "please fill all the fiels";
	}
}
?>
