<?php include 'link.php'; ?>

<div class=" footer-copyright form-inline" style=" background-color:orange;font-size: 8pt;text-decoration: none;list-style-type: none;">               
    <li>
        <img src="../images/social_img/gmail.png" height="16px" alt=""/>kashmiriemporiumbodhgaya@gmail.com,
    </li>
    <li>
        <img src="../images/social_img/phone.png" height="14px" alt=""/>+91 90974950429  
    </li >
    <li style="padding-left: 5px">
        <a href="#"><img src="../images/social_img/fb.png" height="20px" alt=""/></a>
    </li>
    <li style="padding-left: 5px">
        <a href="#"> <img src="../images/social_img/insta.png" height="20px" alt=""/></a>
    </li>  
    <li style="padding-left: 5px">
        <a href="#" data-toggle="modal" data-target="#myModal"> <img src="../images/social_img/login.png" height="20px" alt=""/></a>
    </li> 
</div>
<div class="modal" id="myModal" style="font-family: sans-serif">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header " style="background-color: orange"   >                    
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form action="header.php" method="post">
                <div class="modal-body "  style="padding-left: 20px ">
                    <h4 style="text-align: center">Login</h4><hr style="border-width: 2px ;border-color: orange">
                    <div style="padding-left: 20px">
                        <div class='row col-sm-12 form-group ' >
                            Username:<br><br><input type="text" name="mail" placeholder="abc@gmail.com" class="text-center  form-control" required="">
                        </div>
                        <div class='row col-sm-12 form-group'>
                            Password:<br><br><input type="password" name="pswd" placeholder="password" class="text-center form-control" required="">
                        </div>
                        <div class='row col-sm-12 form-group'>
                            <div class="custom-control custom-checkbox col-md-6 form-group ">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                <label class="custom-control-label" for="customCheck">Remember Me..</label>
                            </div>
                            <div class="custom-control custom-checkbox col-md-6 form-group " style=" outline: none;">
                                <a href="#" style="text-decoration: none;font-size: 11pt;">Forget Password ?</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class=' col-md-6 form-group'>
                            <button type="submit" name="login" class="btn btn-outline-success btn-block" >Login</button>
                        </div>
                        <div class=' col-md-6 form-group'>
                            <button type="button" class="btn btn-outline-warning btn-block " >Register</button>
                        </div>
                    </div>
                    <div class=" row justify-content-md-center" style="display:none;" id="myAlert">                    
                        <div class="alert alert-success alert-dismissable  col-md-10 form-group" id="myAlert2">
                            <button type="button"  class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Success!  Login successfully.
                        </div>
                    </div>
                </div>
            </form>
            <!-- Modal footer -->
            <div class="modal-footer"style="height: 60px;background-color: orange"  >
                <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color: lightyellow;">
    <div class="row">
        <div class="col-md-6 col-sm-12" >
            <img src="../images/kashmiri header .jpg" alt="Image not found.."  style="height:80px"class="img-responsive"/>
        </div>
        <div class="col-md-6 row col-sm-12" >
            <div class="offset-md-5 col-md-7  col-sm-12  form-group"style="padding-top: 20px">
                   
                    <form action="Header.php" method="post" class="input-group input-group-sm" style="padding-top: 0.6rem">
                        <input type="text" placeholder="search  by Name,Id,Category.." class="form-control" name="search">
                        <div class="input-group-prepend">
                            <button class="btn btn-success btn-sm  " style=" border-radius :1px" type="submit" >Search</button>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
</div>
<script>
    function showAlert() {
        if ($("#myAlert").find("div#myAlert2").length == 0) {
            $("#myAlert").append("<div class='alert alert-success alert-dismissable' id='myAlert2'> <button type='button' class='close' data-dismiss='alert'  aria-hidden='true'>&times;</button> Success! message sent successfully.</div>");
        }
        $("#myAlert").css("display", "");
        window.location.href = "../DashBoard/dashboard.php";
    }
</script>
<?php
include_once '../connDb.php';
    if (isset($_POST['search'])) {
        $search_value = $_POST['search'];
        $search_value = preg_replace("#[^0-9a-z]#i","", $search_value);
        $qury = "select * from category where cateory LIKE '%$search_value%'";
            $arr = mysqli_query($conn, $qury);
            while($row = mysqli_fetch_array($arr))
                    {
                ?>
            <option value="<?php echo $row['cateory'];?>"><?php echo $row['cateory'];?></option>     
            <?php }
    }?>   