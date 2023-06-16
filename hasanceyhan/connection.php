<?php 
    try{
        $db = new PDO("mysql:host=localhost;dbname=blog_veritabani;charset=utf8","root","");
    }
    catch(Exception $e){
        echo $e->getMessage();
    }

?>
