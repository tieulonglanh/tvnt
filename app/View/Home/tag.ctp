<?php foreach ($listProduct as $key => $value) {
?>
<div class="element wow bounceInRight">
      
                <div class="image"><a href=""><img height="188" src="<?php echo DOMAIN?><?php echo $value['Product']['images']?>" alt="MODELS - CLASSIC FURNITURE 02"></a></div>
                
		<div class="name"><a href=""><?php echo $value['Product']['name']?></a></div>
	 <div class="buttons" style="border:none">
	<a class="detail" href="http://newfuturegraphics.org/models-classic-furniture-02.html">Xem sản phẩm</a>
	<a class="contact" href="http://newfuturegraphics.org/index.php?route=information/contact">Liên hệ</a></div>
      </div>
<?php }?>
        <p class="continue">
            
                        <?php
                echo $this->Paginator->first(' Đầu ', null, null, array('class' => 'disabled'));     
                echo $this->Paginator->prev(' Trước ', null, null, array('class' => 'disabled')); 
                echo $this->Paginator->numbers(array('separator' =>" "));
                echo $this->Paginator->next(' Tiếp ', null, null, array('class' => 'disabled')); 
                echo $this->Paginator->last(' Cuối ', null, null, array('class' => 'disabled')); 
            ?>  

                      
        </p>