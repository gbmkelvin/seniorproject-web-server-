<div class = "index">
	<table>
		<h2>Ingredient Item</h2>
		<?php echo $this->Html->link(
	'Add ingredient item', array('action' => 'add')
	);?>
			<tr>
				<th>Id</th>
				<th>Recipe_Id</th>
				<th>Ingredient_Id</th>
				<th>Amount</th>
				<th>Unit</th>
				<th>Action</th>
			</tr>

			<!--Here is where we loop through our $ingredient_item array, print out post info -->
			<?php foreach ($ingredient_items as $ingredient_item): ?>
			<tr>
				<td><?php echo $ingredient_item['IngredientItem']['id']; ?></td>
				<td><?php echo $ingredient_item['IngredientItem']['recipe_detail_id']; ?></td>
				<td><?php echo $ingredient_item['IngredientItem']['ingredient_detail_id']; ?></td>
				<td><?php echo $ingredient_item['IngredientItem']['amount']; ?></td>
				<td><?php echo $ingredient_item['IngredientItem']['unit']; ?></td>
				<td>
					<?php echo $this->Form->postLink(
						'Delete',
						array('action' => 'delete', $ingredient_item['IngredientItem']['id']),
						array('confirm' => 'Are you sure?'));
					?>
					<?php echo $this->Html->link('Edit', array('action' => 'edit', $ingredient_item['IngredientItem']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
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
	</table>
</div>

<div class = "actions">
	<h3>Menu</h3>
	<ul>
		<li><?php echo $this->Html->link('Recipe Detail', array('controller' => 'recipeDetails', 'action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Ingredient Detail', array('controller' => 'ingredientDetails', 'action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Ingredient Item', array('action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Cooking Method', array('controller' => 'cookingMethods' ,'action'=>'index')); ?></li>
		
</div>