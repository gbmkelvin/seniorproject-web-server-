<div class = "index">
<h3>Edit Ingredeint detail</h3>
<?php
	echo $this->Form->create('IngredientDetail' , array('type' => 'file'));
	echo $this->Form->input('ingredient_name');
	echo $this->Form->input('ingredient_description', array('rows'=>'3'));
	echo $this->Form->input('ingredient_type', array(
			'options' => array('meat' => 'Meat', 'vegetable' => 'Vegetable', 'spice' => 'Spice', 'flavoring' => 'Flavoring', 'fruit' => 'Fruit', 'oil' => 'Oil', 'powder' => 'Powder','pepper'=>'Pepper')
			));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->input('img_file');
	//echo $this->Form->input('IngredientDetail.img_file.remove',  array('type' => 'checkbox', 'label' => 'Delete Image'));

	echo $this->Form->input('img_file', array('type' => 'file'));
	echo $this->Form->input('dir', array('type' => 'hidden'));
	echo $this->Form->input('mimetype', array('type' => 'hidden'));
	echo $this->Form->input('filesize', array('type' => 'hidden'));
	
	echo $this->Form->end('Save');
?>
</div>

  <?php echo $this->Html->link(
    'Back', array('action' => 'Back')
    );?>