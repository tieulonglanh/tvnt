<?php 
class Sitemap extends AppModel
{
	public $name = "Sitemap";
		
	public $belongsTo = array(
			'Parent'=>array(
				'className'=>'Sitemap',	
				'foreignKey'=>'parent_id'
			)
		);
	
}
?>