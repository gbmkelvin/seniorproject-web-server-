<h3>Add Recipe detail</h3>
<?php
echo $this->Form->create('RecipeDetail', array('type' => 'file'));
echo $this->Form->input('recipe_name');
echo $this->Form->input('recipe_description', array('row' => '3'));
echo $this->Form->input('recipe_category', array(
			'options' => array('spicy' => 'spicy', 'sweet & sour' => 'sweet & sour', 'sour & spicy' => 'sour & spicy', 'hot-pot' => 'hot-pot','smudging' =>'Smudging')
			));

echo $this->Form->input('img_file', array('type' => 'file'));
echo $this->Form->input('dir', array('type' => 'hidden'));
echo $this->Form->input('mimetype', array('type' => 'hidden'));
echo $this->Form->input('filesize', array('type' => 'hidden'));
echo $this->Form->end('Save');
?>