<?php
    $host = "cfc-kt.appspot.com";
    $user = "root";
    $pass = "1234";
    $db = "kt_cfc";
 
    mysql_connect($host,$user,$pass);
    mysql_query("SET NAMES UTF8");
    mysql_query("USE $db");
 
   
    $sql = "SELECT * FROM RecipeDetails";
    $result = mysql_query($sql);
    if($result){
        while($row = mysql_fetch_array($result))
            $data[] = $row;
 
        $json = array('status' => "OK",'result' => $data);
    }else{
        $json = array('status' => "ERROR");
    }
 
    print(json_encode($json));
    mysql_close();
?>