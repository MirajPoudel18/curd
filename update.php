<?php include('header.php')?>
<?php include('database.php')?>
<?php 
    if(isset($_GET['id'])){
        $id=(int)$_GET['id'];
    
    
    
    $query = "SELECT * FROM donation WHERE id = $id";
    
    $result = mysqli_query($sql,$query);
    if(!$result){
        die("query not connected");
    }
    else{
        $row= mysqli_fetch_assoc($result);
    }
}
    ?>
    <?php 
    if(isset($_POST['update'])){
    $Name=$_POST['Name'];
    $age=$_POST['age'];
    $blood_group=$_POST['blood_group'];
    $phone=$_POST['phone'];
    $query = "UPDATE donation SET 
            Name = '$Name',
            age = '$age',
            blood_group = '$blood_group',
            phone = '$phone'
          WHERE id = $id";


$result = mysqli_query($sql,$query);
    if(!$result){
        die("query not connected");
    }
    else{
        header('location:index.php');
    }
    }
    
    
    ?>






    <form action="update.php?id=<?php echo $id; ?>" method="post">
    <div class="form-group">
    <label for="Name">Name</label>
    <input type="text" placeholder="name" name="Name" class="form-control" value="<?php echo $row['Name'] ?>">
    <label for="age">Age</label>
    <input type="text" placeholder="age" name="age" class="form-control"value="<?php echo $row['age'] ?>">
    <label for="blood_group">Blood Group</label>
    <input type="text" placeholder="" name="blood_group" class="form-control"value="<?php echo $row['blood_group'] ?>">
    <label for="phone">phone number</label>
    <input type="text" placeholder="phone" name="phone" class="form-control"value="<?php echo $row['phone'] ?>">
</div>
<input type="submit" class="btn btn-success" name="update"value="Update">

</form>
<?php include('footer.php')?>