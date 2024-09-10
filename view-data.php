<?php include 'header.php';
  include 'database_con.php';

  
  ?>
 <div class="container mt-5">
  <a href="add_data.php" class="btn btn-outline-primary">add data</a>
 <table class="table table-bordered">
  <thead class="bg-info text-white">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
        <?php
          $tbl_name = 'data'; // Replace with your table name
          $obj = new Queries();
          $fetch_data = $obj->getdata($tbl_name); 
          
        foreach($fetch_data as $row){?>
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['pass'];?></td>
      <td><a href="edit_data.php?id=<?php echo $row['id'];?>" class=" btn btn-outline-success">Edit</a></td>
      <td><a href="delete.php?id=<?php echo $row['id']; ?>" class=" btn btn-outline-danger">Delete</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
 </div> 

   <?php include 'footer.php';?>