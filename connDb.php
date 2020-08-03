<?php
    $host = 'localhost:3306';
    $user = 'root';
    $pass = '';
//    $dbName = '';
    $conn = mysqli_connect($host,$user,$pass,'id14329358_kashmiriemp');// go to dbms file name (kashiriemp)
    if(! $conn)
    {
        echo 'not <br>';    
    }
//    else{
//        echo 'yes <br>';
//    }

//    mysqli_close($conn);
?>