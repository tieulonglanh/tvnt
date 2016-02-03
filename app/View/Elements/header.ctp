<div id="header">

<?php echo $banner['Setting']['content']; ?>

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
    <?php echo $icontop['Setting']['content']; ?>
    
    </div>
    <div id="search">
    <div class="button-search"></div>
        <form name="f1" id="f1" action="<?php echo DOMAIN; ?>tim-kiem.html" method="get" onsubmit="return checkForm(this);">
        <input style="padding:5px 3px;" size="40" type="text" onkeydown="this.style.color = &#39;#000000&#39;;" onclick="this.value = &#39;&#39;;" value="Search" name="searchProduct">
        <input type="submit" name="" value="" style="background: none;border: none;">
        </form>
      </div>
    
    
</div>