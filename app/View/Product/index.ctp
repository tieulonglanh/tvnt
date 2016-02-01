<?php echo $this->element('left-product')?>
<div id="column-right">
    
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
  </div>