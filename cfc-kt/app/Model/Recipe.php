<?php
	class Recipe extends AppModel
	{
		public $validate = array(
			'recipe_name' => array(
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
					'rule' => array('inList', array('keang', 'numphrik', 'lap', 'desserts/snacks')),
					'message' => 'A recipe category is required.',
					'allowEmpty' => false
					)
				),
			);

		public $actsAs = array(
        'MeioUpload.MeioUpload' => array(
        	'img_file' => array(
        		'maxSize' => '2 MB',
        		'allowedMime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
        		'allowedExt' => array('.jpg', '.jpeg', '.png'),
        		'default' => 'default.jpg',
        		)
        	)
    	);
	}

?>