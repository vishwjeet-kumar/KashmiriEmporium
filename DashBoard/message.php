<?php include './dashboardHeader.php'; ?>

<?php include './markAsRead.php'; ?>
<style>
    div.sticky {
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 240;
}
.sticky1{
    position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 168;
}
</style>
<div class=" row sticky1 "style="padding: 20px;background: rgba(135, 206, 235
,0.4); backdrop-filter: blur(8px)" >
    <div class="col-md-10 col-sm-8"></div>
    <div class="col-md-2 col-sm-4" >
        <a  type="button" data-toggle="modal"  data-target="#myModal3" class="btn btn-outline-success btn-sm pull-right ">Mark  as read</a>
    </div>
</div>
<div class="sticky">
<table  class="table table-hover">
    <thead >
    <tr style="background-color:orange;">
      <th class="col-md-2 col-sm-2" >Name</th>
      <th class="col-md-3 col-sm-3">Address</th>
      <th class="col-md-2 col-sm-2">Mobile</th>
      <th class="col-md-2 col-sm-2">Category</th>
      <th class="col-md-3 col-sm-3">Email</th>
    </tr>
  </thead>
</table>
    </div>

<div table-responsive>
<table  class="table table-hover">    
  <tbody>
      <?php
      require_once '../connDb.php';
      $qry1 = "select * from contactus";
      $arr = mysqli_query($conn, $qry1);
      while($row = mysqli_fetch_array($arr)){
          if($row['isRead'] == 0){?>
      <tr style="background:#ffff99;">
              <td class="col-md-2 col-sm-2"><?php echo $row['name']; ?></td>
              <td class="col-md-3 col-sm-3" ><?php echo $row['address']; ?></td>
              <td class="col-md-2 col-sm-2"><?php echo $row['mobile']; ?></td>
              <td class="col-md-2 col-sm-2"><?php echo $row['category']; ?></td>
              <td class="col-md-3 col-sm-3"><?php echo $row['email']; ?></td>
          </tr>
                  
             <?php }else{?>
          <tr style="background:lightgreen;">
                <td class="col-md-2 col-sm-2"><?php echo $row['name']; ?></td>
              <td class="col-md-3 col-sm-3" ><?php echo $row['address']; ?></td>
              <td class="col-md-2 col-sm-2"><?php echo $row['mobile']; ?></td>
              <td class="col-md-2 col-sm-2"><?php echo $row['category']; ?></td>
              <td class="col-md-3 col-sm-3"><?php echo $row['email']; ?></td>
          </tr>
            <?php }
?>
          
     <?php }
      ?> 
  </tbody>
</table>
</div>
<hr>
<?php include './dashboardFooter.php'; ?>