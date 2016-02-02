<?php
	/**
	* 
	*/
	class HomeController extends AppController
	{
		public $name = 'Home';
    	public $uses = array('ProductCategory','Product','Tag','Sitemap');
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
        public function sitemap()
        {
            $sitemap_cat = $this->Sitemap->find('all', array(
            'conditions' => array(
                // 'Sitemap.status' => 1,
                'Sitemap.parent_id' => 0
            )
        ));
            $this->set('sitemap_cat',$sitemap_cat);
            // pr($sitemap_cat);die;
            $list_cate_id = array();
        foreach ($sitemap_cat as $sitemap_cate) {
            $list_cate_id[] = $sitemap_cate['Sitemap']['id'];
        }

        // pr($list_cate_id); die;
        $cat_sitemap = $this->Sitemap->find('all', array(
            'conditions' => array(
                // 'Sitemap.status' => 1,
                'Sitemap.parent_id' => $list_cate_id
            )
        ));
         // pr($cat_sitemap); die;
        $mang = array();
        foreach ($list_cate_id as $key => $value) {
            foreach ($cat_sitemap as $sitemap) {
                if ($sitemap['Sitemap']['parent_id'] == $value) {
                    $mang[$value][] = $sitemap;
                }
            }
        }

        // pr($mang); die;
        $this->set('mang', $mang);

        $list_cate_id1 = array();
        foreach ($cat_sitemap as $sitemap_cate1) {
            $list_cate_id1[] = $sitemap_cate1['Sitemap']['id'];
        }
        $cat_sitemap1 = $this->Sitemap->find('all', array(
            'conditions' => array(
                // 'Sitemap.status' => 1,
                'Sitemap.parent_id' => $list_cate_id1
            )
        ));
         // pr($cat_sitemap1); die;
        $mang1 = array();
        foreach ($list_cate_id1 as $key => $value) {
            foreach ($cat_sitemap1 as $sitemap1) {
                if ($sitemap1['Sitemap']['parent_id'] == $value) {
                    $mang1[$value][] = $sitemap1;
                }
            }
        }

         // pr($mang1); die;
        $this->set('mang1', $mang1);


        }
        public function contact(){

        }
	}
?>