<div id="header">

<?php echo $banner['Bloghtml']['html']; ?>

</div>

<script>
$(function(){
    // this will get the full URL at the address bar
    var url = window.location.href; 

    // passes on every "a" tag 
    $("#menu>ul>li a").each(function() {
            // checks if its the same on the address bar
        if(url == (this.href)) { 
            $(this).closest("li").addClass("active");
        }
    });
});
</script>
<div id="wapper">
<div id="menu">
  <ul>
                 <?php 
                 $menu=$this->requestAction('Comment/menungang'); 
                 foreach ($menu as $key => $value) {
                                ?>
     <li><a href="<?php echo $value['Menu']['link']?>"><?php echo $value['Menu']['name']?></a></li>
     <?php }?>
    
  </ul>
  

  
</div>

<div id="notification"></div>
<div id="util">
    <div class="share">
    <?php echo $icontop['Bloghtml']['html']; ?>
    
    </div>
    <div id="search">
    <div class="button-search"></div>
        <input style="padding:5px 3px;" size="40" type="text" onkeydown="this.style.color = &#39;#000000&#39;;" onclick="this.value = &#39;&#39;;" value="Search" name="filter_name">
      </div>
    
    
</div>