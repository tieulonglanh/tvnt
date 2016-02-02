<?php 
	/**
	* 
	*/
	class CommentController extends AppController
	{
		public $name = 'Comment';

       	public $uses = array('Menu','Slideshow','New','Advertisement');
		public function menungang(){

			return($this->Menu->find('all',array('conditions'=>array('Menu.type'=>1),'order'=>'Menu.id ASC')));
		}
		public function slideshow(){

			return($this->Slideshow->find('all',array('conditions'=>array('Slideshow.status'=>1),'order'=>'Slideshow.sort_order ASC')));
		}
		public function newleft(){

			return($this->New->find('all',array('conditions'=>array('New.status'=>1),'order'=>'New.modified DESC')));
		}
		public function ads(){

			return($this->Advertisement->find('all',array('conditions'=>array('Advertisement.status'=>1),'order'=>'Advertisement.position ASC','limit'=>'2')));
		}
	}
 ?>