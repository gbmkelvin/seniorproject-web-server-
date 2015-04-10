<div class = "index">
	<table>
		<h2>Cooking Method</h2>
		<?php echo $this->Html->link(
	'Add cooking method', array('action' => 'add')
	);?>
			<tr>
				<th>Id</th>
			
				<th>Recipe_Name</th>
				<th>Method_Number</th>
				<th>Instruction</th>
				<th>Action</th>
			</tr>

			<!--Here is where we loop through our $ingredient_item array, print out post info -->
			<?php foreach ($cooking_methods as $cooking_method): ?>
			<tr>
				<td><?php echo $cooking_method['CookingMethod']['id']; ?></td>
			<!-- 	<td>
					<?php echo $this->Html->link($cooking_method['CookingMethod']['recipe_detail_id'],
					array('action' => 'view', $cooking_method['CookingMethod']['id'])); ?>
				</td> -->
				<td><?php echo $this->Html->link($cooking_method['RecipeDetail']['recipe_name'],
					array('action' => 'view', $cooking_method['CookingMethod']['id']));?></td>

				<td><?php echo $cooking_method['CookingMethod']['method_number']; ?></td>
				<td><?php echo $cooking_method['CookingMethod']['instruction']; ?></td>
				<td>
					<?php echo $this->Form->postLink(
						'Delete',
						array('action' => 'delete', $cooking_method['CookingMethod']['id']),
						array('confirm' => 'Are you sure?'));
					?>
					<?php echo $this->Html->link('Edit', array('action' => 'edit', $cooking_method['CookingMethod']['id'])); ?>
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
		<li><?php echo $this->Html->link('Ingredient Item', array('controller' => 'ingredientItems' ,'action'=>'index')); ?></li>
		<li><?php echo $this->Html->link('Cooking Method', array('action'=>'index')); ?></li>
		
	</ul>
</div>