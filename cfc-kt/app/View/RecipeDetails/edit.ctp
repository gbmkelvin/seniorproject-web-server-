<div class = "index">
<h3>Edit Recipe detail</h3>
<?php
	echo $this->Form->create('RecipeDetail' , array('type' => 'file'));
	echo $this->Form->input('recipe_name');
	echo $this->Form->input('recipe_description', array('rows'=>'3'));
	echo $this->Form->input('recipe_category', array(
			'options' => array('spicy' => 'spicy', 'sweet & sour' => 'sweet & sour', 'sour & spicy' => 'sour & spicy', 'hot-pot' => 'hot-pot','smudging' =>'smudging')
			));

	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->input('img_file');
	//echo $this->Form->input('RecipeDetail.img_file.remove',  array('type' => 'checkbox', 'label' => 'Delete Image'));

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