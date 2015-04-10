<?php
	class IngredientItem extends AppModel
	{
		public $belongsTo = array(
			'RecipeDetail' => array(
				'className' => 'RecipeDetail',
				),
			'IngredientDetail' => array(
				'classname' => 'IngredientDetail',
				)
	);

		public $validate = array(
			'recipe_detail_id' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'A recipe id is required.'
					)
				),
			'ingredient_detail_id' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'An ingredient id is required.'
					)
				),
			'amount' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'An amount is required.'
					)
				),
			'unit' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'A unit required.'
					)
				),
			);
	}
?>