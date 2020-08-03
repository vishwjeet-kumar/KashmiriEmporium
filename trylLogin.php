<div>
    <form action="trylLogin.php" method="post">
        <div>
            <input type="text" placeholder="email" name="email">
        </div>
        <div>
            <input type="text" placeholder="password" name="pass">
            </div >
        <button type="submit" name="login" >submit</button>
    </form>
</div>
<?php
//open php
include './connDb.php'; // step 1

if(isset($_POST['login'])){// to check login button clicked or not
echo 'button clicked';
$unm = $_POST['email']; // storing username in $unm variable
$pass = $_POST['pass']; // storing password in $pass variable
  echo $unm;
    echo $pass;
        $qry = "select * from click where nm = '$unm' and password = '$pass' ";
    $result = mysqli_query($conn, $qry);
    $row = mysqli_num_rows($result);
    echo $row;
} else {
    echo 'not clicked';
}
?>