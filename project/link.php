<?php include '../connDb.php';

if(isset($_POST['login']))
{
    
    $unm = ($_POST['mail']);
    $pwd =  ($_POST['pswd']);
    $qry = ("select * from admin where firstName ='$unm'and pass ='$pwd' ");
$result = mysqli_query($conn, $qry);
$row = mysqli_num_rows($result);
    if($row>0)
    {
        session_start();
        $_SESSION['user'] = $unm;
        echo $_SESSION['user'];
        ?>
    <script>
          window.location.href = "../DashBoard/dashboard.php";
    </script>
    <?php
    }
    else
     {
        ?>
    <script>
          alert  ("Username pasword incorrect");
          window.location.href ="index.php";
    </script>
    <?php
    }
}
?>
<link href="../bootstrap-4.4.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="../bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../bootstrap-4.4.1-dist/jquery.v3.1.4.min.js" type="text/javascript"></script>
<script src="../bootstrap-4.4.1-dist/js/bootstrap.js" type="text/javascript"></script>
<a href="../bootstrap-4.4.1-dist/js/bootstrap.js.map"></a>
<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>-->