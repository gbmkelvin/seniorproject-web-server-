<div class = "index">
	 <?php unset($recipe_detail['RecipeDetail']['generated_html']); ?>

	 <?php $json = array('status' => "OK",'result' => array($recipe_detail)); ?>
     <?php echo json_encode($json); ?>
</div>