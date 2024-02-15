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
      $pname= $_POST['pname'];
      $gender= $_POST['gender'];
      $blood= $_POST['bg'];
      $need=  $_POST['need'];
      $hname= $_POST['hname'];
      $city=  $_POST['city'];
      $pin= $_POST['pin'];
      $dn= $_POST['dn'];
      $wr = $_POST['wr'];
      $cn= $_POST['cn'];
      $address= $_POST['address'];
      $email= $_POST['email'];
      $contact1= $_POST['contact1'];
      $contact2= $_POST['contact2'];
      $res= $_POST['res'];
      echo $name=$_FILES['file']['name'];
      echo $type=$_FILES['file']['type'];
      echo $size=$_FILES['file']['size'];
      echo $tmp_name=$_FILES['file']['tmp_name'];       
      if($type=='image/jpeg')    //application/pdf used for pdf file
      {
          echo'<script>alert("successfulley uploaded")</script>';
          move_uploaded_file($tmp_name,"Images/".$name);
  	     $sql = "INSERT INTO need(pname,gender,blood,need,hname,city,pin,dn,wr,cn,address,email,contact1,contact2,res,photo) values('$pname','$gender','$blood','$need','$hname','$city','$pin','$dn','$wr','$cn','$address','$email','$contact1','$contact2','$res','$name')"; 
  	       if (mysqli_query($conn,$sql)) {
     	        echo "New record created successfully";
  	       } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
   }
    $sql = "SELECT * FROM need";
    $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              echo "id: " . $row["id"]. "Patient Name: " . $row["pname"]. " " . "<br>";
          }
      } else {
          echo "0 results";
      }
    header('location:need.php');
    mysqli_close($conn);  
  ?>