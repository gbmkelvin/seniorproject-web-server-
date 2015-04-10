<div class = "index">
	<table>
		<h2>Recipe Detail</h2>
		<?php echo $this->Html->link(
	'Add Recipe detail', array('action' => 'add')
	);?>
			<tr>
				<th>Recipe_Id</th>
				<th>Recipe_Name</th>
				<th>Action</th>
			</tr>

			<!--Here is where we loop through our $recipe_detail array, print out post info -->
			<?php foreach ($recipe_details as $recipe_detail): ?>
			<tr>
				<td><?php echo $recipe_detail['RecipeDetail']['id']; ?></td>
				<td>
					<?php echo $this->Html->link($recipe_detail['RecipeDetail']['recipe_name'],
					array('action' => 'view', $recipe_detail['RecipeDetail']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Form->postLink(
						'Delete',
						array('action' => 'delete', $recipe_detail['RecipeDetail']['id']),
						array('confirm' => 'Are you sure?'));
					?>
					<?php echo $this->Html->link('Edit', array('action' => 'edit', $recipe_detail['RecipeDetail']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
	<table>
		<td>
			<?php 
		        
		       
		        echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));
		        echo '&nbsp;&nbsp;&nbsp;';
		        echo $this->Paginator->numbers();
		        echo '&nbsp;&nbsp;&nbsp;';
		        echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));
		       
		        
		    ?>
		</td>
	</table>
</div>

<div class = "actions">
	<h3>Menu</h3>
	<ul>
		<li><?php echo $this->Html->link('Recipe Detail', array('action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Ingredient Detail', array('controller' => 'ingredientDetails', 'action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Ingredient Item', array('controller' => 'ingredientItems' ,'action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Cooking Method', array('controller' => 'cookingMethods' ,'action'=>'index')); ?></li>
		
	</ul>

</div>

