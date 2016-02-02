<?php 
	/**
	* 
	*/
	class NewsController extends AppController
	{
		public $name = 'News';

        public $uses = array('News','NewsCategory');
		public function index($id=null)
		{
		   $cateNew = $this->NewsCategory->read(null, $id);
           $this->set('cateNew', $cateNew);   
           $parmenu = $this->NewsCategory->find('list', array(
            'conditions' => array(
                'NewsCategory.parent_id' => $id,
                'NewsCategory.status' => 1
            )
                        ));
            $mang=array();$i=0;
            $mang[$i++]=$id;
            foreach($parmenu as $key=>$value){
            $mang[$i++]=$key;
            }
            if($id!=null) {
            // list all News
                $this->paginate = array(
                    'conditions' => array(
                    'News.status' => 1,
                    'News.news_category_id' => $mang
                ),
                    'order' => 'News.id DESC, News.modified DESC',
                    'limit' => '1'
                );
            }
            else {
                $this->paginate = array(
                'conditions' => array(
                'News.status' => 1,),
                'order' => 'News.modified DESC',
                'limit' => '1'
                );
            }
            $listNews = $this->paginate('News');
            $this->set('listNews', $listNews);        
		}
		public function detail($id=null){

         $detailNews = $this->News->read(null, $id);
           $this->set('detailNews', $detailNews);  
		}
	}
 ?>