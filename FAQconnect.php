<?php
    $con = new mysqli("localhost","root","","crud");

    if($con->connect_error){
        die("Connection failed :".$con->connect_error);
}

?>