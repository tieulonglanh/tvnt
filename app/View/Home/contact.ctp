<?php echo $this->element('left-contact-sitemap')?>
<div id="column-right">
   

   <div class="box-left">
    <div class="box-heading"><a target="_blank" href="">Contact</a></div>
       <div class="box-content">
    <h2>Địa chỉ của chúng tôi</h2>
    <div class="contact-info">
      <div class="content"><div class="left"><b>Địa chỉ:</b><br>
        EMAIL : newfuturegraphics@gmail.com<br>
        .<br>
ADD1 : 59 Huỳnh Thúc Kháng, Đống Đa, Hà Nội<br>
.<br>
ADD2 : 198/1A Hồ Văn Huê, TP HCM ( Vui lòng liên hệ trước khi qua )<br>
.<br>
Khách hàng ở Hà Nội, TP HCM , Bình Dương, Đồng Nai, chúng tôi có thể giao hàng tận nơi</div>
      <div class="right">
                <b>Điện thoại:</b><br>
        0975 855 312<br>
        <br>
                      </div>
    </div>
    </div>   
  </div>
    </div>                                   

   <div class="box-left">
  <div class="box-heading"><a href="" title="">WRITE TO US</a></div>
    <div class="box-content" style="position: relative">
       <?php echo $this->Form->create(null, array('type' => 'post', 'name' => 'contact_form','class'=>'frm-contact')); ?>
        <div style="border: 1px #eeeeee solid;padding: 10px 10px;margin-right: 5px;    margin-bottom: 52px;">
            First Name:<br>
            <?php echo $this->Form->input('Contact.name', array('label' => '', 'class' => 'contact_input', 'size' => 40)); ?>
            E-Mail Address:<br>
            <?php echo $this->Form->input('Contact.email', array('label' => '', 'class' => 'contact_input', 'size' => 40)); ?>
            Enquiry:<br>
            <?php echo $this->Form->input('Contact.content', array('type' => 'textarea', 'cols' => '40', 'rows' => '8', 'label' => '', 'class' => 'contact_input input_content','style' => 'width: 99%')); ?>
            Enter the code in the box below:<br>
            <input type="text" name="captcha" value="" class="contact_input" size="40">
            <br>
            <span class="error"><?php echo $error;?></span>
           <?php echo $this->Html->image('/home/captcha/', array('alt' => '', 'style' => 'margin-top: 5px')); ?>
        </div>
      
        <button type="submit">SEND</button>
      
  	  </form>
  	</div>
  
</div>


  </div>