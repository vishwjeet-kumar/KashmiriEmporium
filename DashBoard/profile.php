
<?php include './dashboardHeader.php'; ?>
<?php include '../connDb.php'; ?>
<?php 
    $qry = "SELECT * FROM admin ";
    $arr = mysqli_query($conn, $qry);
    $row = mysqli_fetch_array($arr);
 
?>
<style>
    input{
       background-color: orange;
    }
    </style>
<div class="container" style="width: 60% ; padding-top: 8%; ">
    <div class="row " >
        <div class="col-md-6 col-sm-12  form-group " >
            <input type="text" class="form-control "  value="<?php echo $row['firstName'];?>" style=" background-color: orange;color: black "/>
        </div>
        <div class="col-md-6 col-sm-12">
            <input type="text" class="form-control" readonly="" value=" <?php echo $row['lastName'];?> "  style=" background-color: orange;color: black "/>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12 col-sm-12">
            <input type="text" class="form-control" readonly="" value="<?php echo $row['mobile'];?>" style=" background-color:orange;color: black  "/>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12 col-sm-12">
            <input type="text" class="form-control" readonly="" value="<?php echo $row['email'];?>" style=" background-color:orange ;color: black "/>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12 col-sm-12">
            <input type="text" class="form-control" readonly="" value="<?php echo $row['pass'];?>" style=" background-color:orange;color: black "/> 
        </div>
    </div>
    <div>
        <button type="button" class=" btn btn-outline-light btn-block">Update</button>
    </div>
</div>
<?php include './dashboardFooter.php'; ?>