<h3>Add Ingredient item</h3>
<?php
echo $this->Form->create('IngredientItem');
echo $this->Form->input('recipe_detail_id', array('type' => 'select', 'options' => $recipe_details));
echo $this->Form->input('ingredient_detail_id', array('type' => 'select', 'options' => $ingredient_details));
echo $this->Form->input('amount');
echo $this->Form->input('unit');
echo $this->Form->end('Save');
?>