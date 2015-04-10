<?php
	class Image extends AppModel 
	{
    	var $actsAs = array(
        'MeioUpload.MeioUpload' => array(
        	'filename' => array(
        		'maxSize' => '2 MB',
        		'allowedMime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
        		'allowedExt' => array('.jpg', '.jpeg', '.png'),
        		'default' => 'default.jpg',
        		)
        	)
    	);
	}
?>