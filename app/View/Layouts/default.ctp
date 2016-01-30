<!DOCTYPE html>
<html lang="vi" xml:lang="vi" xmlns="http://www.w3.org/1999/xhtml"  prefix="og:http://ogp.me/ns# fb:http://www.facebook.com/2008/fbml">
    <head>
        <!-- Phần cấu hình này phải giữ lại -->
        <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
        <title><?php if(isset($title_tag)): echo $title_tag; else: ?>Thư viện nội thất<?php endif; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/x-icon" href="http://newfuturegraphics.org/image/data/logo/logi%20mini.jpg" />
        <meta name="description" content="<?php if(isset($meta_description)): echo htmlentities($meta_description); else: ?>Xôn Xao - Kênh phim ngắn, phim hài đặc sắc, tổng hợp video clip hài hước mới và hot nhất<?php endif; ?>" />
        <meta name="keywords" content="<?php if(isset($keywords)): echo $keywords; else: ?>hai huoc, xôn xao, clip hai xôn xao, phim hai xôn xao, phim ngan xon xao, xonxao<?php endif; ?>" />
        <meta name="news_keywords" content="thư viện nội thất, nội thất" />
        <meta name="robots" content="index, follow" />

        <!--og Option-->
        <meta property="fb:app_id" content="1672140313044385" />   
        <meta property="og:site_name" content="Xôn xao" />
        <meta property="og:locale" content="vi_VN" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="<?php if(isset($fbimg)): echo filter_var($fbimg, FILTER_VALIDATE_URL) ? $fbimg : DOMAINIMG.$fbimg; else: ?>https://i.ytimg.com/vi/Il-rlWY9FlU/maxresdefault.jpg <?php endif; ?>" />
        <meta property="og:title" content="<?php if(isset($title_tag)): echo htmlentities($title_tag); else: ?>Xôn Xao - Series phim ngắn hài, Video clip hài hay và Hot nhất<?php endif; ?>" />
        <meta property="og:url" content="<?php if(isset($url)) echo $url;  ?>" />
        <meta property="og:description" content="<?php if(isset($meta_description)): echo htmlentities($meta_description); else: ?>Xôn Xao - Kênh phim ngắn, phim hài đặc sắc, tổng hợp video clip hài hước mới và hot nhất<?php endif; ?>" />
        <meta name="author" content="Xôn Xao TV" />
        <meta name="copyright" content="Xôn Xao TV" />     
        <meta name="google-site-verification" content="" />
        <div id="fb-root"></div>
        <!-- Phần cấu hình này phải giữ lại -->
        <!-- CSS - ICO
        ================================================== -->
        <link rel="shortcut icon" href="http://xonxao.tv/images/logoxx.png" type="image/x-icon" />
        <?php echo $this->Html->css(array('main.css', 'perfect-scrollbar.css', 'owl.carousel.css')) ?>
        <!-- owl.carousel.js -->
        <?php echo $this->Html->script(array(
            'jquery-2.1.4.min.js', 
            'bootstrap.min.js', 
            'fix_bug.js',
            'jquery.nst.ui.js',
            'custom.js',
            'perfect-scrollbar.jquery.js',
            'perfect-scrollbar.js',
            'jquery-scrollTo.js',
            'jquery.lazyload.min.js'
            )); ?>

    </head>
    <body>
        <!--Start header-->
         <?php echo $this->element('menuhead'); ?>
        <!--
        <script type="text/javascript">
            $(document).ready(function(){
                $(window).scroll(function () {
                if ($(this).scrollTop() > 10) {
                    $("#top").css({ "position":"fixed", "top":"0", "left":"0","width":"100%"});
                } else {
                    $("#top").css({ "position":"static" });
                }
            });
            });
        </script>
        -->
        <script type="text/javascript">

            $(function () {
                $("img").lazyload();
            });

        </script>                 
        <?php echo $content_for_layout; ?>
        <!--Footer-->
        <footer id="footer-wrap" class="">
            <div class="container">
                <div class="footer-inner">
                    <div class="footer-copyright">
                        <p  style="text-align:center;">© Copyright Xôn Xao - Phim Ngắn Hài Hước - Kênh Phim Hài hước, Clip Hài Hước, Clip Hot, Thời Trang, Nội Trợ dành cho giới trẻ. <br />
							<span>Bản thử nghiệm!</span>
                        </p>
                    </div>
                </div>
            </div>
        </footer>


        <script src="js/owl.carousel.js"></script>

        <script type="text/javascript">
            var owl = $("#owl-carousel");
            owl.owlCarousel({
                items: 4,
                navigation: false,
                pagination: false,
                autoPlay: 5000,
                stopOnHover: true,
                itemsDesktop: [1199, 4],
                itemsTablet: [600, 2], //2 items between 600 and 0
                itemsDesktopSmall: [900, 3], // betweem 900px and 601px
                itemsMobile: [479, 2],
            });
            $(".Rslide .next_slider").click(function () {
                owl.trigger('owl.next');
            });
            $(".Rslide .prev_slider").click(function () {
                owl.trigger('owl.prev');
            });
        </script>
        <?php //echo $this->Html->script('snowstorm.js') ?>

    </body>
</html>