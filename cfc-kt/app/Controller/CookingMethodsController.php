<?php
App::uses('AppController', 'Controller');
class CookingMethodsController extends AppController
{
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');
	public $paginate = array('limit'=>3);
	public function index()
	{
		$data = $this->paginate();                  
        $this->set('cooking_methods',$data);
		$this->set('cooking_methods', $this->CookingMethod->find('all',
			array(
				'order' => array(
					'CookingMethod.recipe_detail_id' => 'ASC'
					)
				)
			)
		);
	}

	public function view($id = null)
	{
		if(!$id)
		{
			throw new NotFoundException(__('Invalid cooking method'));
		}

		$cooking_method = $this->CookingMethod->findById($id);
		if(!$cooking_method)
		{
			throw new NotFoundException(__('Invalid cooking method'));
		}
		$this->set('cooking_method', $cooking_method);
	}

	public function add()
		{
			if($this->request->is('post'))
			{
				$this->CookingMethod->create();
				if($this->CookingMethod->save($this->request->data))
				{
					$this->Session->setFlash('Your cooking method has been saved.');
					$this->redirect(array('action'=>'index'));
				}else
					{
						$this->Session->setFlash('Unable to add your cooking method.');
					}
			}
			 $this->loadModel('RecipeDetail');
			$this->set('recipe_details', $this->RecipeDetail->find('list', array(
            'fields' => array('RecipeDetail.recipe_name'))));
			// $recipe_detail = $this->RecipeDetail->find('list');
			// $this->set(compact('recipe_details'));
		}

		public function edit($id = null)
		{
			if(!$id)
			{
				throw new NotFoundException(__('Invalid cooking method'));
			}
			$cooking_method = $this->CookingMethod->findById($id);
			if(!$cooking_method)
			{
				throw new NotFoundException(__('Invalid cooking method'));
			}

			if($this->request->is('post') || $this->request->is('put'))
			{
				$this->CookingMethod->id = $id;
				if($this->CookingMethod->save($this->request->data))
				{
					$this->Session->setFlash('Your cooking method has been updated.');
					$this->redirect(array('action' => 'index'));
				}else
					{
						$this->Session->setFlash('Unable to update your cooking method.');
					}
			}
			if(!$this->request->data)
			{
				$this->request->data = $cooking_method;
			}

			$this->loadModel('RecipeDetail');
			$this->set('recipe_details', $this->RecipeDetail->find('list', array(
        'fields' => array('RecipeDetail.recipe_name'))));
			// $this->loadModel('CookingMethod');
			// $this->set('cooking_methods', $this->CookingMethod->find('list'));
		}

		public function delete($id = null)
		{
			if($this->request->is('get'))
			{
				throw new MethodNotAllowedException();
			}
			if($this->CookingMethod->delete($id))
			{
				$this->Session->setFlash('The cooking method with cooking method id: '. $id .' has been deleted.');
				$this->redirect(array('action' => 'index'));
			}
		}

		public function json()
		{	
			$this->layout = 'json';
			$this->set('cooking_methods', $this->CookingMethod->find('all'));
	       
		}

		public function back(){
			$this->redirect(array('action' => 'index'));
		}
}
?>