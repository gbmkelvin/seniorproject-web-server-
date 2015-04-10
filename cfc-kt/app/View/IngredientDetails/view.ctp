<?php echo $this->Html->link('Back', array('action' => 'back'));?>
<div class = "index">
	<h3><?php echo h($ingredient_detail['IngredientDetail']['ingredient_name']); ?></h3>
	<?php echo $this->Html->image('/uploads/ingredient_detail/img_file/'.$ingredient_detail['IngredientDetail']['img_file'], array('width'=>'200px'));?>
	<p><strong>Description: </strong><?php echo $ingredient_detail['IngredientDetail']['ingredient_description']; ?></p>
	<p><strong>Type: </strong><?php echo h($ingredient_detail['IngredientDetail']['ingredient_type']); ?></p>
</div>