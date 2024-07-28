<?php
include 'FAQconnect.php';

if(isset($_GET['deleteid'])){
    $Number=$_GET['deleteid'];

    $sql="delete from faq where Number=$Number";
    if($con->query($sql)){
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
}
}


?>





