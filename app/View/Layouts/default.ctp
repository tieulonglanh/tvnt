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
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

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
        <link href="<?php echo DOMAIN?>images/icon/logi.jpg" rel="icon">
        <link rel="stylesheet" type="text/css" href="<?php echo DOMAIN?>css/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="<?php echo DOMAIN?>css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo DOMAIN?>css/isotope.css">
          <link rel="stylesheet" type="text/css" href="<?php echo DOMAIN?>css/animate.css">
        <link rel="stylesheet" type="text/css" href="<?php echo DOMAIN?>css/slideshow.css" media="screen">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <script>(function() {
        var _fbq = window._fbq || (window._fbq = []);
        if (!_fbq.loaded) {
        var fbds = document.createElement('script');
        fbds.async = true;
        fbds.src = '//connect.facebook.net/en_US/fbds.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(fbds, s);
        _fbq.loaded = true;
        }
        _fbq.push(['addPixelId', '1514115115498919']);
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', 'PixelInitialized', {}]);
        </script>
        <script type="text/javascript" src="<?php echo DOMAIN?>js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo DOMAIN?>js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo DOMAIN?>js/wow.min.js"></script>
        <script type="text/javascript" src="<?php echo DOMAIN?>js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript" src="<?php echo DOMAIN?>js/MENU.js"></script>
        <script type="text/javascript" src="<?php echo DOMAIN?>js/isotope.js"></script>
           <script>
 new WOW().init();
</script>
           <script type="text/javascript">
            $(document).ready(function () {

            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#top').fadeIn();
                } else {
                    $('#top').fadeOut();
                }
            });

            $('#top').click(function () {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });

        });
           </script>

    </head>
   <body>

        <div id="top" style="display: block;"><img src="<?php echo DOMAIN?>images/toTop.png"></div>
        <div id="container">
            <?php echo $this->element('header')?>
            
            <?php echo $content_for_layout;?>
        <div id="content"><h1 style="display: none;">NEW FUTURE GRAPHICS | THƯ VIỆN 3D MAX, 3D, 3DS MAX, MODELS 3D, 3D MODELS, DOWNLOAD 3D MODELS, SÁCH KIẾN TRÚC, DOWNLOAD 3DS MAX, HỒ SƠ THI CÔNG, THƯ VIỆN REVIT, THƯ VIỆN PHOTOSHOP, MODELS, HDRI, MAP</h1>
        </div>
        </div>
        <?php echo $this->element('footer')?>

          
        </div>

</body>
</html>