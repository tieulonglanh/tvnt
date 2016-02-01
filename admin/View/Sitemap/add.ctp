<section class="content-header">
    <h1>
        Danh sách Sitemap
        <small>Thêm mới</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo DOMAINAD ?>" ><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="<?php echo DOMAINAD ?>sitemap" > Sitemap</a></li>
        <li class="active"> Thêm mới</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <!-- box-header -->
            <?php echo $this->Form->create(null, array('url' => DOMAINAD . 'sitemap/add', 'type' => 'post', 'enctype' => 'multipart/form-data', 'name' => 'image')); ?>
            <div class="box-header">
                <div class="box-tools" style="margin-bottom: 10px">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <a href="javascript:void(0);" onclick="javascript:document.image.submit();" class="btn btn-success"><i class="fa fa-fw fa-plus-circle"></i> Lưu</a>
                            <a href="javascript:void(0);" onclick="javascript:document.image.reset();" class="btn btn-success"><i class="fa fa-fw fa-random"></i> Reset</a>
                            <a href="#messages" rel="modal" class="btn btn-success"><i class="fa fa-fw fa-question"></i>Trợ giúp </a>
                            <a href="<?php echo DOMAINAD; ?>sitemap" class="btn btn-success"><i class="fa fa-fw fa-times"></i> Hủy</a>
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
                        <?php echo $this->Form->input('Sitemap.name', array('label' => 'Tên Sitemap', 'class' => 'form-control', 'onchange' => 'get_alias()', 'id' => 'idtitle')); ?>
                    </div>
                    
                    <div class="form-group">
                        <?php echo $this->Form->input('Sitemap.description', array('type' => 'textarea', 'label' => 'Meta description', 'class' => 'form-control', 'style' => 'resize: none;')); ?>
                    </div>
                    
                    <div class="form-group">
                        <?php echo $this->Form->input('Sitemap.link', array('label' => 'Đường dẫn', 'class' => 'form-control')); ?>
                    </div>
                    
                    <div class="form-group">
                        <?php echo $this->Form->input('Sitemap.parent_id',array('type'=>'select','options'=>$list_sitemap,'empty'=>'Chọn sitemap cha','class'=>'form-control','label'=>'Danh mục cha'));?>
                    </div>
                    
                    
                </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</section>