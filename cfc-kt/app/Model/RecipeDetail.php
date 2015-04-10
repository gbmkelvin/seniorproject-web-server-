<?php
	class RecipeDetail extends AppModel
	{
		public $hasMany = array(
			'IngredientItem' => array(
				'className' => 'IngredientItem',
				),
			'CookingMethod' => array(
				'className' => 'CookingMethod',
				)
		);
		public $validate = array(
			'recipe_name' => array(
					'rule' => 'isUnique',
					'message' => 'The name is already used.',
			
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'A recipe name is required.'
					)
				),
			'recipe_description' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'A recipe description is required.'
					)
				),
			'recipe_category' => array(
				'required' => array(
					'rule' => array('inList', array('spicy', 'sweet & sour', 'sour & spicy', 'hot-pot','smudging')),
					'message' => 'A recipe category is required, should be add category.',
					'allowEmpty' => false
					)
				),
			);

		public $actsAs = array(
        'MeioUpload.MeioUpload' => array(
        	'img_file' => array(
        		'maxSize' => '2 MB',
        		'allowedMime' => array('image/jpeg', 'image/pjpeg', 'image/png', 'image/bmp'),
        		'allowedExt' => array('.jpg', '.jpeg', '.png', '.bmp'),
        		'default' => 'default.jpg',
        		)
        	)
    	);
	}

?>