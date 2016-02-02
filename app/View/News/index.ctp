<?php echo $this->element('left-blog')?>
<div id="column-right">

   <div class="box-left">
  <div class="box-heading"><a target="_blank" href=""><?php echo $cateNew['NewsCategory']['name']?></a></div>
  <div class="box-content">
    <div class="blog">
      <?php foreach ($listNews as $key => $value) {
      ?>
      <div>
        <p style="color:#d78627;font-size: 16px;font-weight: bold"><?php echo $value['News']['name']?></p>
        <img src="<?php echo DOMAIN?>images/blog.png" alt="" style="margin-bottom: 15px;">
        <p style="color:#6d6d6d;font-size: 14px;"><?php echo $value['News']['description']?></p>
          <div class="more">
             <a href="<?php echo DOMAIN?>chi-tiet-tin/<?php echo $value['News']['id']?>/<?php echo $value['News']['alias']?>.html" title=""><button type="button">read more</button></a><br>
             <span><?php echo $value['News']['modified']?></span>
          </div>
      </div>
      <?php }?>
          <div class="continue">
    
                <?php
        echo $this->Paginator->first(' Đầu ', null, null, array('class' => 'disabled'));     
        echo $this->Paginator->prev(' Trước ', null, null, array('class' => 'disabled')); 
        echo $this->Paginator->numbers(array('separator' =>" "));
        echo $this->Paginator->next(' Tiếp ', null, null, array('class' => 'disabled')); 
        echo $this->Paginator->last(' Cuối ', null, null, array('class' => 'disabled')); 
    ?>  

              
</div>
       <!-- <p class="continue"><span>Prev</span><span class="current">1</span><span>2</span><span>Next</span></p> -->
    </div>
      
  </div>
</div>
  </div>