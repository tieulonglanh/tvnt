<div id="header">
 
  <img src="<?php echo DOMAIN?>images/banner.gif" width="1145" height="115">
  
 
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
    <ul class="social_icons">
             <li><a onclick="window.open(&#39;http://twitter.com/home?status &#39;+encodeURIComponent(&#39;http://newfuturegraphics.org/&#39;), &#39;twitter-share-dialog&#39;, &#39;width=626,height=436&#39;); return false;" href="http://newfuturegraphics.org/#"><img title="facebook" alt="" src="<?php echo DOMAIN?>images/icon/follow_icon1.png"></a></li>
             <li><a onclick="window.open(&#39;https://plus.google.com/share?url=&#39;+encodeURIComponent(&#39;http://newfuturegraphics.org/&#39;), &#39;google-share-dialog&#39;, &#39;width=626,height=436&#39;); return false;" href="http://newfuturegraphics.org/#"><img alt="" src="<?php echo DOMAIN?>images/icon/follow_icon2.png"></a></li>
             <li><a onclick="window.open(&#39;https://www.facebook.com/sharer/sharer.php?u=&#39;+encodeURIComponent(&#39;http://newfuturegraphics.org/&#39;), &#39;facebook-share-dialog&#39;, &#39;width=626,height=436&#39;); return false;" href="http://newfuturegraphics.org/#"><img alt="" src="<?php echo DOMAIN?>images/icon/follow_icon3.png"></a></li>
        </ul>
    
    </div>
    <div id="search">
    <div class="button-search"></div>
        <input style="padding:5px 3px;" size="40" type="text" onkeydown="this.style.color = &#39;#000000&#39;;" onclick="this.value = &#39;&#39;;" value="Search" name="filter_name">
      </div>
    
    
</div>