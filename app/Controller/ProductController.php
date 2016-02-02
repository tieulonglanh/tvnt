<?php 

	/**
	* 
	*/
	class ProductController extends AppController
	{
		public $name = 'Product';

       	public $uses = array('ProductCategory','Product');
		public function index(){

		}
		public function detail($alias){
			$detailProduct = $this->Product->findByAlias($alias);
			$this->set('detailProduct',$detailProduct);
		}
	}
?>