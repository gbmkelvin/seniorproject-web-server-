<?php echo $this->Html->link('Back', array('action' => 'back'));?>
<div class = "index">
	<h3><strong>Recipe Name: </strong><?php echo $cooking_method['RecipeDetail']['recipe_name']; ?></h3>
	<p><strong>Recipe Detail ID:</strong> <?php echo h($cooking_method['CookingMethod']['recipe_detail_id']); ?></p>
	<?php echo $this->Html->image('/uploads/cooking_method/img_file/'.$cooking_method['CookingMethod']['img_file'], array('width'=>'200px'));?>
	<p><strong>Method Number: </strong><?php echo $cooking_method['CookingMethod']['method_number']; ?></p>
	<p><strong>Instruction: </strong><?php echo $cooking_method['CookingMethod']['instruction']; ?></p>
</div>