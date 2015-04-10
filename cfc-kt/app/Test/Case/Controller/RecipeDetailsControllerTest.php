<?php

class RecipeDetailsControllerTest extends ControllerTestCase {
	function startCase() {   
		echo '<h1>Starting Test Case</h1>';  
	} 
	 function endCase() {  
	  echo '<h1>Ending Test Case</h1>';  
	}  
	function startTest($method) {   
		echo '<h3>Starting method ' . $method . '</h3>'; 
	 }  
	function endTest($method) {   
	 	echo '<hr />';  
	 }

	public function testIndex(){
		$result = $this->testAction('/recipeDetails/index');
		debug($result);
	}
	public function testAdd(){
		$data = array(
			'Post'=>array(
				'recipe_name'=>'recipe3',
				'recipe_description'=>'this is recipe3',
				'recipe_category'=>'spicy',
				'img file'=>'Mapo_toufu.png')
			);
		$res=$this->testAction('/recipeDetails/add',array('data'=>$data,'method'=>'post'));
		debug($res);
	}
	public function testEdit(){
		$data = array(
			'Post'=>array(
				'recipe_name'=>'recipe3',
				'recipe_description'=>'this is recipe3',
				'recipe_category'=>'sweet&sour',
				'img file'=>'Potato_beef.png')
			);
		$res=$this->testAction('/recipeDetails/edit/3',array('data'=>$data,'method'=>'get'));
		debug($res);
	}
	public function testEdit1(){
		
		$res=$this->testAction('/recipeDetails/edit/99',array('method'=>'get'));
		debug($res);
	}
	public function testView(){
		$res=$this->testAction('/recipeDetails/view/2',array('method'=>'get'));
		debug($res);
	}
	public function testView1(){
		$res=$this->testAction('/recipeDetails/view/0',array('method'=>'get'));
		debug($res);
	}
	public function testDelete(){
		$res=$this->testAction('/recipeDetails/',array('method'=>'get'));
		debug($res);
	}
}

?>