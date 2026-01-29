<?php include('database.php')?>
<?php 
if(isset($_GET['id'])){

    $id = (int)$_GET['id']; // or $_POST['id']
$query = "DELETE FROM donation WHERE id = $id";

    $result = mysqli_query($sql,$query);
    if(!$result){
        die("query failed");

    }
    else{
        header('location:index.php');
    }
}
?>