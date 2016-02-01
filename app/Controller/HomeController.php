<?php
	/**
	* 
	*/
	class HomeController extends AppController
	{
		public $name = 'Home';
    	public $uses = array('ProductCategory','Product','Tag');
		public function index($id=null)
		{
			 $cat_product = $this->ProductCategory->find('all', array(
            'conditions' => array(
                'ProductCategory.status' => 1,
                'ProductCategory.parent_id' => 0
            ),
            'order'=>'ProductCategory.id DESC',
            'limit'=>4
        ));
            $this->set('cat_product',$cat_product);
            // pr($cat_product);die;
            $list_cate_id1 = array();
        foreach ($cat_product as $product_cate) {
            $list_cate_id1[] = $product_cate['ProductCategory']['id'];
        }

        // pr($list_cate_id1); die;
        $cat_product1 = $this->ProductCategory->find('all', array(
            'conditions' => array(
                'ProductCategory.status' => 1,
                'ProductCategory.parent_id' => $list_cate_id1
            )
        ));
         // pr($cat_product1); die;
        $mang = array();
        foreach ($list_cate_id1 as $key => $value) {
            foreach ($cat_product1 as $product) {
                if ($product['ProductCategory']['parent_id'] == $value) {
                    $mang[$value][] = $product;
                }
            }
        }

        // pr($mang); die;
        $this->set('mang', $mang);
		}
        ////////////////////////
        public function ajax($id=null)
        {
            $this->layout=false;
             $cat_pro = $this->ProductCategory->read(null, $id);
             // pr($cat_pro);die;
            $this->set('cat_pro',$cat_pro);
        $arraytag = explode(",",$cat_pro['ProductCategory']['tags']);
        //pr($a); die;
        $tag = $this->Tag->find('all', array(
            'conditions' => array(
                // 'ProductCategory.status' => 1,
                'Tag.id' => $arraytag
            )
        ));
        // pr($tag);die;
        $this->set('tag',$tag);
        }
        //////////////////////
        public function tag($id)
        {
           $this->layout=false;

             $Tags = $this->Tag->read(null, $id);

             $name=$Tags['Tag']['tag_name'];
             $this->paginate = array(
            'conditions' => array(
                'Product.status' => 1,
                'Product.tags LIKE' => '%' . $name . '%',
                // 'Product.product_category_id'=>,
            ),
            'order' => 'Product.id DESC, Product.modified DESC',
            'limit' => '8'
        );

         $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);
        // pr($listProduct);die;

        }
	}
?>