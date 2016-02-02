<section class="content-header">
    <h1>
        Thêm mới Cài đặt
        <small>Thêm mới</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo DOMAINAD ?>" ><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="<?php echo DOMAINAD ?>Bloghtml" > Cài đặt</a></li>
        <li class="active"> Thêm mới</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <!-- box-header -->
            <?php echo $this->Form->create(null, array('url' => DOMAINAD . 'Bloghtml/add', 'type' => 'post', 'enctype' => 'multipart/form-data', 'name' => 'image')); ?>
            <div class="box-header">
                <div class="box-tools" style="margin-bottom: 10px">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <a href="javascript:void(0);" onclick="javascript:document.image.submit();" class="btn btn-success"><i class="fa fa-fw fa-plus-circle"></i> Lưu</a>
                            <a href="javascript:void(0);" onclick="javascript:document.image.reset();" class="btn btn-success"><i class="fa fa-fw fa-random"></i>Reset</a>
                            <a href="#messages" rel="modal" class="btn btn-success"><i class="fa fa-fw fa-times"></i>Trợ giúp </a>
                            <a href="<?php echo DOMAINAD; ?>Bloghtml" class="btn btn-success"><i class="fa fa-fw fa-times"></i> Hủy</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->

            <div class="box box-primary">
                <div class="box-body">
                    <?php $error = $this->Session->flash(); ?>
                    <?php if (strlen($error) > 45): ?>
                        <div class="alert alert-warning alert-dismissable">
                            <i class="fa fa-warning"></i>
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <?php echo $this->Form->input('Bloghtml.name', array('label' => 'Tên cấu hình', 'class' => 'form-control', 'onchange' => 'get_alias()', 'id' => 'idtitle')); ?>
                    </div>

                    <div class="form-group">
                        <?php echo $this->Form->input('Bloghtml.content', array('label' => 'Nội dung cấu hình', 'class' => 'form-control', 'id' => 'content')); ?>
                    </div>

                     <div class="form-group">
                        <label> Mã HTML </label>
                        <?php
                        $CKEditor = new CKEditor();
                        $CKEditor->returnOutput = true;
                        $CKEditor->basePath = DOMAINAD . "js/ckeditor/";
                        $CKEditor->config['width'] = '98%';
                        $CKEditor->config['height'] = '200';

                        CKFinder::SetupCKEditor( $CKEditor ) ;

                        // $CKEditor->config['toolbar'] = array(
                        //     array( 'Source', '-', 'Bold', 'Italic', 'Underline', 'Strike' ),
                        //     array( 'Image', 'Link', 'Unlink', 'Anchor' )
                        // );

                        $initialValue = empty($this->data['Bloghtml']['html']) ? '' : $this->data['Bloghtml']['html'];
                        echo $CKEditor->editor("data[Bloghtml][html]", $initialValue, "");
                        ?>
                    </div>

                    <?php echo $this->Form->input('Bloghtml.id', array('type' => 'hidden')); ?>
                </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</section>