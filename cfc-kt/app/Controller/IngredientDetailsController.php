<?php
	App::uses('AppController', 'Controller');
	class IngredientDetailsController extends AppController{
		public $helpers = array('Html', 'Form', 'Session');
		public $components = array('Session');
		public $paginate = array('limit'=>3);

		public function index(){
				$data = $this->paginate();                  
        	$this->set('ingredient_details',$data);
			$this->set('ingredient_details', $this->IngredientDetail->find('all')
			);
		}

		public function view($ingredient_id = null){
			if(!$ingredient_id){
				throw new NotFoundException(__('Invalid ingredient detail'));
			}

			$ingredient_detail = $this->IngredientDetail->findById($ingredient_id);
			if(!$ingredient_detail){
				throw new NotFoundException(__('Invalid ingredient detail'));
			}
			$this->set('ingredient_detail', $ingredient_detail);
		}

		public function add(){
				if($this->request->is('post')){
					$this->IngredientDetail->create();
					if($this->IngredientDetail->save($this->request->data)){
						$this->Session->setFlash('Your ingredient detail has been saved.');
						$this->redirect(array('action'=>'index'));
					}else{
							$this->Session->setFlash('Unable to add your ingredient detail.');
						}
				}
			}

			public function edit($ingredient_id = null){
				if(!$ingredient_id){
					throw new NotFoundException(__('Invalid ingredient detail'));
				}
				$ingredient_detail = $this->IngredientDetail->findById($ingredient_id);
				if(!$ingredient_detail){
					throw new NotFoundException(__('Invalid ingredient detail'));
				}

				if($this->request->is('post') || $this->request->is('put')){
					$this->IngredientDetail->ingredient_id = $ingredient_id;
					if($this->IngredientDetail->save($this->request->data)){
						$this->Session->setFlash('Your ingredient detail has been updated.');
						$this->redirect(array('action' => 'index'));
					}else{
							$this->Session->setFlash('Unable to update your ingredient detail.');
						}
				}
				if(!$this->request->data){
					$this->request->data = $ingredient_detail;
				}
			}

			public function delete($ingredient_id){
				if($this->request->is('get')){
					throw new MethodNotAllowedException();
				}
				if($this->IngredientDetail->delete($ingredient_id)){
					$this->Session->setFlash('The ingredient detail with id: '. $ingredient_id .' has been deleted.');
					$this->redirect(array('action' => 'index'));
				}
			}

			public function json(){	
				$this->layout = 'json';
				
		
				// $this->set("recipe_details",$this->RecipeDetail->find("all"));
				
				$sql="SELECT id,ingredient_name,img_file 
					FROM ingredient_details";

				$res=$this->IngredientDetail->Query($sql);
				
				//translate resultes into the standard format,like:[{},{},...]
				for($i=0;$i<count($res);$i++)
				{
					$arr[$i]=$res[$i]["ingredient_details"];
				}
				
				//array to json
				$json=json_encode($arr);
				
				$this->set("data",$json);

			}

			public function back(){
				$this->redirect(array('action' => 'index'));
			}
		}
?>