  <script type="text/javascript">
// $(document).ready(function() {

// var $container = $('#con4');

//   $container.isotope({
// 	itemSelector : '.element'
//   });
  
  
//   var $optionSets = $('#option4 .option-set'),
// 	  $optionLinks = $optionSets.find('a');

//   $optionLinks.click(function(){
// 	var $this = $(this);
// 	// don't proceed if already selected
// 	if ( $this.hasClass('selected') ) {
// 	  return false;
// 	}
// 	var $optionSet = $this.parents('.option-set');
// 	$optionSet.find('.selected').removeClass('selected');
// 	$this.addClass('selected');

// 	// make option object dynamically, i.e. { filter: '.my-filter-class' }
// 	var options = {},
// 		key = $optionSet.attr('data-option-key'),
// 		value = $this.attr('data-option-value');
// 	// parse 'false' as false boolean
// 	value = value === 'false' ? false : value;
// 	options[ key ] = value;
// 	if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
// 	  // changes in layout modes need extra logic
// 	  changeLayoutMode( $this, options )
// 	} else {
// 	  // otherwise, apply new options
// 	  $container.isotope( options );
// 	}
	
// 	return false;
//   });
// // filter items when filter link is clicked
// $('#filters a').click(function(){
//   var selector = $(this).attr('data-filter');
//   $container.isotope({ filter: selector });
//   return false;	
// });


// });
// </script>
 
<div id="option4" class="tag clearfix">
	  		<ul id="filters" class="option-set clearfix" data-option-key="filter">
	  			<!-- <li><a href="#" title="" data-option-value="*">Tổng hợp </a></li> -->
	  			<?php foreach ($tag as $key => $value) {
	  			?>
	  			<li><a href="<?php echo DOMAIN?>home/tag/<?php echo $value['Tag']['id']?>" title="" data-option-value=".<?php echo $value['Tag']['tag_name']?>"><?php echo $value['Tag']['tag_name']?></a></li>
	  			<?php }?>
	  			

	  		</ul>
	  	</div>
    <div id="con4" class="box-product-left clearfix">

            
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#con4').load('content/ajax5.ctp');

        $('#option4>ul>li a').click(function(){
            var tab = $(this).attr('href');
            $('#con4').load(tab);
            return false;
        });
    })
</script>
    