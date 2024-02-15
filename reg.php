<?php
  //start the session;
  session_start(); 
  $localhost="localhost";
  $username="root";
  $password="";
  $dbname="blood";
  //Create Connection
  $conn= mysqli_connect("$localhost", "$username", "$password","$dbname");
  if(!$conn){
      die("connection failed:".mysqli_connect_error());
  }else{
  	echo "Connected"."<br>";
  }
  //Insert Data into Database
      $Name= $_POST['name'];
      $fname= $_POST['fname'];
      $gender= $_POST['gender'];
      $dob= $_POST['dob'];
      $bg= $_POST['bg'];
      $bw=  $_POST['bw'];
      $email= $_POST['email'];
      $country= $_POST['country'];
      $state= $_POST['state'];
      $area= $_POST['area'];
      $address= $_POST['address'];
      $pin= $_POST['pin'];
      $contact1= $_POST['contact1'];
      $contact2= $_POST['contact2'];
      $nd= $_POST['nd'];

      echo $name=$_FILES['file']['name'];
      echo $type=$_FILES['file']['type'];
      echo  $size=$_FILES['file']['size'];
      echo  $tmp_name=$_FILES['file']['tmp_name'];
       
      if($type=='image/jpeg')    //application/pdf used for pdf file
{
echo'<script>alert("successfulley uploaded")</script>';
move_uploaded_file($tmp_name,"Images/".$name);
      $sql = "INSERT INTO registration(Name,fname,gender,dob,bg,bw,email,country,state,area,address,pin,contact1,contact2,nd,photo) values('$Name','$fname','$gender','$dob','$bg','$bw','$email','$country','$state','$area','$address','$pin','$contact1','$contact2','$nd','$name')"; 
  if (mysqli_query($conn,$sql)) {
     echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
    }
     else{
  echo'<script>alert("sorry select correct formate")</script>';
}
 $sql = "SELECT * FROM registration ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " Name: " . $row["Name"]. " " . "<br>";
    }
} else {
    echo "0 results";
} 
header('location:registration.php');
 mysqli_close($conn); 
?>   