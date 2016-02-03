<?php 

	/**
	* 
	*/
	class ProductController extends AppController
	{
		public $name = 'Product';

       	public $uses = array('ProductCategory','Product','Tag');
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

				  $cat_product1 = $this->ProductCategory->find('first', array(
	            'conditions' => array(
	                'id' => $detailProduct['ProductCategory']['parent_id']
	            )
	        ));
	       
			 $this->set('cat_product1',$cat_product1);
			 // pr($cat_product1);die;
                     $arraytag1 = explode(",",$detailProduct['ProductCategory']['tags']);
		        
		        
		        $tag1 = $this->Tag->find('all', array(
		            'conditions' => array(
		                // 'ProductCategory.status' => 1,
		                'Tag.id' => $arraytag1
		            )
		        ));
		        // pr($tag1);die;
		        $this->set('tag1',$tag1);
		        /////////////////////
		        $child_arr = array($detailProduct['ProductCategory']['id']);
            foreach($cat_product as $child)
                if($child['ProductCategory']['parent_id'] == $detailProduct['ProductCategory']['id']){
                    $child_arr[] = $child['ProductCategory']['id'] ;
                }

                // pr($child_arr);die;
                 $this->paginate = array(
                    'conditions' => array(
                    'Product.product_category_id'=>$child_arr
                ),
                    'order' => 'Product.modified DESC',
                    'limit' => '8'
                );
          $data= $this->paginate('Product');
          $this->set('data', $data);
		}
		public function search()
		{
			$keyword='';

        if(isset($_GET['searchProduct'])) {

        $keyword=$_GET['searchProduct'];
        $this->Session->write('searchProduct',$keyword);

        }

        elseif($this->Session->check('keyword')){$keyword=$this->Session->read('searchProduct');  }

        $this->set('keyword', $keyword);

        // list all product

        $count=$this->Product->find('count',array(

            'conditions' => array(

                'Product.status' => 1,

                'Product.name LIKE' => '%' . $keyword . '%',
                
                //'Product.name_en LIKE' => '%' . $keyword . '%'
            )));
        $this->set('count', $count);

        $this->paginate = array(

            'conditions' => array(

                'Product.status' => 1,

                'Product.name LIKE'  => '%' . $keyword . '%' ,
                //'Product.name_en LIKE' => '%' . $keyword . '%'
            ),

            'order' => 'Product.modified DESC',

            'limit' => '12'

        );

        $listProduct = $this->paginate('Product');

        $this->set('listProduct', $listProduct);

         $this->Session->write('url','tim-kiem.html');

		}
	}
?>