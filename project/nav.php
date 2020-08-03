    <?php include 'link.php'; ?>
    <?php include 'Header.php'; ?>
    <?php include './MsgModel.php'; ?>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<style>
    .cntli{
        padding-left: 25px;
        padding-right:  25px;
    }
    .cntli:hover{
        border-bottom:  2px solid green;
    }
    a{
        color:green;
        font-size: 10pt  ;
        font-weight: bold;
        font-family: sans-serif
    }
    nav {
        box-shadow: 0px  -5px 10px lawngreen;
    }
    .img{
        text-decoration: none;
    }
    .img:hover{
        border:2px solid green
    }

</style>

<nav class="navbar navbar-expand-lg sticky-top " style=" background-color:orange">
    <a class="navbar-brand" >
        <img src="../images/firstimg/Menuicon.png" height="40px" style="padding-bottom: 10px" alt=""/>
    </a>
    <button class="navbar-toggler navbar-toggler-right img" type="button" data-toggle="collapse" data-target="#navb">
        <img src="../images/firstimg/menu.png" style="height: 20px; width: 15px; border:none;outline: none;text-decoration: none" alt=""/>
    </button>

    <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item  cntli">
                <a class="nav-link " href="index.php
                   "><span class="fa fa-fw fa-home"></span>Home</a>
            </li>
            
            <li class="nav-item dropdown nav-item  cntli" >
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <span class="fa fa-fw fa-list"></span> Fashions
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style=" background-color:orange">
                    <a class="dropdown-item" href="man.php">Men's Fashion</a>
                    <a class="dropdown-item" href="womain.php">Women Fashion</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="kidsfashions">Kid's Fashion</a>
                </div>
            </li>
            <li class="nav-item dropdown nav-item  cntli " style="text-decoration: none;border:none" >
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="fa fa-fw fa-list"></span>Home Decor
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style=" background-color:orange">
                    <a class="dropdown-item" href="pasmina.php">Pashmina</a>
                    <a class="dropdown-item" href="bedsheet.php">Bedsheet</a>
                    <a class="dropdown-item" href="#">Blanket</a>
                    <a class="dropdown-item" href="#">Cover for Furnisher Cover</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="carpet.php">Carpet</a>
                </div>
            </li>
            
            <li class="nav-item  cntli">
                <a class="nav-link" href=""><span class="fa fa-fw fa-edit"></span>About</a>
            </li>
            <li class="nav-item  cntli">
                <a class="nav-link" href="
                   contactUsBody.php"><span class="fa fa-fw fa-phone"></span>Contactus</a>                
            </li>
        </ul>
        <ul class="navbar-nav ">
            <li class="nav-item  navbar-toggler-right ">
                <a class="nav-link cntli" href="">
                    <img src="../images/social_img/cart2.png" height="30px" alt=""/>
                </a>
            </li>
        </ul>
    </div>
</nav>