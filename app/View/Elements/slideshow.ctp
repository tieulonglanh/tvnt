
                       <div class="slideshow">
  <div id="slideshow0" class="nivoSlider" style="">
   <?php 
                                    $slideshow=$this->requestAction('Comment/slideshow'); 
                                      foreach ($slideshow as $key => $value) {
                                         
                                      
                                ?>
                <img src="<?php echo DOMAINAD?>/timthumb.php?src=<?php echo $value['Slideshow']['images'];?>&amp;h=435&amp;w=878&amp;zc=1" />
                <?php }?>
               
          <div class="nivo-caption" style="opacity: 0;"><p></p></div>
          <div class="nivo-directionNav" style="display: none;"><a class="nivo-prevNav">Prev</a><a class="nivo-nextNav">Next</a></div>
         <!--  <div class="nivo-controlNav"><a class="nivo-control" rel="0">1</a><a class="nivo-control" rel="1">2</a><a class="nivo-control" rel="2">3</a><a class="nivo-control" rel="3">4</a><a class="nivo-control active" rel="4">5</a></div> -->

          </div>
</div>