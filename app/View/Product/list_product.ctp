<?php echo $this->element('left-product')?>
<div id="column-right">
<?php
    if($detailProduct['ProductCategory']['parent_id']==0){
      ?>
    
   <div class="box-left">
  <div class="box-heading"><a target="_blank" href="http://newfuturegraphics.org/thu-vien-3dsmax-2015"><?php echo $detailProduct['ProductCategory']['name']?></a></div>
  <div id="tab-1">
  	<ul class="tab-1">
    <?php foreach ($cat_product as $key => $value) {
      ?>
  		 <li ><a href="<?php echo DOMAIN?>home/ajax/<?php echo $value['ProductCategory']['id']?>" title=""><?php echo $value['ProductCategory']['name']?> </a></li>
  		<?php }?>
  	</ul>
  
  <div id="tabs-1" class="box-content" style="position: relative;">
  	  <div id="option" class="tag clearfix">
        <ul id="filters" class="option-set clearfix" data-option-key="filter">
          <!-- <li><a href="#" title="" data-option-value="*">Tổng hợp </a></li> -->
          <?php
          if(!empty($tag1)){
           foreach ($tag1 as $key => $value1) {
          
          ?>
          <li><a href="javascript:void(0)" tagname="<?php echo $value1['Tag']['tag_name']?>" cateid="<?php echo $detailProduct['ProductCategory']['id']?>" url="<?php echo DOMAIN?>home/tag/" title=""><?php echo $value1['Tag']['tag_name']?></a></li>
          <?php }}?>
          

        </ul>
      </div>
      <div id="con1" class="box-product-left clearfix">
          <?php 
            if(!empty($data)){ foreach ($data as $key => $row1) {
          ?>
            <div class="element">
        
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
    <script type="text/javascript">
    $(document).ready(function(){

        $('#option>ul>li a').click(function(){
                // alert('ádasdasd');
            var tab = $(this).attr('url');
           
            var cate_id = $(this).attr('cateid');
            var tag_name = $(this).attr('tagname');
            $('#con1').load(tab, {cateid:cate_id, tagname:tag_name});
            return false;
        });
    })
</script>
  	</div>
     <script type="text/javascript">
    $(document).ready(function(){
        // $('#tabs-3').load('content/ajax5.ctp');

        $('#tab-1>ul>li a').click(function(){
        var tab = $(this).attr('href');
        $('#tabs-1').load(tab);
        return false;
        });
    })
</script>
  	
  </div>

</div>
<?php }
      else{
?>
      <div class="box-left">
  <div class="box-heading"><a target="_blank" href="http://newfuturegraphics.org/thu-vien-3dsmax-2015"><?php echo $cat_product1['ProductCategory']['name']?></a></div>
  <div id="tab-1">
    <ul class="tab-1">
       <li ><a href="<?php echo DOMAIN?>home/ajax/<?php echo $detailProduct['ProductCategory']['id']?>" title=""><?php echo $detailProduct['ProductCategory']['name']?> </a></li>
    </ul>
  
  <div id="tabs-1" class="box-content" style="position: relative;">
      <div id="option" class="tag clearfix">
        <ul id="filters" class="option-set clearfix" data-option-key="filter">
          <!-- <li><a href="#" title="" data-option-value="*">Tổng hợp </a></li> -->
          <?php
          if(!empty($tag1)){
           foreach ($tag1 as $key => $value1) {
          
          ?>
          <li><a href="javascript:void(0)" tagname="<?php echo $value1['Tag']['tag_name']?>" cateid="<?php echo $detailProduct['ProductCategory']['id']?>" url="<?php echo DOMAIN?>home/tag/" title=""><?php echo $value1['Tag']['tag_name']?></a></li>
          <?php }}?>
          

        </ul>
      </div>
      <div id="con1" class="box-product-left clearfix">
          <?php 
            if(!empty($data)){ foreach ($data as $key => $row1) {
          ?>
            <div class="element">
        
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
    <script type="text/javascript">
    $(document).ready(function(){

        $('#option>ul>li a').click(function(){
                // alert('ádasdasd');
            var tab = $(this).attr('url');
           
            var cate_id = $(this).attr('cateid');
            var tag_name = $(this).attr('tagname');
            $('#con1').load(tab, {cateid:cate_id, tagname:tag_name});
            return false;
        });
    })
</script>
    </div>
     <script type="text/javascript">
    $(document).ready(function(){
        // $('#tabs-3').load('content/ajax5.ctp');

        $('#tab-1>ul>li a').click(function(){
        var tab = $(this).attr('href');
        $('#tabs-1').load(tab);
        return false;
        });
    })
</script>
    
  </div>

</div>



<?php }?>
  </div>