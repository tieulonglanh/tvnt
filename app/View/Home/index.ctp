<?php echo $this->element('left')?>
<div id="column-right">
    <div class="slideshow">
  <div id="slideshow0" class="nivoSlider" style="">
                <img  src="<?php echo DOMAIN?>images/slide.png" alt="5000" style="display: none;">
                <img  src="<?php echo DOMAIN?>images/slide.png" alt="3000" style="display: none;">
                <img  src="<?php echo DOMAIN?>images/slide.png" alt="4000" style="display: none;">
                <img  src="<?php echo DOMAIN?>images/slide.png" alt="2000" style="display: none;">
                <img  src="<?php echo DOMAIN?>images/slide.png" alt="1000" style="display: none;">
          <div class="nivo-caption" style="opacity: 0;"><p></p></div>
          <div class="nivo-directionNav" style="display: none;"><a class="nivo-prevNav">Prev</a><a class="nivo-nextNav">Next</a></div>
          <div class="nivo-controlNav"><a class="nivo-control" rel="0">1</a><a class="nivo-control" rel="1">2</a><a class="nivo-control" rel="2">3</a><a class="nivo-control" rel="3">4</a><a class="nivo-control active" rel="4">5</a></div>

          </div>
</div>
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
   <div class="box-left">
  <div class="box-heading"><a target="_blank" href=""><?php echo $value['ProductCategory']['name']?></a></div>
  <div id="tab-<?php echo $i?>">
    <ul class="tab-1">
    <?php foreach ($mang[$value['ProductCategory']['id']] as $key => $row) {
    ?>
        <li ><a href="<?php echo DOMAIN?>home/ajax/<?php echo $row['ProductCategory']['id']?>" title=""><?php echo $row['ProductCategory']['name']?> </a></li>
        <?php }?>
        
    </ul>
  
  <div id="tabs-<?php echo $i?>" class="box-content">
     
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#tabs-3').load('content/ajax5.ctp');

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