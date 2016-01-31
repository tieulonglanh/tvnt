<section class="content-header">
    <h1>
        Danh sách danh mục sản phẩm
        <small>Thêm mới</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo DOMAINAD ?>" ><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="<?php echo DOMAINAD ?>product_category" > Danh mục sản phẩm</a></li>
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
           <?php echo $this->Form->create(null, array('url' => DOMAINAD . 'product_category/add', 'type' => 'post', 'enctype' => 'multipart/form-data', 'name' => 'image')); ?>


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
                        <label for="idtitle">Tên danh mục sản phẩm</label>
                        <?php echo $this->Form->input('ProductCategory.name', array('label' => '', 'class' => 'form-control', 'onchange' => 'get_alias()', 'id' => 'idtitle')); ?>
                    </div>

                    <div class="form-group">
                        <label for="idtitle">SEO Title</label>
                        <?php echo $this->Form->input('ProductCategory.name_en', array('label' => '', 'class' => 'form-control', 'id' => 'name_en')); ?>
                    </div>

                     <div class="form-group">
                        <label for="idalias">Đường dẫn</label>
                        <?php echo $this->Form->input('ProductCategory.alias', array('label' => '', 'class' => 'form-control', 'id' => 'idalias')); ?>
                     </div>

                     <div class="form-group">
                         <label>Meta description</label>
                         <?php echo $this->Form->input('ProductCategory.meta_description', array('type' => 'textarea', 'label' => '', 'class' => 'form-control', 'style' => 'resize: none;')); ?>
                     </div>
                    
                    <div class="form-group">
                        <?php echo $this->Form->input('ProductCategory.lft', array('type' => 'textarea', 'label' => 'Footer Text', 'class' => 'form-control', 'style' => 'resize: none;')); ?>
                    </div>

                      <div class="form-group">
                          <label>Meta keyword</label>
                          <?php echo $this->Form->input('ProductCategory.meta_keyword', array('label' => '', 'class' => 'form-control')); ?>
                     </div>

                      <div class="form-group">
                           <label>Danh muc cha</label>
                           <?php echo $this->Form->input('ProductCategory.parent_id',array('type'=>'select','options'=>$list_cat,'empty'=>'Chọn danh mục','class'=>'btn btn-sm btn-default'));?>
                      </div>

                    <div class="form-group">
                         <label>Sắp xếp</label>
                         <?php echo $this->Form->input('ProductCategory.sort_order', array('label' => '', 'class' => 'btn btn-sm btn-default')); ?>
                    </div>

                  <div class="form-group">
                         <label>Hình đại diện</label>
                         <div id="images_chose">
                                <?php if(!empty($this->data['ProductCategory']['images'])){?>
                                 <img src="/admin/timthumb.php?src=<?php echo $this->data['ProductCategory']['images'];?>&amp;h=100&amp;w=100&amp;zc=1" />
                                <?php } ?>
                             </div><!--end #images_chose-->
                             <?php echo $this->Form->input('ProductCategory.images',array('label'=>false, 'class'=>'form-control','id' => 'xFilePath','maxlength'=>'255'));?>
                             <input type="button" value="Chọn ảnh" onclick="BrowseServer();" class="btn btn-sm btn-default"/>
                        </div>
                    

                 <div class="form-group">
                     <label>Trạng thái&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                     <?php
                     						echo $this->Form->radio(
                     								'ProductCategory.status',
                     								array(0=>'&nbspNgừng hoạt động&nbsp&nbsp&nbsp&nbsp&nbsp', 1=>'&nbspHoạt động'),
                     								array('legend'=>false, 'style'=>'float: left; cursor: pointer; margin-left: 20px;', 'value'=>1)
                     						);
                     					?>
                </div>
                    
                    
<script>
        $(document).ready(function(){
            var availableTags = [<?php echo $tags_str ?>];

          //The text input
          var input = $("input#ProductCategoryTags");

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
                    <?php echo $this->Form->input('ProductCategory.tags', array( 'type' => 'hidden', 'label' => '', 'class' => 'form-control')); ?>
                    <ul id="tags-available">
                        
                    </ul>
                </div>

                </div><!-- /.box-body -->

                <div class="box-footer">
                          <a href="javascript:void(0);" onclick="javascript:document.image.submit();" class="btn btn-primary"> <span class="icon-32-save"></span> Lưu </a>
                          <a href="javascript:void(0);" class="btn btn-primary" onclick="javascript:document.image.reset();"> <span class="icon-32-refresh"> </span> Làm mới </a>
                          <a href="#messages" rel="modal" class="btn btn-primary"> <span class="icon-32-help"></span> Trợ giúp </a>
                          <a href="<?php echo DOMAINAD ?>product_category" class="btn btn-primary"> <span class="icon-32-cancel"></span> Hủy </a>
                </div>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>

</section><!-- /.content -->





