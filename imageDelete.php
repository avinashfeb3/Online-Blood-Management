<?php
$result=mysqli_connect("localhost","root","","blood");
echo$id1=$_GET['del'];

mysqli_query($result,"delete from registration where id='$id1'");

echo"<script>window.location.href='fatchimage.php'</script>";
?>