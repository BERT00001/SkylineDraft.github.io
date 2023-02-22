<?php

$Access = $_POST['Code'];

/*Database*/
$connection = new mysqli('localhost','root','','skyline_registration');

if($connection->connect_error){

    die('connection Failed: ');
    echo "ERROR";

}

$coo = "SELECT * FROM newadmin WHERE Code = '$Access'  ";
$result3= mysqli_query($connection,$coo);

 if(mysqli_num_rows($result3)){
   

        header('Location:  Admin.html');

}else{
    
    echo "ERROR Access Code";
    header('Location:  login2.html');


}

?>