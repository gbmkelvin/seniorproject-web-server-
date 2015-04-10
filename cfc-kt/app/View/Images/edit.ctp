<div class="images form">
<?php echo $this->Form->create('Image');?>
	<fieldset>
 		<legend>Edit Image</legend>
	<?php
		echo $this->Form->input('filename');
		echo $this->Form->input('Image.filename.remove',  array('type' => 'checkbox', 'label' => 'Delete Image'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
