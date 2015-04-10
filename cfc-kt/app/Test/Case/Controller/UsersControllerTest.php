<?php
class UsersControllerTest extends ControllerTestCase{
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

	public function testLogin(){
		$result = $this->testAction('/users/login');
		debug($result);
	}
	public function testLogout(){
	
	}

}
?>