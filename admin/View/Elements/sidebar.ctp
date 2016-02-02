<?php
$setActive = $this->request->url;
$setActive = explode("/", $setActive);
$setActive = $setActive[0];
$tabindex = "";
if (in_array($setActive, array('product_category', 'product', 'order'))) {
    $tabindex = 0;
}
if (in_array($setActive, array('news_category', 'news'))) {
    $tabindex = 1;
}
if (in_array($setActive, array('gallery_category', 'gallery'))) {
    $tabindex = 2;
}
if (in_array($setActive, array('contact'))) {
    $tabindex = 3;
}
if (in_array($setActive, array('advertisement'))) {
    $tabindex = 4;
}
if (in_array($setActive, array('video', 'video_category'))) {
    $tabindex = 5;
}
if (in_array($setActive, array('user'))) {
    $tabindex = 6;
}
if (in_array($setActive, array('slideshow'))) {
    $tabindex = 7;
}
if (in_array($setActive, array('setting'))) {
    $tabindex = 8;
}
if (in_array($setActive, array('support'))) {
    $tabindex = 9;
}
if (in_array($setActive, array('question'))) {
    $tabindex = 10;
}
if (in_array($setActive, array('partner'))) {
    $tabindex = 11;
}
if (in_array($setActive, array('post'))) {
    $tabindex = 12;
}
if (in_array($setActive, array('link'))) {
    $tabindex = 13;
}
?>
<script type="text/javascript">
    ddaccordion.init({
        headerclass: "submenuheader",
        contentclass: "submenu",
        revealtype: "click",
        mouseoverdelay: 200,
        collapseprev: true,
        defaultexpanded: [<?php echo $tabindex; ?>],
        onemustopen: false,
        animatedefault: false,
        persiststate: false,
        toggleclass: ["", ""],
        animatespeed: "fast",
        oninit:function(headers, expandedindices){
            //do nothing
        },
        onopenclose:function(header, index, state, isuseractivated){
            //do nothing
        }
    })
</script>



            <!-- Left side column. contains the logo and sidebar -->
            <aside style='margin-top: 50px;' class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="/admin/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Xin chào, <?php echo $this->Session->read('name'); ?></p>

                            <a><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->

                    <ul class="sidebar-menu">

                        <li>
                            <a href="<?php echo DOMAINAD ?>home">
                                <i class="fa fa-dashboard"></i> <span> Bảng quản trị</span>
                            </a>
                        </li>
                        <li class="treeview active">
                                <a href="#">
                                    <i class="fa fa-edit"></i>
                                    <span> Sản Phẩm</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu" <?php if($setActive == 'product' || $setActive == 'product_category'){echo 'style="display: block"'; }?> >
                                    <li <?php if($setActive == 'product_category'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>product_category" ><i class="fa fa-angle-double-right"></i> Danh mục sản phẩm</a></li>
                                    <li <?php if($setActive == 'product_category'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>product_category/add" ><i class="fa fa-angle-double-right"></i> Thêm danh mục sản phẩm</a></li>
                                    <li <?php if($setActive == 'product'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>product" ><i class="fa fa-angle-double-right"></i> Danh sách sản phẩm</a></li>
                                    <li <?php if($setActive == 'product'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>product/add" ><i class="fa fa-angle-double-right"></i> Thêm sản phẩm</a></li>
                                    <li <?php if($setActive == 'tag'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>tag" ><i class="fa fa-angle-double-right"></i> Quản lý tag</a></li>
                                    <li <?php if($setActive == 'tag'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>tag/add" ><i class="fa fa-angle-double-right"></i> Thêm tag</a></li>
                                </ul>
                        </li>
                                                
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span> Tin tức</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu" <?php if($setActive == 'news' || $setActive == 'news_category'){echo 'style="display: block"'; }?> >
                                <li <?php if($setActive == 'news_category'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>news_category" ><i class="fa fa-angle-double-right"></i> Danh mục tin tức</a></li>
                                <li <?php if($setActive == 'news_category'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>news_category/add"><i class="fa fa-angle-double-right"></i> Thêm danh mục tin tức</a></li>
                                <li <?php if($setActive == 'news'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>news" ><i class="fa fa-angle-double-right"></i> Danh sách tin tức</a></li>
                                <li <?php if($setActive == 'news'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>news/add"><i class="fa fa-angle-double-right"></i> Thêm tin tức</a></li>
                            </ul>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span> Quản lý menu</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu" <?php if( $setActive == 'administrator'){echo 'style="display: block"'; }?> >
                                <li <?php if($setActive == 'menu'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>menu" ><i class="fa fa-angle-double-right"></i> Danh sách menu</a></li>
                                <li <?php if($setActive == 'menu'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>menu/add"><i class="fa fa-angle-double-right"></i> Thêm mới menu</a></li>
                            </ul>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span> Người quản trị</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu" <?php if( $setActive == 'administrator'){echo 'style="display: block"'; }?> >
                                <li <?php if($setActive == 'administrator'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>administrator" ><i class="fa fa-angle-double-right"></i> Danh sách Quản trị viên</a></li>
                                <li <?php if($setActive == 'administrator'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>administrator/add"><i class="fa fa-angle-double-right"></i> Thêm mới quản trị viên</a></li>
                            </ul>
                        </li>
                                                
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span> Cài đặt khác</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu" <?php if($setActive == 'setting' || $setActive == 'contact' || $setActive == 'post' || $setActive == 'sitemap' || $setActive == 'slideshow' || $setActive == 'advertisement' ){echo 'style="display: block"'; }?> >
                                <li <?php if($setActive == 'advertisement'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>advertisement" ><i class="fa fa-angle-double-right"></i> Danh sách quảng cáo</a></li>
                                <li <?php if($setActive == 'contact'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>contact" ><i class="fa fa-angle-double-right"></i> Liên hệ</a></li>
                                <li <?php if($setActive == 'setting'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>setting" ><i class="fa fa-angle-double-right"></i> Cấu hình</a></li>
                                <li <?php if($setActive == 'sitemap'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>sitemap" ><i class="fa fa-angle-double-right"></i> Sitemap</a></li>
                                <li <?php if($setActive == 'slideshow'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>slideshow" ><i class="fa fa-angle-double-right"></i> Slide show</a></li>
                                <li <?php if($setActive == 'post'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>post" ><i class="fa fa-angle-double-right"></i> Bài post</a></li>
                                 <li <?php if($setActive == 'bloghtml'){echo 'class="active"'; }?> ><a href="<?php echo DOMAINAD ?>bloghtml" ><i class="fa fa-angle-double-right"></i> Bloghtml</a></li>
                            </ul>
                        </li>

                    </ul>

                </section>
                <!-- /.sidebar -->
            </aside>