<div id="column-left">

    <div class="box1">
        <!-- <div class="box-heading">
            <div class="box-marker">Danh mục sản phẩm</div>
        </div> -->
        <div class="box-content">
            <div class="box-category dropdown-content" id="myDropdown">
                <ul>
                <?php foreach ($menuleft as $key => $value) {
                    # code...
                ?>
                    <li class='has-sub'>
                        <p>
                            <a href="#"><img width="45" height="45" src="<?php echo DOMAIN?><?php echo $value['Menu']['icon']?>" alt=""><?php echo $value['Menu']['name']?><span style="    position: absolute;color: #9b9a9a;right: 0;">(10)</span></a>
                        </p>
                        <ul>
                            <?php foreach ($mag1[$value['Menu']['id']] as $key => $row) {
                               
                            ?>
                            <li>
                                <p>
                                    <a href=""><img width="35" height="35" src="<?php echo DOMAIN?><?php echo $row['Menu']['icon']?>" alt=""><?php echo $row['Menu']['name']?></a>
                                </p>
                            </li>
                            <?php }?>
                        </ul>
                    </li>
                    <?php }?>
                     
                   
                </ul>
            </div>
        </div>
    </div>
 
	<div class="box-left">
		 <?php echo $facebook['Setting']['content']; ?>
	</div>
	
   <div class="box-left">
  <div class="box-heading">Sản phẩm bán chạy</div>
  <div class="box-content spchay">
    <div class="box-product-left">
             <?php 
                $spchay=$this->requestAction('Comment/spchay'); 
                  foreach ($spchay as $key => $row1) {

                                ?>
            <div>
                <div class="image" style="float:left"><a href="<?php echo DOMAIN?>san-pham/<?php echo $row1['Product']['alias']?>"><img height="118" src="<?php echo DOMAIN?><?php echo $row1['Product']['images']?>" alt="<?php echo $row1['Product']['name']?>"></a></div>
                 <div style="float:left;width:212px;">
        <div class="name"><a href=""><?php echo $row1['Product']['name']?></a></div>
        
        </div>
      </div>
      <?php }?>
          </div>
  </div>
</div>                                   
      
                                   
 
  </div>