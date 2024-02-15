<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="margin: 0px;padding: 0px;">
	<div class="row">
<table border="3" class="table table-bordered table-hover">
<tr>
<th>Id</th>
<th>Image</th>
<th>Edit</th>
</tr><br><br>
<?php
$conn=mysqli_connect("localhost","root","","blood");
$pqr=mysqli_query($conn,"select * from registration");
while($abc=mysqli_fetch_array($pqr)){

	  $id1=$abc['id'];
	$image1=$abc['photo'];

?>

<tr>
<td><?php echo $id1?></td><br><br>
<td><?php echo $image1?></td>
<td>
<a href="imageUpdate.php? updt=<?php echo $id1;?>">Update</a>
<a href="imageDelete.php? del=<?php echo $id1;?>">Delete</a>
<a href="imageDownload.php? download=<?php echo $id1;?>">Download</a>
</td>
</tr>

<img class="col-lg-4 img img-responsive img-thumbnail" src="image/<?php echo $image1; ?>">
<?php } ?><br><br>
</table>
</div>
</body>
</html>
