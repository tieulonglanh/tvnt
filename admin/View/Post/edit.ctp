<?php
echo $this->Html->script('ckeditor/ckeditor');
?>

<section class="content-header">
    <h1>
        Sửa Post
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo DOMAINAD ?>" ><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="<?php echo DOMAINAD ?>post" > Danh sách Post</a></li>
        <li class="active"> Sửa Post</li>
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

                            <a href="<?php echo DOMAINAD; ?>post/add" class="btn btn-sm btn-success" ><i class="fa fa-fw fa-plus-square"></i> Thêm mới </a>
                            <a href="#messages" rel="modal" class="btn btn-sm btn-warning" > Trợ giúp </a>
                            <a href="<?php echo DOMAINAD; ?>home" class="btn btn-sm btn-danger" > Đóng </a>
                        </div>
                    </div>

                </div>
            </div><!-- /.box-header -->
            <div class="box">



                <!-- form start -->
                <?php echo $this->Form->create(null, array('url' => DOMAINAD . 'post/edit', 'type' => 'post', 'enctype' => 'multipart/form-data', 'name' => 'image')); ?>


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
                        <label for="idtitle">Tiêu đề tin</label>
                        <?php echo $this->Form->input('Post.name', array('label' => '', 'class' => 'form-control', 'onchange' => 'get_alias()', 'id' => 'idtitle')); ?>
                    </div>



                    <div class="form-group">
                        <label>Tiêu đề tiếng anh</label>
                        <?php echo $this->Form->input('Post.name_en', array('label' => '', 'class' => 'form-control')); ?>
                    </div>

                    <div class="form-group">
                        <label for="idalias">Đường dẫn ảo</label>
                        <?php echo $this->Form->input('Post.alias', array('type' => 'text', 'label' => '', 'class' => 'form-control', 'style' => 'resize: none;', 'id' => 'idalias')); ?>
                    </div>

                    <div class="form-group">
                        <label>Sắp xếp</label>
                        <?php echo $this->Form->input('Post.sort_order', array('type' => 'text', 'label' => '', 'class' => 'form-control', 'style' => 'resize: none;')); ?>
                    </div>


                    <div class="form-group">
                        <label>Hình ảnh đại diện</label>
                        <div id="images_chose">
                            <?php if(!empty($this->data['Post']['images'])){?>
                                <img src="/admin/timthumb.php?src=<?php echo $this->data['Post']['images'];?>&amp;h=100&amp;w=100&amp;zc=1" />
                            <?php } ?>
                        </div><!--end #images_chose-->
                        <?php echo $this->Form->input('Post.images',array('label'=>false, 'class'=>'form-control','id' => 'xFilePath','maxlength'=>'255'));?>
                        <input type="button" value="Chọn ảnh" onclick="BrowseServer();" class="btn btn-primary" />
                    </div>

                    <div class="form-group">
                        <label>Trạng thái&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                        <?php
                        echo $this->Form->radio(
                            'Post.status',
                            array(0=>'&nbspNgừng hoạt động&nbsp&nbsp&nbsp&nbsp&nbsp', 1=>'&nbspHoạt động'),
                            array('legend'=>false, 'style'=>'float: left; cursor: pointer; margin-left: 20px;', 'value'=>1)
                        );
                        ?>
                    </div>



                    <div class="form-group">
                        <label>Mô tả tin</label>
                        <?php
                        $CKEditor = new CKEditor();
                        $CKEditor->returnOutput = true;
                        $CKEditor->basePath = DOMAINAD . "js/ckeditor";
                        $CKEditor->config['width'] = '98%';
                        $CKEditor->config['height'] = '200';

                        CKFinder::SetupCKEditor( $CKEditor ) ;

                        $CKEditor->config['toolbar'] = array(
                            array( 'Source', '-', 'Bold', 'Italic', 'Underline', 'Strike' ),
                            array( 'Image', 'Link', 'Unlink', 'Anchor' )
                        );

                        $initialValue = empty($this->data['Post']['description']) ? '' : $this->data['Post']['description'];
                        echo $CKEditor->editor("data[Post][description]", $initialValue, "");
                        ?>
                    </div>

                    <div class="form-group">
                        <label>Chi tiết tin</label>
                        <?php
                        $CKEditor = new CKEditor();
                        $CKEditor->returnOutput = true;
                        $CKEditor->basePath = DOMAINAD . "js/ckeditor";
                        $CKEditor->config['width'] = '98%';
                        $CKEditor->config['height'] = '300';

                        CKFinder::SetupCKEditor( $CKEditor ) ;

                        $initialValue = empty($this->data['Post']['detail']) ? '' : $this->data['Post']['detail'];
                        echo $CKEditor->editor("data[Post][detail]", $initialValue, "");
                        ?>
                    </div>

                    <?php echo $this->Form->input('Post.id', array('id'=>'hidden')); ?>


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