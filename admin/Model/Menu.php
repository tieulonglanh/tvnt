<?php 
class Menu extends AppModel
{
	public $name = "Menu";
		
	public $belongsTo = array(
			'Parent'=>array(
				'className'=>'Menu',	
				'foreignKey'=>'parent_id'
			)
		);
	
}
?>