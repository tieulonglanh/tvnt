<?php
	/**
	* 
	*/
	class HomeController extends AppController
	{
		public $name = 'Home';
    	public $uses = array('ProductCategory','Product');
		public function index($id=null)
		{
			# code...
		}
	}
?>