<section class="content-header">
    <h1>
        Chi tiết liên hệ

    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo DOMAINAD ?>" ><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="<?php echo DOMAINAD ?>contact" > Danh sách liên hệ</a></li>
        <li class="active">Chi tiết liên hệ</li>
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

                            <a href="<?php echo DOMAINAD; ?>contact/add" class="btn btn-sm btn-success" ><i class="fa fa-fw fa-plus-square"></i> Thêm mới </a>
                            <a href="#messages" rel="modal" class="btn btn-sm btn-warning" > Trợ giúp </a>
                            <a href="<?php echo DOMAINAD; ?>home" class="btn btn-sm btn-danger" > Đóng </a>
                        </div>
                    </div>

                </div>
            </div><!-- /.box-header -->
            <div class="box">



                <!-- form start -->
                <?php echo $this->Form->create(null, array('url' => DOMAINAD . 'contact/edit', 'type' => 'post', 'enctype' => 'multipart/form-data', 'name' => 'image')); ?>


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
                        <label>Tên liên hệ</label>
                        <?php echo $this->Form->input('Contact.name', array('label' => '', 'class' => 'form-control')); ?>
                    </div>



                    <div class="form-group">
                        <label>Email liên hệ</label>
                        <?php echo $this->Form->input('Contact.email', array('label' => '', 'class' => 'form-control')); ?>
                    </div>

                   <div class="form-group">
                        <label>Số điện thoại</label>
                        <?php echo $this->Form->input('Contact.mobile', array('label' => '', 'class' => 'form-control')); ?>
                    </div>

                    <div class="form-group">
                        <label>Fax</label>
                        <?php echo $this->Form->input('Contact.fax', array('label' => '', 'class' => 'form-control')); ?>
                    </div>

                    <div class="form-group">
                        <label>Công ty</label>
                        <?php echo $this->Form->input('Contact.company', array('label' => '', 'class' => 'form-control')); ?>
                    </div>

                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <?php echo $this->Form->input('Contact.title', array('label' => '', 'class' => 'form-control')); ?>
                    </div>

                    <div class="form-group">
                        <label>Nội dung</label>
                        <?php echo $this->Form->input('Contact.content', array('label' => '', 'class' => 'form-control')); ?>
                    </div>

                    <div class="form-group">
                        <label>Trạng thái&nbsp&nbsp&nbsp&nbsp&nbsp</label>

                        <?php
                        echo $this->Form->radio(
                            'Contact.status',
                            array(0=>'&nbspChưa active&nbsp&nbsp&nbsp&nbsp&nbsp', 1=>'&nbspActive'),
                            array('legend'=>false, 'style'=>'float: left; cursor: pointer; margin-left: 20px;')
                        );
                        ?>
                    </div>
                    <?php echo $this->Form->input('Contact.id',array('type'=>'hidden'));?>








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
