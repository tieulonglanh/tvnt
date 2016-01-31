<?php
echo $this->Html->script('ckeditor/ckeditor');
?>
<section class="content-header">
    <h1>
        Danh sách sản phẩm
        <small>Thêm mới</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo DOMAINAD ?>" ><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="<?php echo DOMAINAD ?>product" > Danh sách sản phẩm</a></li>
        <li class="active"> Thêm mới</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">


    <div class="row">
        <div class="col-xs-12">

                <div class="box-header">
                    <div class="box-tools">

                        <div class="input-group">

                            <div class="input-group-btn">

                                <a href="<?php echo DOMAINAD; ?>product_category/add" class="btn btn-sm btn-success" ><i class="fa fa-fw fa-plus-square"></i> Thêm mới </a>
                                <a href="#messages" rel="modal" class="btn btn-sm btn-warning" > Trợ giúp </a>
                                <a href="<?php echo DOMAINAD; ?>home" class="btn btn-sm btn-danger" > Đóng </a>
                            </div>
                        </div>

                    </div>
                </div><!-- /.box-header -->

            <div class="box">


                <!-- form start -->
                <?php echo $this->Form->create(null, array('url' => DOMAINAD . 'product/add', 'type' => 'post', 'enctype' => 'multipart/form-data', 'name' => 'image')); ?>


                <?php
                $my_error1 = $this->Session->flash();
                ?>
                <?php if($my_error1 !='<div id="flashMessage" class="message"></div>'){ ?>
                    <div class="alert alert-warning alert-dismissable">
                        <i class="fa fa-warning"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $my_error1; ?>
                    </div>
                <?php } ?>


                <div class="box-body">
                    <div class="form-group">
                        <label for="idtitle">Tên sản phẩm</label>
                        <?php echo $this->Form->input('Product.name', array('label' => '', 'class' => 'form-control', 'onchange' => 'get_alias()', 'id' => 'idtitle')); ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="idalias">Đường dẫn</label>

                        <?php echo $this->Form->input('Product.alias', array('label' => '', 'class' => 'form-control', 'id' => 'idalias')); ?>
                    </div>

                    
                    <div class="form-group">
                        <label for="name_en">SEO Title</label>
                        <?php echo $this->Form->input('Product.name_en', array('label' => '', 'class' => 'form-control', 'id' => 'name_en')); ?>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label>Mã sản phẩm</label>
                            <?php echo $this->Form->input('Product.code', array('label' => '', 'class' => 'form-control')); ?>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                            <label>Số lượng</label>
                            <?php echo $this->Form->input('Product.sl', array('label' => '', 'class' => 'form-control')); ?>
                    </div>


                    
                    <div class="form-group">
                        <label>Meta description</label>
                        <?php echo $this->Form->input('Product.meta_description', array('type' => 'textarea', 'label' => '', 'class' => 'form-control', 'style' => 'resize: none;')); ?>
                    </div>

                    <div class="form-group">
                        <label>Meta keyword</label>
                        <?php echo $this->Form->input('Product.meta_keyword', array('label' => '', 'class' => 'form-control')); ?>
                    </div>

                    <div class="form-group">
                        <label>Danh muc cha</label>
                        <?php echo $this->Form->input('Product.product_category_id',array('type'=>'select','options'=>$list_cat,'empty'=>'Chọn danh mục','class'=>'btn btn-sm btn-default','label'=>''));?>

                    </div>

                    <div class="form-group">
                        <label>Sắp xếp</label>
                        <?php echo $this->Form->input('Product.sort_order', array('label' => '', 'class' => 'btn btn-sm btn-default')); ?>
                    </div>

                    <div class="form-group">
                        <label>Giá sản phẩm</label>
                        <?php echo $this->Form->input('Product.price', array('label' => '', 'class' => 'form-control')); ?>
                    </div>

                    <div class="form-group">
                        <label>Hình đại diện</label>
                        <div id="images_chose">
                            <?php if(!empty($this->data['Product']['images'])){?>
                                <img src="/admin/timthumb.php?src=<?php echo $this->data['Product']['images'];?>&amp;h=100&amp;w=100&amp;zc=1" />
                            <?php } ?>
                        </div><!--end #images_chose-->
                        <?php echo $this->Form->input('Product.images',array('label'=>false, 'class'=>'form-control','id' => 'xFilePath','maxlength'=>'255'));?>
                        <input type="button" value="Chọn ảnh" onclick="BrowseServer();" class="btn btn-sm btn-default"/>
                    </div>
                    
                     <div class="form-group">
                        <label>Hình đầu tiên</label>
                        <div id="images_chose_ff">
                            <?php if(!empty($this->data['Product']['first_image'])){?>
                                <img src="/admin/timthumb.php?src=<?php echo $this->data['Product']['first_image'];?>&amp;h=100&amp;w=100&amp;zc=1" />
                            <?php } ?>
                        </div><!--end #images_chose-->
                        <?php echo $this->Form->input('Product.first_image',array('label'=>false, 'class'=>'form-control','id' => 'xFileFirstImage','maxlength'=>'255'));?>
                        <input type="button" value="Chọn ảnh" onclick="BrowseServerFF();" class="btn btn-sm btn-default"/>
                    </div>

                    <div class="form-group">
                        <label>Danh sách ảnh html</label>
                        <?php echo $this->Form->input('Product.multi_images', array('type' => 'textarea', 'rows' => 20, 'label' => '', 'class' => 'form-control', 'style' => 'resize: none;')); ?>
                    </div>

                    <div class="form-group">
                        <label>Trạng thái&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                        <?php
                        echo $this->Form->radio(
                            'Product.status',
                            array(0=>'&nbspNgừng hoạt động&nbsp&nbsp&nbsp&nbsp&nbsp', 1=>'&nbspHoạt động'),
                            array('legend'=>false, 'value'=>1)
                        );
                        ?>
                    </div>
                        
                    <div class="form-group">
                        <label>Sản phẩm bán chạy&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                        <?php
                        echo $this->Form->radio(
                            'Product.hot_product',
                            array(0=>'&nbsp;Không&nbsp;', 1=>'&nbsp;Có&nbsp;'),
                            array('legend'=>false, 'value'=>0)
                        );
                        ?>
                    </div>

                    <div class="form-group">
                        <label>Mô tả sản phẩm</label>
                        <?php
                        $CKEditor = new CKEditor();
                        $CKEditor->returnOutput = true;
                        $CKEditor->basePath = DOMAINAD . "js/ckeditor/";
                        $CKEditor->config['width'] = '100%';
                        $CKEditor->config['height'] = '200';
                        $CKEditor->textareaAttributes = array("rows" => 8, "cols" => 160);

                        CKFinder::SetupCKEditor( $CKEditor ) ;

                        $CKEditor->config['toolbar'] = array(
                            array( 'Source', '-', 'Bold', 'Italic', 'Underline', 'Strike' ),
                            array( 'Image', 'Link', 'Unlink', 'Anchor' )
                        );

                        $initialValue = empty($this->data['Product']['description']) ? '' : $this->data['Product']['description'];
                        echo $CKEditor->editor("data[Product][description]", $initialValue, "");
                        ?>
                    </div>

                    <div class="form-group">
                        <label>Chi tiết sản phẩm</label>
                        <?php
                        $CKEditor = new CKEditor();
                        $CKEditor->returnOutput = true;
                        $CKEditor->basePath = DOMAINAD . "js/ckeditor/";
                        $CKEditor->config['width'] = '100%';
                        $CKEditor->config['height'] = '300';
                        $CKEditor->textareaAttributes = array("rows" => 8, "cols" => 160);


                        CKFinder::SetupCKEditor( $CKEditor ) ;

                        $initialValue = empty($this->data['Product']['detail']) ? '' : $this->data['Product']['detail'];
                        echo $CKEditor->editor("data[Product][detail]", $initialValue, "");
                        ?>
                    </div>

                </div><!-- /.box-body -->
                
                <script>
                    $(document).ready(function(){
                        var availableTags = [<?php echo $tags_str ?>];

                      //The text input
                      var input = $("input#ProductTags");

                      //The tagit list
                      var instance = $("<ul class=\"tags\"></ul>");

                      //Store the current tags
                      //Note: the tags here can be split by any of the trigger keys
                      //      as tagit will split on the trigger keys anything passed  
                      var currentTags = input.val();

                      //Hide the input and append tagit to the dom
                      input.hide().after(instance);

                      //Initialize tagit
                      instance.tagit({
                        tagSource:availableTags,
                        tagsChanged:function () {

                          //Get the tags            
                          var tags = instance.tagit('tags');
                          var tagString = [];
                          //Pull out only value
                          for (var i in tags){
                            tagString.push(tags[i].value);
                          }

                          //Put the tags into the input, joint by a ','
                          input.val(tagString.join(','));
                        }
                      });

                      //Add pre-loaded tags to tagit
                      instance.tagit('add', currentTags);

                    });
            </script>
            
             <div class="form-group">
                    <label>Tags</label>
                    <?php echo $this->Form->input('Product.tags', array( 'type' => 'hidden', 'label' => '', 'class' => 'form-control')); ?>
                    
                </div>


                <div class="box-footer">
                    <a href="javascript:void(0);" onclick="javascript:document.image.submit();" class="btn btn-primary"> <span class="icon-32-save"></span> Lưu </a>
                    <a href="javascript:void(0);" class="btn btn-primary" onclick="javascript:document.image.reset();"> <span class="icon-32-refresh"> </span> Làm mới </a>
                    <a href="#messages" rel="modal" class="btn btn-primary"> <span class="icon-32-help"></span> Trợ giúp </a>
                    <a href="<?php echo DOMAINAD ?>product" class="btn btn-primary"> <span class="icon-32-cancel"></span> Hủy </a>
                </div>







                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>

</section><!-- /.content -->




<script type="text/javascript" language="javascript">

function MoreImage(){
	var number_images = $('#number_images').val();
	number_images ++;
	var content = '<div id="box_multi_images_'+number_images+'"><div id="images_chose_multi_images_'+number_images+'" style="float: left; width: 100px;"></div><!--end #images_chose--><input name="multi_images[]" class="text-input image-input datepicker" id="multi_images_'+number_images+'" maxlength="255" style="margin-left: 20px; float: left;" type="text"><input type="button" value="Chọn ảnh" onclick="BrowseServerMore(\'multi_images_'+number_images+'\');" class="button" style="margin-left: 20px; float: left; margin-top: 5px;"><input type="button" value="Xóa ảnh" onclick="CloseImages(\'box_multi_images_'+number_images+'\');" class="button close_images" style="margin-left: 20px; float: left; margin-top: 5px;" data-image="box_multi_images_'+number_images+'"><div style="clear: both;"></div></div>';
	$('.box_multi_images').append(content);
	$('#number_images').val(parseFloat(number_images));
	
}

function CloseImages(DIV){
	$('#'+DIV).html('');
}

</script>