<?php 
/**
* 
*/
class PostController extends AppController
{	
	public $name = 'Post';
	public $uses= array('Post');
	 public function detail($alias=null)
	{
		 $post = $this->Post->findByAlias($alias);
		 $this->set('post',$post);
		 // pr($post);die;
	}
}