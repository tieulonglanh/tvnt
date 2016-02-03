  <script type="text/javascript">
// $(document).ready(function() {

// var $container = $('#con4');

//   $container.isotope({
// 	itemSelector : '.element'
//   });
  
  
//   var $optionSets = $('#option4 .option-set'),
// 	  $optionLinks = $optionSets.find('a');

//   $optionLinks.click(function(){
// 	var $this = $(this);
// 	// don't proceed if already selected
// 	if ( $this.hasClass('selected') ) {
// 	  return false;
// 	}
// 	var $optionSet = $this.parents('.option-set');
// 	$optionSet.find('.selected').removeClass('selected');
// 	$this.addClass('selected');

// 	// make option object dynamically, i.e. { filter: '.my-filter-class' }
// 	var options = {},
// 		key = $optionSet.attr('data-option-key'),
// 		value = $this.attr('data-option-value');
// 	// parse 'false' as false boolean
// 	value = value === 'false' ? false : value;
// 	options[ key ] = value;
// 	if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
// 	  // changes in layout modes need extra logic
// 	  changeLayoutMode( $this, options )
// 	} else {
// 	  // otherwise, apply new options
// 	  $container.isotope( options );
// 	}
	
// 	return false;
//   });
// // filter items when filter link is clicked
// $('#filters a').click(function(){
//   var selector = $(this).attr('data-filter');
//   $container.isotope({ filter: selector });
//   return false;	
// });


// });
// </script>
 
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
    