<?php
class RecipeDetailFixture extends CakeTestFixture {
// 	public $useDbConfig = 'test';
// 	public $fields = array(
// 			'id'=>array('type'=>'integer','key'=>'primary'),
// 			'recipe_name'=>array(
// 				'type'=>'string',
// 				'length'=>50,
// 				'default' => '0',
// 				'null'=>true
// 				),
// 			'recipe_description'=>'text',
// 			'recipe_category'=>array(
// 				'type'=>'string',
// 				'length'=>20,
// 				'default' => '0',
// 				'null'=>true
// 				),
// 			'img_file'=>array(
// 				'type'=>'string',
// 				'length'=>255,
// 				'default' => '0',
// 				'null'=>true
// 				),
// 			'dir'=>array(
// 				'type'=>'string',
// 				'length'=>255,
// 				'default' => '0',
// 				'null'=>true
// 				),
// 			'mimetype'=>array(
// 				'type'=>'string',
// 				'length'=>255,
// 				'default' => '0',
// 				'null'=>true
// 				),
// 			'filesize'=>array(
// 				'type'=>'integer',
// 				'length'=>11,
// 				'default' => '0',
// 				'null'=>true
// 				),
// 			);
// 	//1	 Spicy Fish Stew	
// 	//spicy	Spicy_Fish_Stew.jpg	uploads\recipe_detail\img_file	image/pjpeg	94767
// 	public function init(){
// 	 $this->records = array(
// 	 	array(
// 	 		'id'=>1,
// 	 		'recipe_name'=>'Spicy Fish Stew',
// 	 		'recipe_description'=>'this is recipe description',
// 	 		'recipe_category'=>'spicy',
// 	 		'img_file'=>'Spicy_Fish_Stew.jpg',
// 	 		'dir'=>'uploads\recipe_detail\img_file',
// 	 		'mimetype'=>'image/pjpeg',
// 	 		'filesize'=>'94767'
// 	 		),
// 	 	);
// 	 parent::init();
// 	}
// }
	public $name = 'RecipeDetail';
	public $import = array('model'=>'RecipeDetail','records'=>true);
?>