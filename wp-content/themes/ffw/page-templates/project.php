<?php
/*
 * Template Name: Project
 * */
get_header();
?>

<section class="banner banner__page">
    <div class="banner__txt text-center">
        <h2 class="m-b-25">Dự án</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dự án</li>
            </ol>
        </nav>
    </div>
</section>

<section class="project project__remove__bg">
    <div class="container">
        <div class="row">
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

            <nav aria-label="..." class="text-center">
                <ul class="pagination pagination-lg">
                    <li class="page-item active">
                        <a class="page-link" href="#" tabindex="-1">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<?php get_footer(); ?>
