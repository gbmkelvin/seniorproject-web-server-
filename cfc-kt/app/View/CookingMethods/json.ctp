<?php
 foreach ($cooking_methods as $cooking_method) {
        unset($cooking_method['CookingMethod']['generated_html']);
    }

    $json = array('status' => "OK",'result' => $cooking_methods);
    echo json_encode($json);

?>