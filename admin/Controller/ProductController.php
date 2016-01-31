<?php



/*

 * *

 * * Class xử lý phần quản lý sản phẩm

 * * author: Nguyễn Tất Lợi

 * * All rights reserved 

 * * date: 12/03/2012

 * *

 */



App::import('Vendor', 'ckeditor');

App::import('Vendor', 'ckfinder');



class ProductController extends AppController {



    public $name = 'Product';

    public $uses = array('Product', 'ProductCategory', 'ProductLink','Tag');



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



        $list_cat = $this->get_category('ProductCategory');

        $this->set('list_cat', $list_cat);









        $conditions = array();

        if(isset($this->request->query['name']) && !empty($this->request->query['name'])) {

            $conditions[] = array('LOWER(Product.name) like "%' . strtolower($this->request->query['name']) . '%"');

            $this->set('name', $this->request->query['name']);

        }

        if(isset($this->request->query['code']) && !empty($this->request->query['code'])) {

            $conditions[] = array('Product.code like "%' . strtolower($this->request->query['code']) . '%"');

            $this->set('code', $this->request->query['code']);

        }

        if(isset($this->request->query['price']) && !empty($this->request->query['price'])) {

               $conditions[] = array('Product.price' => strtolower($this->request->query['price']));

               $this->set('price', $this->request->query['price']);

        }



        if(isset($this->request->query['sl']) && !empty($this->request->query['sl'])) {

            $conditions[] = array('Product.sl' => strtolower($this->request->query['sl']));

            $this->set('sl', $this->request->query['sl']);

        }



        if(isset($this->request->query['sort_order']) && !empty($this->request->query['sort_order'])) {

            $conditions[] = array('Product.sort_order' => strtolower($this->request->query['sort_order']));

            $this->set('sort_order', $this->request->query['sort_order']);

        }



        if(isset($this->request->query['modified']) && !empty($this->request->query['modified'])) {

            $created = date('Y-m-d', strtotime($this->request->query['modified']));

            $conditions[] = array('Product.modified >= ' => $created . ' 00:00:00',

                'Product.modified <= ' => $created . ' 23:59:59');



            $this->set('modified', $this->request->query['modified']);

        }



        if(isset($this->request->query['category_id']) && !empty($this->request->query['category_id'])) {

            $conditions[] = array('ProductCategory.name' => strtolower($this->request->query['category_id']));

            $this->set('category_id', $this->request->query['category_id']);

        }





        $this->paginate = array('limit'=>15, 'order'=>'Product.id DESC', 'conditions' => $conditions);

        $product = $this->paginate('Product');

