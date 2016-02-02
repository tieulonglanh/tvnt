<?php

/*
 * *
 * * Class xử lý phần quản lý cấu hình
 * * author: Nguyễn Tất Lợi
 * * All rights reserved 
 * * date: 12/03/2012
 * *
 */

class BloghtmlController extends AppController {

    public $name = 'Bloghtml';
    public $uses = array('Bloghtml');

    /*
     * *
     * * Hàm khỏi tạo 
     * *
     */

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'admin';
        if (!$this->Session->read("id") || !$this->Session->read("name")) {
            $url = '/login?redirect_url=' . $this->params->url;
            $this->redirect($url);
        }
    }

    /*
     * *
     * * Trang index
     * *
     */

    public function index() {
        $this->paginate = array('limit' => 15, 'order' => 'Bloghtml.id DESC');
        $Bloghtml = $this->paginate('Bloghtml');
        $this->set('Bloghtml', $Bloghtml);
    }

    public function add() {
        $this->Session->setFlash(__('', true));
        if (!empty($this->request->data)) {
            $data = $this->request->data;
            if ($this->Bloghtml->save($data)) {
                $this->Session->setFlash(__('Thêm mới thành công !', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Hiện tại không thể thực hiện chức năng thêm mới. Mời thử lại !', true));
            }
        }
    }
    
    public function edit($id = null)
	{
            $this->Session->setFlash(__('', true));
            if (!$id && empty($this->request->data)) {
                $this->redirect(array('controller'=>'Bloghtml', 'action'=>'index'));
            }else if (!empty($this->request->data)) {
                $data = $this->request->data;
                    if ($this->Bloghtml->save($data['Bloghtml'])){
                        $this->Session->setFlash(__('Sửa thành công.', true));
                        $this->redirect(array('action' => 'index'));
                    } else {
                        $this->Session->setFlash(__('Hiện tại hệ thống không thể sử dụng chức năng Edit, mời thử lại sau.', true));
                    }
            }else if (empty($this->request->data)) {
                $this->data = $this->Bloghtml->read(null, $id);
            }
	}

}

?>
