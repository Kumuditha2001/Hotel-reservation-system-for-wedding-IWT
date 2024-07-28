<?php
include 'FAQconnect.php';
if(isset($_POST['submit'])){
    $Number=$_POST['Number'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $Quetion=$_POST['Quetion'];

    $sql="insert into faq(Number,name,mobile,Quetion)
    values('$Number','$name','$mobile','$Quetion')";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data insert successful";
        header('location:display.php');
    }else{
        die("Connection failed :".$con->connect_error);
    }
}
?>



<!DOCTYPE html>
<html>
    <header>
         <link rel="stylesheet" href="faqphp.css">

    </header>
    <body="b">
        <div class="form">

            <h1>fill this form</h1>
            <form action="#" method="POST">
                <div class="form-group">
                    <p>Number:</p>
                    <input type="number" name="Number" placeholder="Enter your number:" ><br><br>
                </div>

                <div class="form-group">
                    <p>Name:</p>
                    <input type="text" name="name" placeholder="Enter your name:" ><br><br>
                </div>

                <div class="form-group">
                    <p>Mobile number:</p>
                    <input type="text" class="input"value="" name="mobile">
                </div>

                <div class="form-group">
                    <p>Quetion:<p>
	                <Textarea text="Quetion" name='Quetion' rows="8" cols="50" ></Textarea></br>
                </div>

                <center><button type="submit" name="submit">submit</submit></center>
            </form>
        </div>
      
    </body>
