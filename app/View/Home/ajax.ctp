
     <?php 
    // echo $this->Html->script('jquery');
   $this->Paginator->options(array(
      'update' => '#tabs-3',
      'evalScripts' => true,
      // 'before' => $this->Js->get("#tabs-3")->effect('fadeIn', array('buffer' => false)),
      // 'complete' => $this->Js->get("#tabs-3")->effect('fadeOut', array('buffer' => false)),
   )); 
?>
<div id="option4" class="tag clearfix">
	  		<ul id="filters" class="option-set clearfix" data-option-key="filter">
	  			<!-- <li><a href="#" title="" data-option-value="*">Tổng hợp </a></li> -->
	  			<?php foreach ($tag as $key => $value) {
	  			?>
	  			<li><a href="javascript:void(0)" tagname="<?php echo $value['Tag']['tag_name']?>" cateid="<?php echo $cat_pro['ProductCategory']['id']?>" url="<?php echo DOMAIN?>home/tag/" title=""><?php echo $value['Tag']['tag_name']?></a></li>
	  			<?php }?>
	  			

	  		</ul>
	  	</div>

    <div id="con4" class="box-product-left clearfix">


                  <?php 
          if(!empty($listProduct)){ foreach ($listProduct as $key => $row1) {

            
                ?>
                  <div class="element wow rollIn">
              
                        <div class="image"><a href=""><img height="188" src="<?php echo DOMAIN?><?php echo $row1['Product']['images']?>" alt="MODELS - CLASSIC FURNITURE 02"></a></div>
                        
            <div class="name"><a href=""><?php echo $row1['Product']['name']?></a></div>
           <div class="buttons" style="border:none">
          <a class="detail" href="http://newfuturegraphics.org/models-classic-furniture-02.html">Xem sản phẩm</a>
          <a class="contact" href="http://newfuturegraphics.org/index.php?route=information/contact">Liên hệ</a></div>
              </div>
              <?php }}?>
              <p class="continue">
            
                        <?php
             
                echo $this->Paginator->prev(' Trước ', null, null, array('class' => 'disabled','rel'=>'next/previous')); 
                echo $this->Paginator->numbers(array('separator' =>" ",'rel'=>'next/previous'));
                echo $this->Paginator->next(' Tiếp ', null, null, array('class' => 'disabled','rel'=>'next/previous')); 
               
            ?>  

                      
        </p>
       <?php echo $this->Js->writeBuffer(); ?>
    </div>
      
    <script type="text/javascript">
    $(document).ready(function(){

        $('#option4>ul>li a').click(function(){
                // alert('ádasdasd');
            var tab = $(this).attr('url');
            var cate_id = $(this).attr('cateid');
            var tag_name = $(this).attr('tagname');
            $('#con4').load(tab, {cateid:cate_id, tagname:tag_name});
            return false;
        });
    })
</script>
    