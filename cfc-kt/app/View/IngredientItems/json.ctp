<?php
 foreach ($ingredient_items as $ingredient_item) {
        unset($ingredient_item['IngredientItem']['generated_html']);
    }

    $json = array('status' => "OK",'result' => $ingredient_items);
    echo json_encode($json);

?>