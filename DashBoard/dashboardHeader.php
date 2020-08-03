<!-- Vertical navbar -->
<?php include 'link.php'; ?>
<?php
include '../connDb.php';
$qury = "SELECT * FROM  contactus where isRead = 0";
$arr = mysqli_query($conn, $qury);
$row = mysqli_num_rows($arr);
?>
<div class="vertical-nav "  id="sidebar" style="padding-top: 50px;background-color: orange">
    <div class="py-4 px-3  bg-light" style="border-bottom: solid 2px orange">
        <div class="media d-flex align-items-center"><img src="img/avtar.png" alt="image missing" width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
            <div class="media-body">
                <h3 class="m-0 welcome" style="font-weight: bold;font-variant: small-caps"> 
                    <?php
                    echo $_SESSION["user"];
                    ?>
                </h3>
                <h5 class="  mb-0" style="color:grey;"> Dashboard </h5>
            </div>
        </div>
    </div>
    <ul class="nav flex-column " >
        <li class="nav-item custom_nav ">
            <a href="#"style="padding-top: 20px;color: black" class="nav-link">
                Profile
            </a>
        </li>
        <li class="nav-item custom_nav">
            <a href="#" style="padding-top: 20px;color: black" class="nav-link">
                About
            </a>
        </li>
        <li class="nav-item custom_nav">
            <a href="#" style="padding-top: 20px;color: black" class="nav-link ">
                Services
            </a>
        </li>
        <li class="nav-item custom_nav">
            <a href="#" style="padding-top: 20px;color: black" class="nav-link">
                Gallery
            </a>
        </li>
        <li class="nav-item custom_nav">
            <a href="./message.php" style="padding-top: 20px;color: black" class="nav-link">
                Message
            </a>
        </li>
        <li class="nav-item custom_nav">
            <a href="logout.php" style="padding-top: 20px;color: black" class="nav-link">
                Logout
            </a>
        </li>
    </ul>
</div>
<!-- End vertical navbar -->

<nav class="navbar navbar-expand-lg sticky-top topNav " style=" background-color:orange">
    <a class="navbar-brand" >
        <img src="img/Menuicon.png" height="40px" style="padding-bottom: 10px" alt=""/>
    </a>
    <button class="navbar-toggler navbar-toggler-right img" type="button" data-toggle="collapse" data-target="#navb">
        <img src="../images/menu.png" style="height: 40px; width: 40px; border:none;outline: none;text-decoration: none" alt=""/>
    </button>

    <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item  cntli" style="padding-left: 100px">
                <a class="nav-link " href=""></a>
            </li>
        </ul>

        <ul class="navbar-nav ">
            <li class="nav-item notification">
                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="img/bell.png" alt="image missing" width="40" class=" rounded-circle img-thumbnail shadow-sm">
                    <span class="badge bg-light" style="color:red" ><?php echo $row ?></span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="img/avtar.png" alt="image missing" width="40" class=" rounded-circle img-thumbnail shadow-sm">
                    <?php
                    echo $_SESSION["user"];
                    ?>
                </a>
                <div class="dropdown-menu dropdown-menu-right  " style="background-color: orange" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item"  href="logout.php">Logout</a>     </div>
            </li>
        </ul>
    </div>
</nav>
<style>
    div.sticky {
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 200;
}
.sticky1{
    position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}
</style>
<div class="page-content " id="content">    
    <div style="padding-left: 20px;padding-top: 20px;position: fixed;height: 100px;background: rgba(135, 206, 235
,0.5); backdrop-filter: blur(8px);width: 100%">
        <a href="#"> <img src="img/menu-icon.jpg"  style="height:60px;width: 60px;"  alt="" id="sidebarCollapse" class=" rounded-circle img-thumbnail shadow-sm"/></a>
    </div>
    
    <div class="container-fluid" style="height: 1000px;padding-top:100px">
