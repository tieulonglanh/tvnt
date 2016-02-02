<div style="background: #232a2e;padding-left: 25px;height: 102px;text-align: center;    margin-top: -20px">
        <span style="line-height: 102px;">
            <span style="color:#fff;font-weight: bold;">THUVIENKIENTRUC.COM.VN</span>
            <form action="" method="post" accept-charset="utf-8">
            <input style=" margin-left: 25px;margin-right: 10px;   width: 418px;height: 28px;font-weight: bold;" type="text" name="email" value="" placeholder="Enter your email address">
            <button  type="submit" class="subscribe">SUBSCRIBE</button>
        </form>
        </span>
        
    </div>
<div id="footer">
    <div style="display: inline-block;width:100%;">
        <?php echo $footerleft['Bloghtml']['html']; ?>
            <div class="footer2">
                <?php
           
            
            foreach ($menufooter as $value) {

                ?>
                    <div style="width:50%;float:left;">
                    <div style="padding-left: 50px;line-height: 30px;">
                        <div style="font-weight: bold;font-size: 14px;color:#fff;"><?php echo $value['Menu']['name']?></div>
                    <ul>
                        <?php
                        foreach ($mag[$value['Menu']['id']] as $key => $row) {
                        ?>
                        <li><a href="" title="">> <?php echo $row['Menu']['name']?></a></li>
                        <?php }?>
                    </ul>
                    </div>
                        
                    </div>
                    <?php }?>

            </div>
             <?php echo $footericon['Bloghtml']['html']; ?>
          
    </div>

    <div style="border-top: 1px #4c5458 solid;width: 100%;line-height: 52px;">
        <div style="padding-left: 40px;color:#fff;">
            © 2016 New Future Graphics & <a href="http://baobinh.net/" style="color:#fff">design by baobinh.net</a>
        </div>
        
    </div>


 </div>