<?php include('header.php')?>
<?php include('database.php')?>
<div class="box1">
    <h2>details</h2>
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add people</button>
</div>

<table class="table table-hover table-bordered table-striped ">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Blood Group</th>
            <th>Phone no.</th>
            <th>Update</th>
            <th>Delete</th>

        </tr>
                
    </thead>
    <tbody>
        <?php 
        $query ="SELECT * FROM `donation`";
        $result = mysqli_query($sql,$query);
        if(!$result){
        die("query not connected");
        }
        else{

            while($row= mysqli_fetch_assoc($result)){
                ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['blood_group']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>"class="btn btn-danger">Delete</a></td>
            </tr>
        <?php
            }
            }
         ?>
    </tbody>  
</table>

<?php
if(isset($_GET['insertmsg'])) {
    echo"<h6>".$_GET['insertmsg']."</h6>";
}
 ?>
<!-- Modal -->
<form action="insert.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <div class="form_group">
            <label for="Name">name</label>
            <input type="text" placeholder="name" name="Name" class="form-control" >
            <label for="age">Age</label>
            <input type="text" placeholder="age" name="age" class="form-control">
            <label for="blood_group">Blood Group</label>
            <input type="text" placeholder="" name="blood_group" class="form-control">
            <label for="phone">phone number</label>
            <input type="text" placeholder="phone" name="phone" class="form-control">
        </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-success" name="add"value="Add">
        </div>
    </div>
</div>
</div>
</form>
<?php include('footer.php')?>


