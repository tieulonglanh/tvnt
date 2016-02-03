<?php echo $this->element('left-product')?>
<div id="column-right">
    
   <div class="box-left">
  <div class="box-heading"><a target="_blank" href="http://newfuturegraphics.org/thu-vien-3dsmax-2015">Kết quả tìm kiếm</a></div>
  
  <div id="tabs-1" class="box-content" style="position: relative">
  	 <div id="con4" class="box-product-left clearfix">

                  <?php 
          if(!empty($listProduct)){ foreach ($listProduct as $key => $row1) {
                ?>
                  <div class="element wow bounceInUp">
              
                        <div class="image"><a href=""><img height="188" src="<?php echo DOMAIN?><?php echo $row1['Product']['images']?>" alt="MODELS - CLASSIC FURNITURE 02"></a></div>
                        
            <div class="name"><a href=""><?php echo $row1['Product']['name']?></a></div>
           <div class="buttons" style="border:none">
          <a class="detail" href="http://newfuturegraphics.org/models-classic-furniture-02.html">Xem sản phẩm</a>
          <a class="contact" href="http://newfuturegraphics.org/index.php?route=information/contact">Liên hệ</a></div>
              </div>
              <?php }}?>
              <p class="continue">
            
                        <?php
                echo $this->Paginator->first(' Đầu ', null, null, array('class' => 'disabled'));     
                echo $this->Paginator->prev(' Trước ', null, null, array('class' => 'disabled')); 
                echo $this->Paginator->numbers(array('separator' =>" "));
                echo $this->Paginator->next(' Tiếp ', null, null, array('class' => 'disabled')); 
                echo $this->Paginator->last(' Cuối ', null, null, array('class' => 'disabled')); 
            ?>  

                      
        </p>
    </div>
  	</div>
  	
  </div>

</div>
