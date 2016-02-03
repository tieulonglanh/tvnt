<div id="column-left">

	<div class="box-left">
		 <div class="box-heading">CATEGORIES</div>
      <div class="box-content" style="text-align: justify;">
        <div class="cat">
        <?php foreach ($cat_news as $key => $value) {
        	
        ?>
          <a href="<?php echo DOMAIN?>danh-muc-tin/<?php echo $value['NewsCategory']['alias']?>" title=""><?php echo $value['NewsCategory']['name']?></a><br>
          <?php }?>
          
        </div>
      </div>
	</div>
	<div class="box-left">
      <div class="box-heading">Blog-chia sẻ</div>
        <div class="box-content" style="text-align: justify;">
         <?php 
                                    $newleft=$this->requestAction('Comment/newleft'); 
                                      foreach ($newleft as $key => $value) {

                                ?>
            <div style="padding-top: 20px;">
                <a href="<?php echo DOMAIN?>chi-tiet-tin/<?php echo $value['News']['alias']?>" title="" style="    color: #464544;line-height: 20px;">
                <?php echo $value['News']['name']?>
                </a>
                <div style="    margin-top: 5px;">
                    <img src="<?php echo DOMAIN?>images/lich.png" alt="" style="    margin-bottom: -2px;">  <?php echo $value['News']['modified']?>
                </div>
            </div>
            <?php }?>

        </div>
    </div>

  </div>