        $this->set('product', $product);

    }



    /*

     * *

     * * Trang thêm

     * *

     */



    public function add() {

        $this->Session->setFlash(__('', true));

        if (!empty($this->request->data)) {

            $data = $this->request->data;

            if (empty($data['Product']['product_category_id'])) {

                $this->Session->setFlash(__('Chưa chọn danh mục sản phẩm !', true));

            } else {

                if (!empty($data['link_free'])) {

                    $data['Product']['link_free'] = implode("|", $data['link_free']);

                }

                $data['Product']['multi_images'] = strip_tags($data['Product']['multi_images'], '<a><img><div>');

                if ($this->Product->save($data)) {

                    $product_id = $this->Product->getLastInsertId();

                    if (!empty($data['link_charge'])) {

                        $product_link = array();

                        $i = 1;

                        foreach ($data['link_charge'] as $key => $value) {

                            $product_link[] = array(

                                'id' => false,

                                'product_id' => $product_id,

                                'link_name' => "Link " . $data['Product']['name'] . " " . $i,

                                'link_href' => $value

                            );

                            $i++;

                        }

                        $this->ProductLink->saveAll($product_link);

                    }

                    $this->Session->setFlash(__('Thêm mới thành công !', true));

                    $this->redirect(array('action' => 'index'));

                } else {

                    $this->Session->setFlash(__('Hiện tại không thể thực hiện chức năng thêm mới. Mời thử lại !', true));

                }

            }

            $this->set('multi_images', $data['multi_images']);

        }

        $list_cat = $this->get_category('ProductCategory');

        $this->set('list_cat', $list_cat);
        
        $tags = $this->Tag->find('all');
        $tags_str = "";
        foreach($tags as $tag) {
            $tags_str .= "{value: '{$tag['Tag']['tag_name']}', label: '{$tag['Tag']['tag_name']}'},";
        }
        
        $tags_str = rtrim($tags_str,',');
        $this->set('tags_str', $tags_str);

    }



    /*

     * *

     * * Trang sửa đổi thông tin

     * *

     */



    public function edit($id = null) {

        $this->Session->setFlash(__('', true));

        if (!$id && empty($this->request->data)) {

            $this->redirect(array('controller' => 'Product', 'action' => 'index'));

        } else if (!empty($this->request->data)) {

            $data = $this->request->data;
            
            $tag_ids = $data['Product']['tags'];
            $tags = $this->Tag->find('list', array(
                        'fields' => array('tag_name'),
                        'conditions' => array(
                            'Tag.id' => explode(',', $tag_ids)
                        )
                    ));
            $this->set('tag_ids', $tag_ids);
            $this->set('tags_list', implode(',',$tags));

            if (empty($data['Product']['product_category_id'])) {

                $this->Session->setFlash(__('Chưa chọn danh mục sản phẩm !', true));

            } else {

                $data['Product']['multi_images'] = strip_tags($data['Product']['multi_images'], '<a><img><div>');

                if ($this->Product->save($data['Product'])) {

                    $product_id = $data['Product']['id'];


                    $this->Session->setFlash(__('Sửa thành công.', true));

                    $this->redirect(array('action' => 'index'));

                } else {

                    $this->Session->setFlash(__('Hiện tại hệ thống không thể sử dụng chức năng Edit, mời thử lại sau.', true));

                }

            }

        } else if (empty($this->request->data)) {
            
            $this->data = $this->Product->read(null, $id);

        }

        $list_cat = $this->get_category('ProductCategory');

        $this->set('list_cat', $list_cat);

        $tags = $this->Tag->find('all');
        $tags_str = "";
        foreach($tags as $tag) {
            $tags_str .= "{value: '{$tag['Tag']['tag_name']}', label: '{$tag['Tag']['tag_name']}'},";
        }
        
        $tags_str = rtrim($tags_str,',');
        $this->set('tags_str', $tags_str);

        // $list_link = $this->ProductLink->findAllByProductId($id);		//echo "<pre>";		//var_dump($list_link);

        // $this->set('list_link', $list_link);

    }



    /*

     * *

     * * Hàm copy nội dung 

     * *

     */



    public function copy($id) {

        $this->Session->setFlash(__('', true));

        if (!empty($id)) {

            $data = $this->Product->read(null, $id);

            $this->data = $data;

            if (!empty($this->data['Product']['multi_images'])) {

                $multi_images = explode("|", $this->data['Product']['multi_images']);

                $this->set('multi_images', $multi_images);

            }

            $list_cat = $this->get_category('ProductCategory');

            $this->set('list_cat', $list_cat);

            $this->render('add');

        } else {

            $this->redirect(array('action' => 'index'));

        }

    }



    /**

     *

     * * Hàm xóa

     * *

     */

    public function delete($id = null) {

        $this->Session->setFlash(__('', true));

        if (!empty($id)) {

            $this->Product->delete($id);

            $this->Session->setFlash(__('Xóa liên hệ thành công', true));

        } else {

            $this->Session->setFlash(__('Hiện tại không thể sử dụng chức năng Delete', true));

        }

        $this->redirect(array('action' => 'index'));

    }



    /*

     * *

     * * Hàm xóa nhiều

     * *

     */



    public function delete_all($data_action) {

        $this->Session->setFlash(__('', true));

        if (!empty($data_action)) {

            $condition = array();

            foreach ($data_action as $key => $value) {

                $condition[] = $key;

            }

            if ($this->Product->delete($condition)) {

                $this->Session->setFlash(__('Xóa tất cả thành công', true));

            } else {

                $this->Session->setFlash(__('Hiện tại không thể sử dụng chức năng Delete All', true));

            }

        }

        $this->redirect(array('action' => 'index'));

    }



    /*

     * *

     * * Hàm active

     * *

     */



    public function active($id = null) {

        $this->Session->setFlash(__('', true));

        if (!empty($id)) {

            $this->Product->save(array('Product' => array('status' => 1, 'id' => $id)));

            $this->Session->setFlash(__('Active thành công', true));

        } else {

            $this->Session->setFlash(__('Hiện tại không thể sử dụng chắc năng Active', true));

        }

        $this->redirect(array('action' => 'index'));

    }



    /*

     * *

     * * Hàm active nhiều 

     * *

     */



    public function active_all($data_action) {

        $this->Session->setFlash(__('', true));

        if (!empty($data_action)) {

            $condition = array();

            foreach ($data_action as $key => $value) {

                $condition[] = $key;

            }

            if ($this->Product->updateAll(array('status' => 1), array('Product.id' => $condition))) {

                $this->Session->setFlash(__('Active tất cả thành công', true));

            } else {

                $this->Session->setFlash(__('Hiện tại không thể sử dụng chức năng Active All', true));

            }

        }

        $this->redirect(array('action' => 'index'));

    }



    /*

     * *

     * * Hàm hủy Active

     * *

     */



    public function close($id = null) {

        $this->Session->setFlash(__('', true));

        if (!empty($id)) {

            $this->Product->save(array('Product' => array('status' => 0, 'id' => $id)));

            $this->Session->setFlash(__('Close thành công', true));

        } else {

            $this->Session->setFlash(__('Hiện tại không thể thực hiện chức năng Close', true));

        }

        $this->redirect(array('action' => 'index'));

    }



    /*

     * *

     * * Hàm hủy active nhiều 

     * *

     */



    public function close_all($data_action) {

        $this->Session->setFlash(__('', true));

        if (!empty($data_action)) {

            $condition = array();

            foreach ($data_action as $key => $value) {

                $condition[] = $key;

            }

            if ($this->Product->updateAll(array('status' => 0), array('Product.id' => $condition))) {

                $this->Session->setFlash(__('Close tất cả thành công', true));

            } else {

                $this->Session->setFlash(__('Hiện tại không thể sử dụng chức năng Close All', true));

            }

        }

        $this->redirect(array('action' => 'index'));

    }



    /*

     * *

     * * Hàm điều hướng khi check all

     * * xem action là gì thì gọi hàm xử lý action đó

     * *

     */



    public function action_all() {

        if ($this->request->is('POST')) {

            $action = $this->request->data['process'];

            $data_action = $this->request->data['chose_active'];

            if ($action == 'none') {

                $this->redirect(array('action' => 'index'));

            } else if ($action == 'active_all') {

                $this->active_all($data_action);

            } else if ($action == 'close_all') {

                $this->close_all($data_action);

            } else if ($action == 'delete_all') {

                $this->delete_all($data_action);

            }

        } else {

            $this->redirect(array('action' => 'index'));

        }

    }



    /*

     * *

     * * Hàm tìm kiếm

     * *

     */



    public function search() {

        if ($this->request->is('POST')) {

            $keyword = $this->request->data['keyword'];

            $category_id = $this->request->data['category_id'];

            $conditions = array();

            if (!empty($keyword)) {

                $conditions[] = array('Product.name like "%' . $keyword . '%"');

            }



            if (!empty($category_id)) {

                $conditions[] = array('Product.Product_category_id' => $Product_category_id);

            }

            //pr($conditions); die;

            $this->paginate = array(

                'conditions' => $conditions,

                'limit' => 15,

                'order' => 'Product.id DESC, Product.modified DESC'

            );

            $product = $this->paginate('Product');

            $this->set('product', $product);

            $list_cat = $this->get_category('ProductCategory');

            $this->set('list_cat', $list_cat);

            $this->render('index');

        } else {

            $this->redirect(array('action' => 'index'));

        }

    }



}



?>

