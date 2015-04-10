<?php
	class CookingMethod extends AppModel
	{
		public $belongsTo = array(
			'RecipeDetail' => array(
				'className' => 'RecipeDetail',
				)
			);

		public $validate = array(
			'recipe_detail_id' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'A recipe id is required.'
					)
				),
			'method_number' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'A method number is required.'
					)
				),
			'instruction' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'A instruction is required.',
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