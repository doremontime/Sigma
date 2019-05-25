<?php
/*
 * Template Name: Project Detail
 * */
get_header();
?>

<section class="banner banner__page">
    <div class="banner__txt text-center">
        <h2 class="m-b-25">Dự án</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Dạn Án</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nhà máy Rioby</li>
            </ol>
        </nav>
    </div>
</section>

<section class="project__content">
    <div class="container">
        <div class="row">
            <div class="col-md-5 project__info p-r-0">
                <h3>Thông tin dự án</h3>
                <ul>
                    <li><strong>Công trình </strong>: Nhà máy Rioby</li>
                    <li><strong>Địa chỉ </strong>: 128 Hạ Lý, Hồng Bàng, Tp. Hải Phòng</li>
                    <li><strong>Hạng mục </strong>: Quạt công nghiệp HVLS</li>
                </ul>
                <div class="project__inner">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <img src="<?php echo IMAGE_URL .'/img_post_1.png' ?>" alt="" class="m-b-20">
                <img src="<?php echo IMAGE_URL .'/img_post_2.png' ?>" alt="" class="m-b-20">
                <img src="<?php echo IMAGE_URL .'/img_post_3.jpg' ?>" alt="" class="m-b-20">
            </div>
        </div>
    </div>
</section>

<section class="project project__remove__bg project__relate">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Dự Án Khác</h3>
            </div>
            <div class="project__container">
                <div class="project__card text-center m-b-10">
                    <div class="project__card__img"><a href="#"><img src="<?php echo IMAGE_URL .'/img_project.png' ?>" alt=""></a></div>
                    <div class="project__card__title"><a href="#">TRUNG TÂM THỂ DỤC THẨM MỸ CALIFORNIA</a></div>
                </div>
                <div class="project__card text-center m-b-10">
                    <div class="project__card__img"><a href="#"><img src="<?php echo IMAGE_URL .'/img_project.png' ?>" alt=""></a></div>
                    <div class="project__card__title"><a href="#">TRUNG TÂM THỂ DỤC THẨM MỸ CALIFORNIA</a></div>
                </div>
                <div class="project__card text-center m-b-10">
                    <div class="project__card__img"><a href="#"><img src="<?php echo IMAGE_URL .'/img_project_1.jpg' ?>" alt=""></a></div>
                    <div class="project__card__title"><a href="#">TRUNG TÂM THỂ DỤC THẨM MỸ CALIFORNIA</a></div>
                </div>
            </div>


        </div>
    </div>
</section>

<?php get_footer(); ?>
