<?php 
class Slideshow extends AppModel
{
	public $name = "Slideshow";
	public $validate = array(
        'images' => array(
				'notempty' => array(
					'rule' => array('notempty'),
					'message' => 'Phải nhập đường dẫn ảnh',
					'allowEmpty' => false
				)
		)
    );
}
?>