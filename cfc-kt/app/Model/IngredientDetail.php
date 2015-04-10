<?php
	class IngredientDetail extends AppModel
	{
		public $hasMany = array(
			'IngredientItem' => array(
			'className' => 'IngredientItem',
		)
	);
		public $validate = array(
			'ingredient_name' => array(
				'rule' => 'isUnique',
					'message' => 'The name is already used.',
					
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'An ingredient name is required.'
					)
				),
			'ingredient_description' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'An ingredient description is required.'
					)
				),
			'ingredient_type' => array(
				'required' => array(
					'rule' => array('inList', array('meat', 'vegetable', 'spice', 'flavoring', 'fruit', 'oil', 'powder','pepper')),
					'message' => 'A ingredient category is required.',
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