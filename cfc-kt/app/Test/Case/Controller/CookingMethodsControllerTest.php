<?php

class CookingMethodsControllerTest extends ControllerTestCase {
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
		$result = $this->testAction('/cookingMethods/index');
		debug($result);
	}
	public function testAdd(){
		$data = array(
			'Post'=>array(
				'recipe_detail_id'=>'1',
				'method_number'=>'26',
				'instruction'=>'this is cooking method 26.',
				'img file'=>'Step26.png')
			);
		$res=$this->testAction('/cookingMethods/add',array('data'=>$data,'method'=>'post'));
		debug($res);
	}
	public function testEdit(){
		$data = array(
			'Post'=>array(
				'recipe_detail_id'=>'1',
				'method_number'=>'26',
				'instruction'=>'method26.',
				'img file'=>'Step26.png')
			);
		$res=$this->testAction('/cookingMethods/edit/26',array('data'=>$data,'method'=>'get'));
		debug($res);
	}
	public function testEdit1(){
		
		$res=$this->testAction('/cookingMethods/edit/99',array('method'=>'get'));
		debug($res);
	}
	public function testView(){
		$res=$this->testAction('/cookingMethods/view/1',array('method'=>'get'));
		debug($res);
	}
	public function testView1(){
		$res=$this->testAction('/cookingMethods/view/0',array('method'=>'get'));
		debug($res);
	}
	public function testDelete(){
		$res=$this->testAction('/cookingMethods/',array('method'=>'get'));
		debug($res);
	}
}

?>