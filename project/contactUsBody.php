
<?php include './nav.php'; ?>
<div class="container-fluid" style="background-color:#f2ffbf; border-top: solid thin lightgreen   " >

    <div class="row"style="padding-top: 20px;">
        <hr>
        <div class="col-md-6 col-sm-6" >
            <div>
                <img src="../images/social_img/bodhgaya.png" width="100%" alt=""/>
            </div>
        </div>
        <form action="" method="post" class="col-md-6 col-sm-6">
            <h1 class="text-center " style="font-family: Algerian;color:#007BFF;text-decoration:underline">CONTACT US</h1>
            <?php
            include_once '../connDb.php';
            if (isset($_POST['submit1'])) {
                $nm = $_POST['nm'];
                $mob = $_POST['mb'];
                $email = $_POST['em'];
                $adres = $_POST['add'];
                $categry = $_POST['cat'];
                $isRead = 0;

                $qry1 = "insert into contactus (name,email,address,mobile,category,isRead) values(?,?,?,?,?,?);";
                $smt = mysqli_prepare($conn, $qry1);
                if ($smt) {
                    mysqli_stmt_bind_param($smt, 'sssssi', $nm, $email, $adres, $mob, $categry, $isRead);
                    mysqli_execute($smt);
                    if (mysqli_affected_rows($conn) > 0) {
                        ?>
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success!</strong> Thank You :) .We will contact you soon...
                        </div>
                    <?php
                    } else {
                        ?>
                        <div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Failed!</strong> Something Went wrong !!Please. Try Again...
                        </div>
                    <?php
                    }
                }
            }
            ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 form-group">
                    <input type="text" id="name" name="nm" class="form-control-plaintext" style=" border-bottom: solid 1px green" placeholder="Enter Name:" required=""/>
                </div>
                <div class="col-md-12 col-sm-12 form-group">
                    <input type="text" id="mobile" name="mb" class="form-control-plaintext" style=" border-bottom: solid 1px green" placeholder="Mobile Number +91:" required="" />
                </div>
                <div class="col-md-12 col-sm-12 form-group">
                    <input type="email" id="email" name="em" class="form-control-plaintext" placeholder="Email:" style=" border-bottom: solid 1px green" required=""/>
                </div>
                <div class="col-md-12 col-sm-12 form-group">
                    <textarea type="textarea" id="address" name="add" class="form-control-plaintext" placeholder="Address:" style=" border-bottom: solid 1px green" required=""/></textarea>
                </div>
                <div class="col-md-12 col-sm-12 form-group">
                    <select id="category" name="cat"  class="custom-select text-center"style="background-color: lightyellow" required="">
                        <option>Select Category</option>
                        <?php 
                         include_once 'conn.php';
                        $qury = "select * from category order by 1";
                        $arr = mysqli_query($conn, $qury);
                        while($row = mysqli_fetch_array($arr))
                                {
                            ?>
                        <option value="<?php echo $row['cateory'];?>"><?php echo $row['cateory'];?></option>     
                        <?php }?>
                    </select>
                </div>

                <div class="col-md-12 col-sm-12 form-group">
                    <button type ="submit" name="submit1" class="btn btn-outline-success btn-block">Submit</button>
                </div>
            </div>
        </form>
    </div>

</div>
<?php include './Footer.php'; ?>


