<section class="content-header">
    <h1>
        Danh sách sản phẩm
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo DOMAINAD ?>" ><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active"> Danh sách sản phẩm</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

                <div class="box-header">

                    <div class="box-tools">
                        <?php echo $this->Form->create(null, array('url' => DOMAINAD . 'product/search', 'type' => 'post', 'name' => 'frm_search')); ?>
                        <div class="input-group">

                            <div class="input-group-btn">

                                <a href="<?php echo DOMAINAD; ?>product/add" class="btn btn-sm btn-success" ><i class="fa fa-fw fa-plus-square"></i> Thêm mới </a>
                                <a href="#messages" rel="modal" class="btn btn-sm btn-warning" > Trợ giúp </a>
                                <a href="<?php echo DOMAINAD; ?>home" class="btn btn-sm btn-danger" > Đóng </a>

                            </div>

                            <input type="text" name="keyword" id="field2c" value="" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search">
                            <?php echo $this->Form->input('',array('name'=>'category_id', 'class'=>'form-control input-sm pull-right', 'type'=>'select','options'=>$list_cat,'empty'=>'Chọn danh mục', 'label'=>'', 'style'=>'width: 150px;'));?>
                            <div class="input-group-btn">
                                <input type="submit" class="btn btn-sm btn-default" />
                            </div>
                        </div>

                        <?php echo $this->Form->end(); ?>
                    </div>
                </div><!-- /.box-header -->

            <div class="box">
                <div class="box-body table-responsive no-padding">
                    <?php
                    $my_error1 = $this->Session->flash();
                    ?>
                    <?php if($my_error1){ ?>
                        <div class="alert alert-success alert-dismissable">
                            <i class="fa fa-check"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $my_error1; ?>
                        </div>
                    <?php } ?>
                    <table class="table table-hover table-bordered">
                        <tbody>
                        <tr>
                            <th width="2%"><a href='javascript:void(0)' id="checkallbox" >Check All</a></th>
                            <th width="7%"><?php echo $this->Paginator->sort('Product.id', 'Mã'); ?></th>
                            <th style="width: 5%; text-align:center;">Ảnh</th>
                            <th style="width: 20%; text-align:center;"><?php echo $this->Paginator->sort('Product.name', 'Tên sản phẩm'); ?></th>
                            <th style="width: 5%; text-align:center;">Đường dẫn</th>
                            <th width="10%" style="text-align:center;"><?php echo $this->Paginator->sort('Product.code', 'Mã sản phẩm'); ?></th>
                            <th width="10%" style="text-align:center;"><?php echo $this->Paginator->sort('Product.price', 'Giá'); ?></th>
                            <th style="width: 3%; text-align:center;"><?php echo $this->Paginator->sort('Product.sl', 'Số lượng'); ?></th>
                            <th width="15%"><?php echo $this->Paginator->sort('Product.product_category_id', 'Danh mục'); ?></th>
                            <th width="12%">Xử lý</th>
                        </tr>
                        <tr>
                            <form id="frmFilter" method="get">
                            <th><input type="checkbox" name="all" id="checkall" /></th>
                            <th></th>
                            <th></th>
                            <th> <input type="text" name="name" id="field2c" value="<?php echo isset($name) ? $name : ""?>" class="filter" style="width: 150px;" ></th>
                            <th></th>
                            <th><input type="text" name="code" id="field2c" value="<?php echo isset($code) ? $code : ""?>" class="filter" style="width: 70px;" ></th>
                            <th><input type="text" name="price" id="field2c" value="<?php echo isset($price) ? $price : ""?>" class="filter" style="width: 80px;" ></th>
                            <th><input type="text" name="sl" id="field2c" value="<?php echo isset($sl) ? $sl : ""?>" class="filter" style="width: 30px;" ></th>
                            <th><input type="text" name="category_id" id="field2c" value="<?php echo isset($category_id) ? $category_id : ""?>" class="filter" >
                            <th>
                                <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-fw fa-filter"></i> Lọc</button>
                                <button type="button" id="cancelFilter" class="btn btn-sm btn-danger"><i class="fa fa-fw fa-refresh"></i> Hủy</button>
                            </th>
                            </form>
                        </tr>

                    <?php echo $this->Form->create(null, array('url' => DOMAINAD . 'product/action_all', 'type' => 'post', 'name' => 'frm_list')); ?>
                        <?php foreach ($product as $key => $value) {  ?>
                            <tr>
                                <td><input type="checkbox" name="chose_active[<?php echo $value['Product']['id']; ?>]" /></td>
                                <td><?php echo $value['Product']['id']; ?></td>
                                <td>
                                    <img src="<?php echo DOMAINAD?>/timthumb.php?src=<?php echo $value['Product']['images'];?>&amp;h=40&amp;w=40&amp;zc=1" />
                                </td>
                                <td><a href="<?php echo DOMAINAD ?>product/edit/<?php echo $value['Product']['id']; ?>" title="Edit"><?php echo $value['Product']['name']; ?></a>  <?php if(date('Y-m-d', strtotime($value['Product']['modified'])) == date('Y-m-d')) { ?><img src="<?php echo DOMAINAD ?>images/icons/iconnew.gif" alt="New" /><?php } ?></td>
                                <th><a target="blank" href="<?php echo DOMAIN ?>san-pham/<?php echo $value['Product']['alias']; ?>">Click here</a></th>
                                <td><?php echo $value['Product']['code']; ?></td>
                                <td><?php echo number_format($value['Product']['price']); ?></td>
                                <td><?php echo $value['Product']['sl']; ?></td>
                                <td><?php echo $value['ProductCategory']['name']; ?></td>
                                <td>
                                    <a href="<?php echo DOMAINAD ?>product/copy/<?php echo $value['Product']['id']; ?>" title="Copy"><img src="<?php echo DOMAINAD ?>images/icons/copy.png" alt="Copy" /></a>
                                    <a href="<?php echo DOMAINAD ?>product/edit/<?php echo $value['Product']['id']; ?>" title="Edit"><img src="<?php echo DOMAINAD ?>images/icons/pencil.png" alt="Edit" /></a> <a href="javascript:confirmDelete('<?php echo DOMAINAD ?>product/delete/<?php echo $value['Product']['id']; ?>')" title="Delete"><img src="<?php echo DOMAINAD ?>images/icons/cross.png" alt="Delete" /></a>
                                    <?php
                                    if ($value['Product']['status'] == 0) {
                                        ?>
                                        <a href="<?php echo DOMAINAD ?>product/active/<?php echo $value['Product']['id']; ?>" title="Kích hoạt" class="icon-5 info-tooltip"><img src="<?php echo DOMAINAD ?>images/icons/Play-icon.png" alt="Kích hoạt" /></a>
                                    <?php
                                    } else {
                                        ?>
                                        <a href="<?php echo DOMAINAD ?>product/close/<?php echo $value['Product']['id']; ?>" title="Đóng" class="icon-4 info-tooltip"><img src="<?php echo DOMAINAD ?>images/icons/success-icon.png" alt="Ngắt kích hoạt" /></a>
                                    <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="12">

                                <div class="bulk-actions align-left">
                                    <div id="box_action_all" style="float: left; margin-left: 10px;">
                                        <select name="process" id="chose_action_all" class="btn btn-sm btn-default">
                                            <option value="none">Lựa chọn</option>
                                            <option value="active_all">Active</option>
                                            <option value="close_all">Hủy Active</option>
                                            <option value="delete_all">Delete</option>
                                        </select>
                                        <input type="submit" name="submit_action_all" class="btn btn-sm btn-default" value="Thực hiện" />
                                    </div><!--end #box_action_all-->
                                </div><!--end #bulk-aciton-->

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
                    </table>
                    <?php echo $this->Form->end(); ?>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section><!-- /.content -->
<script type="text/javascript">
    $(function () {
        $('#cancelFilter').click(function (e) {
            e.preventDefault();
            $(".filter").val("");
            $("#frmFilter").submit();
        });
        $(".date").datepicker({
            format: 'dd-mm-yyyy'
        }).on('changeDate', function(ev) {
            $(this).data('datepicker').hide();
        });
    });
</script>