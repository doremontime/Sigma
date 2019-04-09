<?php
/*
 * Third party plugins that hijack the theme will call wp_footer() to get the footer template.
 * We use this to end our output buffer (started in header.php) and render into the view/page-plugin.twig template.
 */
//use Timber\Timber;
//
//global $timberContext;
//if ( !isset( $timberContext ) ) {
//  throw new \Exception( 'Timber context not set in footer.' );
//}
//$timberContext['content'] = ob_get_contents();
//ob_end_clean();
//$templates = array( 'page-plugin.twig' );
//Timber::render( $templates, $timberContext );
?>

<footer class="footer">
    <div class="container footer__container dis-flex">
        <div class="footer__navigation">
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
        <div class="footer__social">
            <ul class="dis-flex">
                <li>
                    <a href="#"><img src="<?php echo IMAGE_URL .'/ic_fa.png' ?>" title="Facebook" alt="Facebook"></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo IMAGE_URL .'/ic_g.png' ?>" title="Google" alt="Google"></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo IMAGE_URL .'/ic_twitter.png' ?>" title="Twitter" alt="Twitter"></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo IMAGE_URL .'/ic_youtube.png' ?>" title="Youtube" alt="Youtube"></a>
                </li>
            </ul>
        </div>

    </div>
</footer> <!-- End #footer -->

<?php wp_footer(); ?>
</body>
</html>