<?php 
session_start();
    if(!isset($_SESSION["user"])){
        ?>
<script type="text/javascript">
    window.location = "../project/index.php";
</script>
<?php
    }
?>

<link href="dashboardCss.css" rel="stylesheet" type="text/css"/>
<link href="../bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../bootstrap-4.4.1-dist/jquery.v3.1.4.min.js" type="text/javascript"></script>
<script src="../bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>