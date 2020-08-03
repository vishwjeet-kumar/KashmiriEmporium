    <?php include 'link.php'; ?>
        <?php include 'Header.php'; ?>
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
        <img src="../images/Menuicon.png" height="40px" style="padding-bottom: 10px" alt=""/>
    </a>
    <button class="navbar-toggler navbar-toggler-right img" type="button" data-toggle="collapse" data-target="#navb">
        <img src="../images/menu.png" style="height: 20px; width: 15px; border:none;outline: none;text-decoration: none" alt=""/>
    </button>

    <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item  cntli">
                <a class="nav-link " href=""><span class="fa fa-fw fa-home"></span>Home</a>
            </li>
            <li class="nav-item  cntli">
                <a class="nav-link" href=""><span class="fa fa-fw fa-list"></span>Category</a>
            </li>
            <li class="nav-item  cntli">
                <a class="nav-link" href="">Ladies </a>
                
            </li>
            <li class="nav-item  cntli">
                <a class="nav-link" href="">Mens </a>
            </li>
            <li class="nav-item  cntli">
                <a class="nav-link" href="">Home Decor</a>
                
            </li>
            <li class="nav-item  cntli">
                <a class="nav-link" href=""><span class="fa fa-fw fa-edit"></span>About</a>
            </li>
            <li class="nav-item  cntli">
                <a class="nav-link" href=""><span class="fa fa-fw fa-phone"></span>Help</a>                
            </li>
        </ul>
        <ul class="navbar-nav ">
            <li class="nav-item  navbar-toggler-right ">
                <a class="nav-link cntli" href=""><img src="../images/social_img/cart2.png" height="30px" alt=""/></a>                
            </li>
        </ul>
    </div>
</nav>