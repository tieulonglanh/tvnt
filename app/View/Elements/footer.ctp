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
        <div class="footer1">
            <div style="padding-left: 15px; border-right: 1px #4d5559 solid; padding-top: 19px;">
                <img src="<?php echo DOMAIN?>images/logo.png" alt="">
                <div style="padding: 35px 0px 20px 60px;position: relative;    font-size: 13px;color: #acb1b3;">
                    ADD1 : 59 Huỳnh Thúc Kháng - Hà Nội<br>
                    </br>
                    ADD2 : 198/1A Hồ Văn Huê - TP HCM 
                    
                    <img src="<?php echo DOMAIN?>images/diachi.png" alt="" style="    position: absolute;left: 0;top: 34px;">
                </div>
            </div>

            </div>
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
            <div class="footer3">
                <div style=" padding-left: 30px;">
                    <div style="margin-bottom: 25px;">
                    <span style="font-weight: bold;font-size: 14px;color:#fff;">FOLLOW US</span></br><br>
                    <a href="" title=""><img src="<?php echo DOMAIN?>images/icon/face.png" alt=""></a>
                    <a href="" title=""><img src="<?php echo DOMAIN?>images/icon/tw.png" alt=""></a>
                    <a href="" title=""><img src="<?php echo DOMAIN?>images/icon/q.png" alt=""></a>
                    <a href="" title=""><img src="<?php echo DOMAIN?>images/icon/w.png" alt=""></a>
                    <a href="" title=""><img src="<?php echo DOMAIN?>images/icon/google.png" alt=""></a>
                    <a href="" title=""><img src="<?php echo DOMAIN?>images/icon/youtube.png" alt=""></a>
                </div>
                <div>
                    <span style="font-weight: bold;font-size: 14px;color:#fff;">WE ACCEPT</span></br><br>
                    <a href="" title=""><img src="<?php echo DOMAIN?>images/icon/paypal.png" alt=""></a>
                    <a href="" title=""><img src="<?php echo DOMAIN?>images/icon/visa.png" alt=""></a>
                    <a href="" title=""><img src="<?php echo DOMAIN?>images/icon/a.png" alt=""></a>
                    <a href="" title=""><img src="<?php echo DOMAIN?>images/icon/mastercard.png" alt=""></a>
                    
                </div>
                </div>
                
            </div>
    </div>

    <div style="border-top: 1px #4c5458 solid;width: 100%;line-height: 52px;">
        <div style="padding-left: 40px;color:#fff;">
            © 2016 New Future Graphics & <a href="http://baobinh.net/" style="color:#fff">design by baobinh.net</a>
        </div>
        
    </div>


 </div>