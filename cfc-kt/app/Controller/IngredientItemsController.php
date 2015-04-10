<?php
App::uses('AppController', 'Controller');
class IngredientItemsController extends AppController
{
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public $paginate = array('limit'=>3);
	
	public function index()
	{
		$data = $this->paginate();                  
        $this->set('ingredient_items',$data);
		$this->set('ingredient_items', $this->IngredientItem->find('all',
			array(
				'order' => array(
					'IngredientItem.recipe_detail_id' => 'ASC'
					)
				)
			)
		);
	}

	/*public function view($id = null)
	{
		if(!$id)
		{
			throw new NotFoundException(__('Invalid ingredient item'));
		}

		$ingredient_item = $this->IngredientItem->findById($id);
		if(!$ingredient_item)
		{
			throw new NotFoundException(__('Invalid ingredient item'));
		}
		$this->set('ingredient_item', $ingredient_item);
	}*/

	public function add()
		{
			if($this->request->is('post'))
			{
				$this->IngredientItem->create();
				if($this->IngredientItem->save($this->request->data))
				{
					$this->Session->setFlash('Your ingredient item has been saved.');
					$this->redirect(array('action'=>'index'));
				}else
					{
						$this->Session->setFlash('Unable to add your ingredient item.');
					}
			}

			$this->loadModel('RecipeDetail');
			$this->set('recipe_details', $this->RecipeDetail->find('list', array(
        'fields' => array('RecipeDetail.recipe_name'))));

			$this->loadModel('IngredientDetail');
			$this->set('ingredient_details', $this->IngredientDetail->find('list', array(
        'fields' => array('IngredientDetail.ingredient_name'))));
			/*$recipe_detail = $this->RecipeDetail->find('list');
			$this->set(compact('recipe_details'));*/
		}

		public function edit($id = null)
		{
			if(!$id)
			{
				throw new NotFoundException(__('Invalid ingredient item'));
			}
			$ingredient_item = $this->IngredientItem->findById($id);
			if(!$ingredient_item)
			{
				throw new NotFoundException(__('Invalid ingredient item'));
			}

			if($this->request->is('post') || $this->request->is('put'))
			{
				$this->IngredientItem->id = $id;
				if($this->IngredientItem->save($this->request->data))
				{
					$this->Session->setFlash('Your ingredient item has been updated.');
					$this->redirect(array('action' => 'index'));
				}else
					{
						$this->Session->setFlash('Unable to update your ingredient item.');
					}
			}
			if(!$this->request->data)
			{
				$this->request->data = $ingredient_item;
			}
			
			$this->loadModel('RecipeDetail');
			$this->set('recipe_details', $this->RecipeDetail->find('list', array(
        'fields' => array('RecipeDetail.recipe_name'))));

			$this->loadModel('IngredientDetail');
			$this->set('ingredient_details', $this->IngredientDetail->find('list', array(
        'fields' => array('IngredientDetail.ingredient_name'))));
		}

		public function delete($id = null)
		{
			if($this->request->is('get'))
			{
				throw new MethodNotAllowedException();
			}
			if($this->IngredientItem->delete($id))
			{
				$this->Session->setFlash('The ingredeint item with ingredient item id: '. $id .' has been deleted.');
				$this->redirect(array('action' => 'index'));
			}
		}

		public function json()
		{	
			$this->layout = 'json';
			$this->set('ingredient_items', $this->IngredientItem->find('all'));
	       
		}
}
?>