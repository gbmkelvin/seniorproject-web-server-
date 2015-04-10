<?php
    $host = "localhost";
    $user = "root";
    $pass = "1234";
    $db = "kt_cfc";
 
    mysql_connect($host,$user,$pass);
    mysql_query("SET NAMES UTF8");
    mysql_query("USE $db");
    $key = $_REQUEST['key'];
   
    $sql = "SELECT *
FROM `recipe_details` INNER JOIN  `cooking_methods` ON `recipe_details`.`id` = `cooking_methods`.`recipe_detail_id` where recipe_detail_id = '$key'";
   
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