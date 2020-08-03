<link href="../bootstrap-4.4.1-dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="../bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../bootstrap-4.4.1-dist/jquery.v3.1.4.min.js" type="text/javascript"></script>
<script src="../bootstrap-4.4.1-dist/js/bootstrap.js" type="text/javascript"></script>
<a href="../bootstrap-4.4.1-dist/js/bootstrap.js.map"></a>

<form action="try.php" method="post">
    <input type="text" name="search">
    <input type="submit" name="submit">
</form>

<?php
include_once './connDb.php';
if (isset($_POST['search'])) {
    $search_value = $_POST['search'];
    $search_value = preg_replace("#[^0-9a-z]#i", "", $search_value);
    $qury = "select * from category where cateory LIKE '%$search_value%'";
    $arr = mysqli_query($conn, $qury);
    ?> <select name="searchopt" id="searchopt"> <?php
        while ($row = mysqli_fetch_array($arr)) {
            ?>
            <option value="<?php echo $row['cateory']; ?>"><?php echo $row['cateory']; ?></option>     
        <?php } ?>
    </select>
<?php } ?>               


