<!DOCTYPE html>
<html>
<body>
<form method="post" action="upload.php" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
        </br>
    Text To Append:
    <input type="text" name="text" placeholder="text to display">
        </br>
    X&Y coordinates(position of text):
    <input type="number" name="x" placeholder="Enter X coordinates">
    <input type="number" name="y" placeholder="Enter y coordinates"></br>
    Angle of Text:
    <input type="number" name="angle" placeholder="Enter Angel"></br>
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>


