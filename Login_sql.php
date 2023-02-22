<?php


$Email = $_POST['Email'];
$Password = $_POST['Password'];


$connection = new mysqli('localhost','root','','skyline_registration');

if($connection->connect_error){

    die('connection Failed: ');
    echo "ERROR";

}
$checking = "SELECT * FROM newadmin WHERE Email = '$Email' AND Password ='$Password' ";
$checking2 = "SELECT * FROM registration WHERE Email = '$Email' AND Password ='$Password' ";
$result = mysqli_query($connection,$checking2);
$result2 = mysqli_query($connection,$checking);

 if(mysqli_num_rows($result)){
   

    header('Location: Patient.html');

}if(mysqli_num_rows($result2)){

    header('Location: login2.html');
}

else{
    
    echo "Error";
}

?>