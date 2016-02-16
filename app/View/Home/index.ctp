<?php echo $this->element('left')?>
<div id="column-right">
    <?php echo $this->element('slideshow')?>
<script type="text/javascript"><!--
$(document).ready(function() {
    $('#slideshow0').nivoSlider();
});
--></script>            

<?php
  $i=0;
 foreach ($cat_product as $key => $value) {
  $i++;
?>
<script type="text/javascript">
$(document).ready(function() {

var $container = $('#con<?php echo $i?>');

  $container.isotope({
  itemSelector : '.element'
  });
  
  
  var $optionSets = $('#option<?php echo $i?> .option-set'),
    $optionLinks = $optionSets.find('a');

  $optionLinks.click(function(){
  var $this = $(this);
  // don't proceed if already selected
  if ( $this.hasClass('selected') ) {
    return false;
  }
  var $optionSet = $this.parents('.option-set');
  $optionSet.find('.selected').removeClass('selected');
  $this.addClass('selected');

  // make option object dynamically, i.e. { filter: '.my-filter-class' }
  var options = {},
    key = $optionSet.attr('data-option-key'),
    value = $this.attr('data-option-value');
  // parse 'false' as false boolean
  value = value === 'false' ? false : value;
  options[ key ] = value;
  if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
    // changes in layout modes need extra logic
    changeLayoutMode( $this, options )
  } else {
    // otherwise, apply new options
    $container.isotope( options );
  }
  
  return false;
  });
// filter items when filter link is clicked
$('#filters a').click(function(){
  var selector = $(this).attr('data-filter');
  $container.isotope({ filter: selector });
  return false; 
});


});
</script> 
   <div class="box-left">
  <div class="box-heading"><a target="_blank" href=""><?php echo $value['ProductCategory']['name']?></a></div>
  <div id="tab-<?php echo $i?>">
    <ul class="tab-1">
    <?php
      if(!empty($mang[$value['ProductCategory']['id']])){
     foreach ($mang[$value['ProductCategory']['id']] as $key => $row) {
    ?>
        <li ><a href="<?php echo DOMAIN?>home/ajax/<?php echo $row['ProductCategory']['id']?>" title=""><?php echo $row['ProductCategory']['name']?> </a></li>
        <?php }}?>
        
    </ul>
  
  <div id="tabs-<?php echo $i?>" class="box-content" style="position: relative">
     <div id="option<?php echo $i?>" class="tag clearfix">
        <ul id="filters" class="option-set clearfix" data-option-key="filter">
          <!-- <li><a href="#" title="" data-option-value="*">Tổng hợp </a></li> -->
          <?php
          if(!empty($tag1)){
           foreach ($tag1 as $key => $value1) {
          
          ?>
          <li><a href="#filter" data-option-value=".<?php echo Inflector::slug($value1['Tag']['tag_name'],"-"); ?>" title=""><?php echo $value1['Tag']['tag_name']?></a></li>
          <?php }}?>
          

        </ul>
      </div>
      
    <div id="con<?php echo $i?>" class="box-product-left clearfix">
        <?php 
          if(!empty($data)){ foreach ($data[$value['ProductCategory']['id']] as $key => $row1) {
             $tag = explode(",",$row1['Product']['tags']);
             // pr($tag);die;
        ?>
          <div class="element wow rollIn <?php foreach ($tag as $key => $tag2) { echo Inflector::slug($tag2,"-")." "; }?>">
      
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

    </div>
    
    <script type="text/javascript">
    $(document).ready(function(){

        $('#option<?php echo $i?>>ul>li a').click(function(){
                // alert('ádasdasd');
            var tab = $(this).attr('url');
           
            var cate_id = $(this).attr('cateid');
            var tag_name = $(this).attr('tagname');
            $('#con<?php echo $i?>').load(tab, {cateid:cate_id, tagname:tag_name});
            return false;
        });
    })
</script>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){

        $('#tab-<?php echo $i?>>ul>li a').click(function(){
            var tab = $(this).attr('href');
            $('#tabs-<?php echo $i?>').load(tab);
            return false;
        });
    })
</script>
    
  </div>
</div>                                   
<?php }?>


  </div>