<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Home</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<?php if( is_home() ): ?>

<?php endif; ?>

    <header>
        <div class="container-fluid header__wrapper dis-flex">
            <div class="logo">
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo IMAGE_URL .'/logo.png' ?>" alt="Sigma" /></a></h1>
            </div>
            <div class="header__top">
                <div class="header__inner dis-flex">
                    <div class="address dis-flex">
                        <img src="<?php echo IMAGE_URL .'/ic_address.png' ?>" alt="">
                        <div class="__txt">VP Hà Nội: Tầng 6 - Số 74B - Yên Lãng - Đống Đa - Hà Nội.</div>
                    </div>
                    <div class="email dis-flex">
                        <img src="<?php echo IMAGE_URL .'/ic_email.png' ?>" alt="">
                        <div class="__txt">Email: sales@sigma.com.vn</div>
                    </div>
                </div>
                <div class="header__navigation">
                    <ul class="dis-flex">
                        <li>
                            <a href="#">Trang chủ</a>
                        </li>
                        <li>
                            <a href="#">Giới thiệu</a>
                        </li>
                        <li>
                            <a href="#">Dự án</a>
                        </li>
                        <li>
                            <a href="#">Dịch vụ</a>
                        </li>
                        <li>
                            <a href="#">Sản phẩm</a>
                        </li>
                        <li>
                            <a href="#">Tin tức</a>
                        </li>
                        <li>
                            <a href="#">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="info dis-flex">
                <div class="info__left">
                    <div class="hotline dis-flex">
                        <div class="hotline__img">
                            <img src="<?php echo IMAGE_URL .'/ic_hotline.png' ?>" title="Hot line" alt="Hot line">
                        </div>
                        <div class="hotline__inner">
                            <div class="hotline__txt">Hotline Sigma</div>
                            <div class="hotline__number">0123 456 789</div>
                        </div>
                        <img src="<?php echo IMAGE_URL .'/ic_line_right.png' ?>" alt="">
                    </div>
                </div>


                <div class="info__right dis-flex">
                    <div class="search">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="acount">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="lang-item">
                        <a href="#">
                            <img src="<?php echo IMAGE_URL .'/ic_lang_vi.png' ?>" title="Tiếng Việt" alt="Tiếng Việt">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

