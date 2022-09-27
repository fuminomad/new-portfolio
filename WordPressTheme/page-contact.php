<?php get_header(); ?>
<div class="p-page-contact">
        <div class="p-page-contact-mv">
                <picture class="p-page-contact-mv__image">
                        <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/contact-mv.jpg" alt="横浜みなとみらいの画像" media="(min-width: 769px)" /><!-- 幅769px以上なら表示 -->
                        <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/page-contact-md.jpg" alt="横浜みなとみらいの画像" media="(min-width: 415px)" /><!-- 幅415px以上なら表示 -->
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/page-contact-sp.jpg" alt="横浜みなとみらいの画像">
                        <picture>
        </div>
        <div class="p-page-contact-texts">
                <h2 class="p-page-contact-texts__title p-contact__title">
                        Contact
                </h2>
                <div class="p-page-contact-text__texts">

                        <p class="p-page-contact-texts__text">
                                制作の依頼・ご相談などお気軽に<br class="is-md">お問い合わせくださいませ。
                        </p>
                        <p class="p-page-contact-texts__text">
                                下記フォームよりわかる範囲で<br class="is-md">ご記入ください。
                        </p>
                        <p class="p-page-contact-texts__text">
                                ※は必須項目ですので必ず<br class="is-md">ご記入お願いします。
                        </p>
                </div>
        </div>
        <div class="p-page-contact-forms">
                <div class="p-page-contact-form">
                        <?php echo do_shortcode('[contact-form-7 id="21" title="お問い合わせ"]'); ?>
                </div>

        </div>
</div>
<?php get_footer(); ?>