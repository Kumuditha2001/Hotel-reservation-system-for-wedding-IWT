<?php
include'FAQconnect.php';
?>
<!DOCTYPE html>
<head>
    <style>
        .update{
          margin-top:20px;
           background-color:#6495ED;
           color:white;
           padding: 8px 30px;
           border-radius: 10px;
        }
        .delete{
           margin-top:20px;
           background-color:#FD1C03;
           color:white;
           padding: 8px 30px;
           border-radius: 10px;
        }
        .updatebtn,.deletebtn{
          text-decoration:none;
          color:white;
        }

        .newbutton{
           margin-top:20px;
           background-color:black;
           color:white;
           padding-left:30px;
           padding-right:30px; 
           padding-top:10px;
           padding-bottom:10px;
           margin-left:110px;
           margin-top:50px;
           margin-bottom:30px;
           border-radius: 20px;

        }
        .addnew{
            text-decoration:none;
            color:white;
        }
        .addnew:hover{
            color:black;
            background:white;
        }
         .newbtn:hover{
           color:black;
           background:white;
        }
        table{
            margin-top:20px;
            margin-left:110px;
            width:90%;
            margin-bottom:50px;
        }
        th{
            height:50px;
        }
        tr{
            text-align:left;
            height:50px;
        }






    </style>
   



</head>
<body>
      <button class="newbutton"><a href="faq.php" class="addnew"> New Question</a></button>
      <table>
        <tr>
            <th scope="col">Number</th>
            <th scope="col">Name</th>
            <th scope="col">mobile</th>
            <th scope="col">Quetion</th>
            <th scope="col">Operation</th>
        </tr>
     <tbody>
       <?php
       $sql="select*from faq";
       $result=mysqli_query($con,$sql);
       if($result){
        while($row=mysqli_fetch_assoc($result)){
            $Number=$row['Number'];
            $name=$row['name'];
            $mobile=$row['mobile'];
            $Quetion=$row['Quetion'];
            echo'<tr>
            <td scope="row">'.$Number.'</td>
            <td>'.$name.'</td>
            <td>'.$mobile.'</td>
            <td>'.$Quetion.'</td>
            <td>
            <button class="update"><a href="update.php?updateid='.$Number.'" class="updatebtn">Update</a></button>
            <button class="delete"><a href="delete.php?deleteid='.$Number.'" class="deletebtn">Delete</a></button>
            </td>

            </tr>';
        }
  }
?>