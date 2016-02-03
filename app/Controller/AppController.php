<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $uses = array('Menu','NewsCategory','Setting');
	 public function beforeFilter() {


 		$menufooter= $this->Menu->find('all',array('conditions'=>array(
 				'Menu.type'=>2,
 				'Menu.parent_id'=>0,
 			)));
 		$this->set('menufooter',$menufooter);
 		 $list_cate_id1 = array();
        foreach ($menufooter as $menufooter_cat) {
            $list_cate_id1[] = $menufooter_cat['Menu']['id'];
        }

        // pr($list_cate_id1); die;
        $menufooter1 = $this->Menu->find('all', array(
            'conditions' => array(
                'Menu.type'=>2,
                'Menu.parent_id' => $list_cate_id1
            )
        ));
         // pr($menufooter1); die;
        $mag = array();
        foreach ($list_cate_id1 as $key => $value) {
            foreach ($menufooter1 as $product) {
                if ($product['Menu']['parent_id'] == $value) {
                    $mag[$value][] = $product;
                }
            }
        }

        // pr($mang); die;
        $this->set('mag', $mag);



        $menuleft= $this->Menu->find('all',array('conditions'=>array(
 				'Menu.type'=>0,
 				'Menu.parent_id'=>0,
 			)));
 		$this->set('menuleft',$menuleft);
 		 $list_cate_id = array();
        foreach ($menuleft as $menuleft_cat) {
            $list_cate_id[] = $menuleft_cat['Menu']['id'];
        }

        // pr($list_cate_id); die;
        $menuleft1 = $this->Menu->find('all', array(
            'conditions' => array(
                'Menu.type'=>0,
                'Menu.parent_id' => $list_cate_id
            )
        ));
         // pr($menuleft1); die;
        $mag1 = array();
        foreach ($list_cate_id as $key => $value) {
            foreach ($menuleft1 as $product) {
                if ($product['Menu']['parent_id'] == $value) {
                    $mag1[$value][] = $product;
                }
            }
        }

        // pr($mang); die;
        $this->set('mag1', $mag1);

        $cat_news=$this->NewsCategory->find('all',array('conditions'=>array(
        		'NewsCategory.status'=>1,
        		'NewsCategory.parent_id'=>0,

        	)));
        $this->set('cat_news',$cat_news);
        ///////
        $footericon = $this->Setting->find('first', array(
            'conditions' => array(
                'name' => 'footer-icon'
            ),
            'order' => 'created DESC'
        ));
        $this->set('footericon', $footericon);

        ///
         $footerleft = $this->Setting->find('first', array(
            'conditions' => array(
                'name' => 'footer-left'
            ),
            'order' => 'created DESC'
        ));
        $this->set('footerleft', $footerleft);

         $banner = $this->Setting->find('first', array(
            'conditions' => array(
                'name' => 'banner'
            ),
            'order' => 'created DESC'
        ));
        $this->set('banner', $banner);
        /////////////////////////
         $icontop = $this->Setting->find('first', array(
            'conditions' => array(
                'name' => 'icontop'
            ),
            'order' => 'created DESC'
        ));
        $this->set('icontop', $icontop);

         $facebook = $this->Setting->find('first', array(
            'conditions' => array(
                'name' => 'facebook'
            ),
            'order' => 'created DESC'
        ));
        $this->set('facebook', $facebook);
 	}
}

