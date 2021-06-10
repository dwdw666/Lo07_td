<?php
    $dsn = 'mysql:dbname=wangtaoj;host=localhost;charset=utf8';
    $username = 'wangtaoj';
    $password = 'HmZOj8XD';
    
    try{
        $database = new PDO($dsn, $username, $password);
       
    } catch(PDOException $e){
        printf("%s - %s<p />\n", $e->getCode(), $e->getMessage());
    }
?>