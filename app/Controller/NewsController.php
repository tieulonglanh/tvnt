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
		   
                $this->paginate = array(
                    'conditions' => array(
                    'News.status' => 1
                    
                ),
                    'order' => 'News.modified DESC',
                    'limit' => '5'
                );

            $listNew = $this->paginate('News');
            $this->set('listNew', $listNew);        
		}
        public function category($alias)
        
        {
           $cateNew = $this->NewsCategory->findByAlias($alias);
           $this->set('cateNew', $cateNew);   
          // pr($cateNew);die;
                $this->paginate = array(
                    'conditions' => array(
                    'News.status' => 1,
                    'News.news_category_id' => $cateNew['NewsCategory']['id']
                ),
                    'order' => 'News.id DESC, News.modified DESC',
                    'limit' => '1'
                );
           
            $listNews = $this->paginate('News');
            $this->set('listNews', $listNews);        
        }
		public function detail($alias){

         $detailNews = $this->News->findByAlias($alias);
           $this->set('detailNews', $detailNews);
           // pr($detailNews);die;
        $typeName = $this->NewsCategory->read(null, $detailNews['News']['news_category_id']);
        $this->set('typeName', $typeName);
		}
	}
 ?>