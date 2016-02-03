<?php echo $this->element('left-product')?>
<div id="column-right">
    
   <div class="box-left">
  <div class="box-heading"><a target="_blank" href="http://newfuturegraphics.org/thu-vien-3dsmax-2015"><?php echo $detailProduct['ProductCategory']['name']?></a></div>
  <div id="tab-1">
  	<ul class="tab-1">
    <?php foreach ($cat_product as $key => $value) {
      ?>
  		 <li ><a href="<?php echo DOMAIN?>home/ajax/<?php echo $value['ProductCategory']['id']?>" title=""><?php echo $value['ProductCategory']['name']?> </a></li>
  		<?php }?>
  	</ul>
  
  <div id="tabs-1" class="box-content">
  	 
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

  </div>