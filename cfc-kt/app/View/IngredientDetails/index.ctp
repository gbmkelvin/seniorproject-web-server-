<div class = "index">
	<table>
		<h2>Ingredient Detail</h2>
		<?php echo $this->Html->link(
	'Add Ingredient detail', array('action' => 'add')
	);?>
			<tr>
				<th>Ingredient_Id</th>
				<th>Ingredient_Name</th>
				<th>Action</th>
			</tr>

			<!--Here is where we loop through our $ingredient_detail array, print out post info -->
			<?php foreach ($ingredient_details as $ingredient_detail): ?>
			<tr>
				<td><?php echo $ingredient_detail['IngredientDetail']['id']; ?></td>
				<td>
					<?php echo $this->Html->link($ingredient_detail['IngredientDetail']['ingredient_name'],
					array('action' => 'view', $ingredient_detail['IngredientDetail']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Form->postLink(
						'Delete',
						array('action' => 'delete', $ingredient_detail['IngredientDetail']['id']),
						array('confirm' => 'Are you sure?'));
					?>
					<?php echo $this->Html->link('Edit', array('action' => 'edit', $ingredient_detail['IngredientDetail']['id'])); ?>
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
		<li><?php echo $this->Html->link('Recipe Detail', array('controller' => 'recipeDetails', 'action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Ingredient Detail', array('action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Ingredient Item', array('controller' => 'ingredientItems' ,'action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Cooking Method', array('controller' => 'cookingMethods' ,'action'=>'index')); ?></li>
		
	</ul>
</div>