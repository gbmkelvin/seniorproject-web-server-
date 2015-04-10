<h3>Add Cooking Method</h3>
<?php
	echo $this->Form->create('CookingMethod', array('type' => 'file'));
	echo $this->Form->input('recipe_detail_id', array('type' => 'select', 'options' => $recipe_details));
	echo $this->Form->input('method_number');
	echo $this->Form->input('instruction', array('row' => '3'));

	echo $this->Form->input('img_file', array('type' => 'file'));
	echo $this->Form->input('dir', array('type' => 'hidden'));
	echo $this->Form->input('mimetype', array('type' => 'hidden'));
	echo $this->Form->input('filesize', array('type' => 'hidden'));
	echo $this->Form->end('Save');
?>