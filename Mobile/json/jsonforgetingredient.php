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
FROM `recipe_details` INNER JOIN  `ingredient_items` ON `recipe_details`.`id` = `ingredient_items`.`recipe_detail_id`
  LEFT JOIN `ingredient_details` ON `ingredient_items`.`ingredient_detail_id` = `ingredient_details`.id where recipe_detail_id = '$key' ";
   
    $result = mysql_query($sql);
    if($result){
        while($row = mysql_fetch_array($result))
            $data[] = $row;
 
        $json = json_encode($data);
        print($json);
    }else{
        print("error");
    }
    mysql_close();
?>