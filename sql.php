<?php

$FirstName = $_POST['Firstname'];
$LastName = $_POST['Lastname'];
$Email = $_POST['EmailAddress'];
$Password = $_POST['Password'];
$Gender1 = $_POST['Gender'];

/*Database*/
$connection = new mysqli('localhost','root','','skyline_registration');

if($connection->connect_error){

    die('connection Failed: ');
    echo "ERROR";

}

$checking = "SELECT * FROM registration WHERE Email = '$Email' ";

$result = mysqli_query($connection,$checking);

if(mysqli_num_rows($result) > 0){

    echo "User is already sign up";
}


else{
    $ready = $connection->prepare("insert into registration(Firstname,Lastname,Gender,Email,Password) values(?,?,?,?,?)");
    $ready->bind_param("sssss",$FirstName, $LastName, $Gender1, $Email, $Password);
    $ready->execute();
    echo "Success";
    $ready->close();
}



?>
