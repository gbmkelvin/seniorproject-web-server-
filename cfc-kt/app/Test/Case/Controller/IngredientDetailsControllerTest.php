<?php
class IngredientDetailsControllerTest extends ControllerTestCase{
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
		$result = $this->testAction('/ingredientDetails/index');
		debug($result);
	}
	public function testAdd(){
		$data = array(
			'Post'=>array(
				'ingredient_name'=>'ingredient1',
				'ingredient_description'=>'this is ingredient 1',
				'ingredient_type'=>'meat',
				'img_file'=>'beef.jpg')
			);
		$res=$this->testAction('/ingredientDetails/add',array('data'=>$data,'method'=>'post'));
		debug($res);
	}
	public function testEdit(){
		$data = array(
			'Post'=>array(
				'ingredient_name'=>'ingredient2',
				'ingredient_description'=>'this is ingredient 2',
				'ingredient_type'=>'meat',
				'img_file'=>'beef.jpg')
			);
		$res=$this->testAction('/ingredientDetails/edit/15',array('data'=>$data,'method'=>'get'));
		debug($res);
	}
	public function testEdit1(){
		
		$res=$this->testAction('/ingredientDetails/edit/99',array('method'=>'get'));
		debug($res);
	}
	public function testView(){
		$res=$this->testAction('/ingredientDetails/view/1',array('method'=>'get'));
		debug($res);
	}
	public function testView1(){
		$res=$this->testAction('/ingredientDetails/view/0',array('method'=>'get'));
		debug($res);
	}
	public function testDelete(){
		$res=$this->testAction('/ingredientDetails/',array('method'=>'get'));
		debug($res);
	}
}


?>