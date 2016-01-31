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

  <div class="box-left">
  <div class="box-heading"><a target="_blank" href="http://newfuturegraphics.org/thu-vien-3dsmax-2015">Update thư viện mới 2015</a></div>
  <div id="tab-1">
    <ul class="tab-1">
        <li ><a href="ajax1" title="">nội thất </a></li>
        <li ><a href="ajax2" title="">ngoại thất </a></li>
    </ul>
  
  <div id="tabs-1" class="box-content">
     
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#tabs-1').load('content/ajax1.htm');

        $('#tab-1>ul>li a').click(function(){
            var tab = $(this).attr('href');
            $('#tabs-1').load('content/'+ tab +'.htm');
            return false;
        });
    })
</script>
    
  </div>

</div>                                   
       
      
            
 

   <div class="box-left">
  <div class="box-heading"><a target="_blank" href="http://newfuturegraphics.org/models-maps-hdri-materials">Models, Maps, HDRI, Materials</a></div>
  <div id="tab-2">
    <ul class="tab-1">
        <li ><a href="ajax3" title="">nội thất </a></li>
        <li ><a href="ajax4" title="">ngoại thất </a></li>
    </ul>
  
  <div id="tabs-2" class="box-content">
     
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#tabs-2').load('content/ajax3.htm');

        $('#tab-2>ul>li a').click(function(){
            var tab = $(this).attr('href');
            $('#tabs-2').load('content/'+ tab +'.htm');
            return false;
        });
    })
</script>
    
  </div>
</div>

   <div class="box-left">
  <div class="box-heading"><a target="_blank" href="http://newfuturegraphics.org/thu-vien-sketchup-ngoai-that">Thư viện SKETCHUP ngoại thất</a></div>
  <div id="tab-3">
    <ul class="tab-1">
        <li ><a href="ajax5" title="">nội thất </a></li>
        <li ><a href="ajax6" title="">ngoại thất </a></li>
    </ul>
  
  <div id="tabs-3" class="box-content">
     
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#tabs-3').load('content/ajax5.htm');

        $('#tab-3>ul>li a').click(function(){
            var tab = $(this).attr('href');
            $('#tabs-3').load('content/'+ tab +'.htm');
            return false;
        });
    })
</script>
    
  </div>
</div>                                   
       
      
            

   <div class="box-left">
  <div class="box-heading"><a target="_blank" href="http://newfuturegraphics.org/thu-vien-3ds-max">Thư viện nội thất</a></div>
  <div id="tab-4">
    <ul class="tab-1">
        <li ><a href="ajax7" title="">nội thất </a></li>
        <li ><a href="ajax8" title="">ngoại thất </a></li>
    </ul>
  
  <div id="tabs-4" class="box-content">
     
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#tabs-4').load('content/ajax7.htm');

        $('#tab-4>ul>li a').click(function(){
            var tab = $(this).attr('href');
            $('#tabs-4').load('content/'+ tab +'.htm');
            return false;
        });
    })
</script>
    
  </div>
</div>                                   
                                 

                                     
       
      
  </div>