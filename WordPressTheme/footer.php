
<?php
$home = esc_url(home_url('/'));
$about = esc_url(home_url('/#about'));
$valuable = esc_url(home_url('/#valuable'));
$works = esc_url(home_url('/#works'));
$flow = esc_url(home_url('/#flow'));
$qa = esc_url(home_url('/#qa'));
$contact = esc_url(home_url('/#contact'));
?>
<footer class="l-footer p-footer">
    <div class="p-footer__inner">
        <div class="p-footer__wrapper">


            <div class="p-footer__logo">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-wt.svg" alt="" loading="lazy" width="264" height="48">
            </div>
            <nav class="p-footer__pc-nav">
                <ul class="p-footer__pc-nav-items">
                    <li class="p-footer__pc-nav-item">
                        <a href="<?php echo $about ?>">About</a>
                    </li>
                    <li class="p-footer__pc-nav-item">
                        <a href="<?php echo $valuable ?>">Valuable</a>
                    </li>
                    <li class="p-footer__pc-nav-item">
                        <a href="<?php echo $works ?>">Works</a>
                    </li>
                    <li class="p-footer__pc-nav-item">
                        <a href="<?php echo $flow  ?>">Flow</a>
                    </li>
                    <li class="p-footer__pc-nav-item">
                        <a href="<?php echo $qa ?>">Q&A</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="p-footer__copy-rights">
           <p class="p-footer__copy-right">
            ©︎ 2022 Web-Roots
           </p> 
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>