
<?php echo $this->Html->link('Back', array('action' => 'back'));?>
<div class = "index">
	<h3><?php echo h($recipe_detail['RecipeDetail']['recipe_name']); ?></h3>
	<?php echo $this->Html->image('/uploads/recipe_detail/img_file/'.$recipe_detail['RecipeDetail']['img_file'], array('width'=>'400px','height'=>'400px'));?>
	<p><strong>Description: </strong><?php echo $recipe_detail['RecipeDetail']['recipe_description']; ?></p>
	<p><strong>Category: </strong><?php echo h($recipe_detail['RecipeDetail']['recipe_category']); ?></p>
</div>

