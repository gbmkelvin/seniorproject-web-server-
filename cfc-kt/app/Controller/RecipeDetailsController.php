<?php
App::uses('JsonResponse', 'Json.Network');
App::uses('AppController', 'Controller');
class RecipeDetailsController extends AppController {

	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session', 'RequestHandler');
	
	
	public function json()
	{	
		$this->layout = 'json';

		//$this->set("recipe_details",$this->RecipeDetail->find("all"),array('id','recipe_name','recipe_category','img_file'));
		
		$sql="SELECT id,recipe_name,recipe_category,img_file 
			FROM recipe_details";

		$res=$this->RecipeDetail->Query($sql);
		
		//translate resultes into the standard format,like:[{},{},...]
		for($i=0;$i<count($res);$i++)
		{
			$arr[$i]=$res[$i]["recipe_details"];
		}
		
		//array to json
		$json=json_encode($arr);
		
		$this->set("data",$json);

	}


	public function index(){
		$data = $this->paginate();                  
        $this->set('recipe_details',$data);
		$this->set('recipe_details', $this->RecipeDetail->find('all'));
	}
	
	public function search()
	{
		$this->layout="json";
		
		//just for test.you should change its value by your needs
		if(isset($_REQUEST['keywords']))
		{
			$keywords=$_REQUEST['keywords'];
			$sql="SELECT id,recipe_name,recipe_category,img_file 
			FROM recipe_details WHERE recipe_name Like '%$keywords%'";
		}
		else 
		{
			return "please tap the key words";
		}
		
		
		$res=$this->RecipeDetail->Query($sql);
		
		//translate resultes into the standard format,like:[{},{},...]
		for($i=0;$i<count($res);$i++)
		{
			$arr[$i]=$res[$i]["recipe_details"];
		}
		
		//array to json
		$json=json_encode($arr);
		
		$this->set("data",$json);
	}


	public function descripte(){
		$this->layout="json";
		if (isset($_REQUEST['id'])) {
			$id = $_REQUEST['id'];
			$sql = "SELECT recipe_description FROM recipe_details WHERE id=$id";
			$res = $this->RecipeDetail->Query($sql);
			if (count($res)==1) {
				$this->set("data",$res[0]["recipe_details"]["recipe_description"]);
			} else{
				$this->set("data","Can't find the description!");
			}
		}else{
			$this->set("data","Can't find the description!");
		}
	}
	
	public function view($recipe_id = null){
		if(!$recipe_id){
			throw new NotFoundException(__('Invalid recipe detail'));
		}

		$recipe_detail = $this->RecipeDetail->findById($recipe_id);
		if(!$recipe_detail){
			throw new NotFoundException(__('Invalid recipe detail'));
		}
		$this->set('recipe_detail', $recipe_detail);
	}

	public function add(){
			if($this->request->is('post')){
				$this->RecipeDetail->create();
				if($this->RecipeDetail->save($this->request->data)){
					$this->Session->setFlash('Your recipe detail has been saved.');
					$this->redirect(array('action'=>'index'));
				}else{
						$this->Session->setFlash('Unable to add your recipe detail.');
					}
			}
		}

		public function edit($recipe_id){
			if(!$recipe_id){
				throw new NotFoundException(__('Invalid recipe detail'));
			}
			$recipe_detail = $this->RecipeDetail->findById($recipe_id);
			if(!$recipe_detail){
				throw new NotFoundException(__('Invalid recipe detail'));
			}

			if($this->request->is('post') || $this->request->is('put')){
				$this->RecipeDetail->recipe_id = $recipe_id;
				if($this->RecipeDetail->save($this->request->data))
				{
					$this->Session->setFlash('Your recipe detail has been updated.');
					$this->redirect(array('action' => 'index'));
				}else{
						$this->Session->setFlash('Unable to update your recipe detail.');
					}
			}
			if(!$this->request->data){
				$this->request->data = $recipe_detail;
			}
		}

		public function delete($recipe_id){
			if($this->request->is('get')){
				throw new MethodNotAllowedException();
			}
			if($this->RecipeDetail->delete($recipe_id)){
				$this->Session->setFlash('The recipe detail with id: '. $recipe_id .' has been deleted.');
				$this->redirect(array('action' => 'index'));
			}
		}

		public function back(){
			$this->redirect(array('action' => 'index'));
		}
	}
?>