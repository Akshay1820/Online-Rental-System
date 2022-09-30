<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_rental_system";
$conn=new mysqli($servername,$username,$password,$dbname);
if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $pas=mysqli_real_escape_string($conn,$_POST['password']);
       $res=mysqli_query($conn,"select * from login where name = '$name'
        and password = '$pas'");

        if(mysqli_num_rows($res) > 0)
        {
            $row=mysqli_fetch_assoc($res);
          
            setcookie("userName",$row['name'],time()+60*60*2);
            header('location:welcome.php');
            
        }
        else
            print("failed");
   
}

?>