<?php echo $this->element('left-contact-sitemap')?>
<div id="column-right">
   
  <div class="box-left">
  <div class="box-heading"><a target="_blank" href="http://newfuturegraphics.org/thu-vien-3dsmax-2015">Sitemap</a></div>
 	
  <div class="box-content" style="padding-bottom:35px;">
  	<div class="map">
  		<ul class="map2">
  		<?php
  			$i=0;
  		 foreach ($sitemap_cat as $key => $value) {
  			$i++;
  		?>
  			<li class="map1">
			<p><?php echo $value['Sitemap']['name']?></p>
				<?php foreach ($mang[$value['Sitemap']['id']] as $key => $row) {
					
				?>
				<div>
					<span><a href="<?php echo $row['Sitemap']['link']?>" title=""><?php echo $row['Sitemap']['name']?></a></span><br>
						<?php foreach ($mang1[$row['Sitemap']['id']] as $key => $row1) {
							
						?>
						<a href="<?php echo $row1['Sitemap']['link']?>" title=""><?php echo $row1['Sitemap']['name']?></a><br>
						<?php }?>
						
				</div>
				<?php }?>
				


      		</li>
      		<?php }?>
      
  		</ul>
  	 	<!-- <div class="map2">
  	 		
  	 	</div>
        	 	 -->
  	</div>
  	</div>
</div>


  </div>