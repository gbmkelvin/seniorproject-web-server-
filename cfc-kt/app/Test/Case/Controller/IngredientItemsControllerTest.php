<?php
class IngredientItemsControllerTest extends ControllerTestCase{
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
		$result = $this->testAction('/ingredientItems/index');
		debug($result);
	}
	public function testAdd(){
		$data = array(
			'Post'=>array(
				'recipe_detail_id'=>'1',
				'ingredient_detail_id'=>'15',
				'amount'=>'1000',
				'unit'=>'gram(.g)'
				)
			);
		$res=$this->testAction('/ingredientItems/add',array('data'=>$data,'method'=>'post'));
		debug($res);
	}
	
	public function testDelete(){
		$res=$this->testAction('/ingredientItems/',array('method'=>'get'));
		debug($res);
	}
}


?>