<?php 
/**
* 
*/
class PostController extends AppController
{	
	public $name = 'Post';
	public $uses= array('Post');
	 public function index($id=null)
	{
		 $post = $this->Post->read(null, $id);
		 $this->set('post',$post);
	}
}