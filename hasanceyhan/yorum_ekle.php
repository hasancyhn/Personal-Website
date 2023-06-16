<?php 
    require("connection.php");
    print_r($_POST);
    $makale_id=$_POST["makale_id"];
    $ad = $_POST["yorum_ad"];
    $yorum = $_POST["yorum"];
    $sorgu =  $db->prepare("INSERT INTO YORUM (MAKALE_ID,YORUM_AD,YORUM) VALUES (:id,:ad,:yorum)");
    $sorgu->bindParam(":id",$makale_id);
    $sorgu->bindParam(":ad",$ad);
    $sorgu->bindParam(":yorum",$yorum);
    $sorgu->execute();
    header("Location:makale_detayi.php?id=$makale_id");
?>