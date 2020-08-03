<?php include './dashboardHeader.php'; ?>
<?php include './markAsRead.php'; ?>
<div class="  col-md-12" style="padding-bottom: 40px">
    <a  type="button" data-toggle="modal" data-target="#myModa2" class="btn btn-outline-success btn-sm float-right">Mark all as read</a>
</div>
<table class="table">
  <thead>
    <tr style="background-color:orange;">
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      <th scope="col">Category</th>
      <!--<th scope="col">Status</th>-->
    </tr>
  </thead>
  <tbody>
      <?php
      require_once '../connDb.php';
      $qry1 = "select * from contactus";
      $arr = mysqli_query($conn, $qry1);
      while($row = mysqli_fetch_array($arr)){
          if($row['isRead'] == 0){?>
      
                  
             
          <select style="background:#ffff99;" multiple class="form-control" id="sel2" name="sellist2">
              <option>
              
                   <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo $row['category']; ?></td>
              
              </option>
          </select>
            <?php }
?>
          
     <?php }
      ?> 
  </tbody>
</table>
<hr>
<?php include './dashboardFooter.php'; ?>