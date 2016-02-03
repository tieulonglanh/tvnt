<?php echo $this->element('left-blog')?>
<div id="column-right">

   <div class="box-left">
  <div class="box-heading"><a target="_blank" href=""><?php echo $typeName['NewsCategory']['name']?></a></div>
  <div class="box-content">
    <div class="blog">
      <div>
        <p style="color:#d78627;font-size: 16px;font-weight: bold"><?php echo $detailNews['News']['name']?></p>
        <img src="<?php echo DOMAIN?><?php echo $detailNews['News']['images']?>" alt="" style="margin-bottom: 15px;">
        <p style="color:#6d6d6d;font-size: 14px;font-weight: bold;"><?php echo $detailNews['News']['description']?></p>
         <p style="color:#6d6d6d;font-size: 13px;"><?php echo $detailNews['News']['detail']?></p>
      </div>
        
    </div>
      
  </div>
</div>
  </div>