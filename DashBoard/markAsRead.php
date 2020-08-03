<div class="modal" id="myModal3" style="font-family: sans-serif">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header " style="background-color: orange"   >                    
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body "  style="padding-left: 20px ">
                <form action="#" method="post"style="font-family: sans-serif">
                    <h2 style="text-align: center;font-family: algerian;color:lightgreen">Welcome to Kashmiri Emporium.</h2><hr style="border-width: 2px ;border-color: orange">
                    <div style="padding-left: 20px;font-family: Comic Sans MS, Comic Sans, cursive">
                        <h5>Are you sure..?                            
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4"></div>
                        <div class="col-md-4 col-sm-7  ">
                            <button type="submit" name="yes" class="btn btn-group-sm btn-outline-success" name="yes">Yes</button>                 
                            <button type="submit" name="no" class="btn btn-group-sm btn-outline-danger " >No</button>                 
                        </div>
                        <div class="col-md-4 col-sm-1"></div>
                    </div>

                </form>
                <div class=" row justify-content-md-center" style="display:none;" id="myAlert">                    
                    <div class="alert alert-success alert-dismissable  col-md-10 form-group" id="myAlert2">
                        <button  type="button"  class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer"style="height: 60px;background-color: orange"  >
                <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

<?php
include_once '../connDb.php';

if (isset($_POST['yes'])) {
    $qry = "SELECT * FROM contactus";
    $result = mysqli_query($conn, $qry);

    $count = mysqli_num_rows($result);
    for ($i = 0; $i < $count; $i++) {
        $sql1 = " UPDATE contactus SET isRead='1' WHERE isRead= '0' ";
        echo $i;
        $result1 = mysqli_query($conn, $sql1);
    }
    ?>
    <script>
        window.location.href = "./message.php";
    </script>
    <?php
    }
    if(isset($_POST['no'])){
        ?>
        <script>
            window.location.href = "./message.php";
        </script>
        <?php
    }
?>