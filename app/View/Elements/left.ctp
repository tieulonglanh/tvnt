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
        <img src="<?php echo DOMAIN?>images/face.png" alt="">
    </div>
    <div class="box-left">
      <div class="box-heading">Blog-chia sẻ</div>
        <div class="box-content" style="text-align: justify;">
         <?php 
                                    $newleft=$this->requestAction('Comment/newleft'); 
                                      foreach ($newleft as $key => $value) {

                                ?>
            <div style="padding-top: 20px;">
                <a href="" title="" style="    color: #464544;line-height: 20px;">
                <?php echo $value['New']['name']?>
                </a>
                <div style="    margin-top: 5px;">
                    <img src="<?php echo DOMAIN?>images/lich.png" alt="" style="    margin-bottom: -2px;">  <?php echo $value['New']['modified']?>
                </div>
            </div>
            <?php }?>

        </div>
    </div>
    <?php 
                $ads=$this->requestAction('Comment/ads'); 
                  foreach ($ads as $key => $row) {

                                ?>
    <div style="margin-bottom: 15px;">
        <a href="<?php echo $row['Advertisement']['link']?>" title=""><img width="245" height="245" src="<?php echo DOMAIN?><?php echo $row['Advertisement']['images']?>" alt=""></a>
    </div>
    <?php }?>

   <div class="box-left">
  <div class="box-heading">Sản phẩm bán chạy</div>
  <div class="box-content spchay">
    <div class="box-product-left">
            <div>
                <div class="image" style="float:left"><a href=""><img src="<?php echo DOMAIN?>images/1000DESIGNCONECTED-130x117.jpg" alt="1000 MODELS "></a></div>
                 <div style="float:left;width:212px;">
        <div class="name"><a href="">1000 MODELS </a></div>
        
        </div>
      </div>
            <div>
                <div class="image" style="float:left"><a href=""><img src="<?php echo DOMAIN?>images/E9-130x117.jpg" alt="E9 - THƯ VIỆN AUTOCAD TỔNG HỢP 2014"></a></div>
                 <div style="float:left;width:212px;">
        <div class="name"><a href="">E9 - THƯ VIỆN AUTOCAD TỔNG HỢP 2014</a></div>
        
        </div>
      </div>
            <div>
                <div class="image" style="float:left"><a href=""><img src="<?php echo DOMAIN?>images/D26CRYSTALCGVOL231-130x117.png" alt="D26 - CRYSTAL CG VOL-23 (2013)"></a></div>
                 <div style="float:left;width:212px;">
        <div class="name"><a href="">D26 - CRYSTAL CG VOL-23 (2013)</a></div>
        
        </div>
      </div>
            <div>
                <div class="image" style="float:left"><a href=""><img src="<?php echo DOMAIN?>images/A29-130x117.jpg" alt="A29 - OUMOO 2014"></a></div>
                 <div style="float:left;width:212px;">
        <div class="name"><a href="">A29 - OUMOO 2014</a></div>
        
        </div>
      </div>
            <div>
                <div class="image" style="float:left"><a href="http://newfuturegraphics.org/a28-1000-extension-models-2014.html"><img src="<?php echo DOMAIN?>images/A28-130x117.jpg" alt="A28 - 1000 EXTENSION MODELS 2014"></a></div>
                 <div style="float:left;width:212px;">
        <div class="name"><a href="http://newfuturegraphics.org/a28-1000-extension-models-2014.html">A28 - 1000 EXTENSION MODELS 2014</a></div>
        
        </div>
      </div>
            <div>
                <div class="image" style="float:left"><a href="http://newfuturegraphics.org/a27-3d66-interior-2014.html"><img src="<?php echo DOMAIN?>images/A27-130x117.jpg" alt="A27 - 3D66 INTERIOR 2014"></a></div>
                 <div style="float:left;width:212px;">
        <div class="name"><a href="http://newfuturegraphics.org/a27-3d66-interior-2014.html">A27 - 3D66 INTERIOR 2014</a></div>
        
        </div>
      </div>
          </div>
  </div>
</div>                                   
      
                                   
 
  </div>
 