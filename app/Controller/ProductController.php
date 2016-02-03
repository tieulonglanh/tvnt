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
		public function list_product($alias){
			$detailProduct = $this->ProductCategory->findByAlias($alias);
			$this->set('detailProduct',$detailProduct);
			// pr($detailProduct);die;
			 $cat_product = $this->ProductCategory->find('all', array(
            'conditions' => array(
                'ProductCategory.status' => 1,
                'ProductCategory.parent_id' => $detailProduct['ProductCategory']['id']
            )
        ));
			 $this->set('cat_product',$cat_product);
			 // pr($cat_product[$detailProduct['ProductCategory']['id']]);die;
		}
	}
?>