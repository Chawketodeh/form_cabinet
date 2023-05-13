<?php
if( isset($_GET["id"]) ) {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mon_cabinet";

    // create connection
    $connection = new mysqli($servername , $username , $password , $database);

    $sql = "DELETE FROM clients WHERE id=$id";
    $connection->query($sql);
}

header("location:/mon_cabinet/index.php");
exit;
?>