<!DOCTYPE html>
<html>
<body>
<style>
.myDiv {
	width:auto;
	height:auto;
	margin-left:10%;
	border: 5px outset green;
	background-color: lightblue;    
	text-align: center;
}
</style>

<div class="myDiv">
	<img src="upload/img.jpg" width="300px" height="300px">
	<form action="upload.php" method="post" enctype="multipart/form-data" >
		<input type="file" name="fileToUpload" >
		<input type="submit" value="Upload Image" name="submit" color="green">
	</form>
</div>

</body>
</html>