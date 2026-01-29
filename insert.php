<?php 
include('database.php');
if(isset($_POST['add'])){

    $Name=$_POST['Name'];
    $age=$_POST['age'];
    $blood_group=$_POST['blood_group'];
    $phone=$_POST['phone'];

    $query= "INSERT INTO `donation` ( `Name`, `age`, `blood_group`, `phone`) VALUES ('$Name', '$age', '$blood_group', '$phone');";
    $result= mysqli_query($sql,$query);

    if(!$result){
        die("query not connected");
    }
    else{
        header('location:index.php?insertmsg= Detail added');
    }
}
?>