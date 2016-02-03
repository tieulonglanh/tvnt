<?php echo $this->element('left-blog')?>
<div id="column-right">

   <div class="box-left">
  <div class="box-heading"><a target="_blank" href="">BLOG - CHIA SẺ</a></div>
  <div class="box-content">
    <div class="blog">
      <div>
        <p style="color:#d78627;font-size: 16px;font-weight: bold"><?php echo $post['Post']['name']?></p>
        <img src="<?php echo DOMAIN?><?php echo $post['Post']['images'] ?>" alt="" style="margin-bottom: 15px;">
        <p style="color:#6d6d6d;font-size: 14px;font-weight: bold;"><?php echo $post['Post']['description']?></p>
         <p style="color:#6d6d6d;font-size: 13px;"><?php echo $post['Post']['detail']?></p>
      </div>
        
    </div>
      
  </div>
</div>
  </div>