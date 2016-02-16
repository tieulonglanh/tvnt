  <?php
$this->Paginator->options(array(
 'update' => '#con1',
 'evalScripts' => true,
 'url' => array('controller' => 'Home', 'action' => 'page', $typeProduct['ProductCategory']['id']),
));

?>
        <?php 
          if(!empty($data1)){ foreach ($data1 as $key => $row1) {
             $tag = explode(",",$row1['Product']['tags']);
             // pr($tag);die;
        ?>
          <div class="element wow rollIn <?php foreach ($tag as $key => $tag2) { echo Inflector::slug($tag2,"-")." "; }?>">
      
                <div class="image"><a href=""><img height="188" src="<?php echo DOMAIN?><?php echo $row1['Product']['images']?>" alt="MODELS - CLASSIC FURNITURE 02"></a></div>
                
    <div class="name"><a href=""><?php echo $row1['Product']['name']?></a></div>
   <div class="buttons" style="border:none">
  <a class="detail" href="http://newfuturegraphics.org/models-classic-furniture-02.html">Xem sản phẩm</a>
  <a class="contact" href="http://newfuturegraphics.org/index.php?route=information/contact">Liên hệ</a></div>
  <?php echo $this->Js->writeBuffer(); ?>
      </div>
      <?php }}?>
      <p class="continue">
                        <?php
                echo $this->Paginator->prev(' Trước ', null, null, array('class' => 'disabled','rel'=>'next/previous')); 
                echo $this->Paginator->numbers(array('separator' =>" ",'rel'=>'next/previous'));
                echo $this->Paginator->next(' Tiếp ', null, null, array('class' => 'disabled','rel'=>'next/previous')); 
            ?>
        </p>