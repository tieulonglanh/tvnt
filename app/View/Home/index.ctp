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