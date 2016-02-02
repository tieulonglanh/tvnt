<section class="content-header">
    <h1>Danh sách Cấu hình</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo DOMAINAD ?>" ><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active">Cấu hình</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
                <!-- header -->
                <div class="box-header">
                    <div class="box-tools">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <a href="<?php echo DOMAINAD; ?>Bloghtml/add" class="btn btn-sm btn-success" ><i class="fa fa-fw fa-plus-circle"></i> Thêm mới </a>
                                <a href="#messages" rel="modal" class="btn btn-sm btn-success" ><i class="fa fa-fw fa-question"></i> Trợ giúp </a>
                                <a href="<?php echo DOMAINAD; ?>home" class="btn btn-sm btn-success" ><i class="fa fa-fw fa-times-circle"></i> Đóng </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /header -->

                <!-- box -->
                <div class="box">
                    <div class="box-body table-responsive">
                        
                        
                        <?php $error = $this->Session->flash(); ?>
                        <?php if (strlen($error) > 45): ?>
                            <div class="alert alert-warning alert-dismissable">
                                <i class="fa fa-warning"></i>
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <?php echo $error; ?>
                            </div>
                        <?php endif; ?>

                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th width="4%">STT</th>
                                    <th width="30%" style="text-align:center;"><?php echo $this->Paginator->sort('Bloghtml.name', 'Tên cấu hình'); ?></th>
                                    <th width="11%"><?php echo $this->Paginator->sort('Bloghtml.content', 'Nội dung'); ?></th>
                                    <th width="11%"><?php echo $this->Paginator->sort('Bloghtml.modified', 'Thay đổi'); ?></th>
                                    <th width="12%">Xử lý</th>
                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td colspan="9">
                                        <div class="pagination" style="float: right; margin-right: 10px;">
                                            <?php
                                            if($this->Paginator->counter('{:pages}')>1){
                                                echo $this->Paginator->first('« Đầu ', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li'));
                                                echo $this->Paginator->prev('« Trước ', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li'));
                                                echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'currentClass' => 'active', 'tag' => 'li', 'first' => 1));
                                                echo $this->Paginator->next(' Tiếp »', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li'));
                                                echo $this->Paginator->last('« Cuối ', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li'));
                                            }
                                            ?>
                                            <script type="text/javascript">
                                                $(function() {
                                                    $(".pagination li").each(function (k, v) {
                                                        if($(this).find("a").length == 0) {
                                                            $(this).html("<a>" + $(this).html() + "</a>");
                                                        }
                                                    });
                                                });
                                            </script>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php foreach ($Bloghtml as $key => $value) {  ?>
                                <tr>
                                    <td><?php echo $key+1; ?></td>
                                    
                                    <td><?php echo $value['Bloghtml']['name']; ?></td>
                                    <td><?php echo $value['Bloghtml']['content']; ?></td>
                                    <td>
                                        <?php echo date('d-m-Y', strtotime($value['Bloghtml']['modified'])); ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo DOMAINAD ?>Bloghtml/edit/<?php echo $value['Bloghtml']['id']; ?>" title="Edit"><img src="<?php echo DOMAINAD ?>images/icons/pencil.png" alt="Edit" /></a> 
                                        
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /box -->
            </div>
        </div>
    </div>
</section>