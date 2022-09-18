<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- FOT-TsukuARdGothic -->
  <script>
    (function(d) {
      var config = {
          kitId: 'hgp6gpt',
          scriptTimeout: 3000,
          async: true
        },
        h = d.documentElement,
        t = setTimeout(function() {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout),
        tk = d.createElement("script"),
        f = false,
        s = d.getElementsByTagName("script")[0],
        a;
      h.className += " wf-loading";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function() {
        a = this.readyState;
        if (f || a && a != "complete" && a != "loaded") return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {}
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>

  <?php wp_head(); ?>
</head>
<?php
$home = esc_url(home_url('/'));
$about = esc_url(home_url('#about'));
$valuable = esc_url(home_url('#valuable'));
$works = esc_url(home_url('#works'));
$flow = esc_url(home_url('#flow '));
$qa = esc_url(home_url('#qa'));
$contact = esc_url(home_url('#contact'));
?>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header p-header j-header">
    <div class="p-header__inner">
      <div class="p-header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo-bk.svg" width="233" height="33" alt="ロゴ"> </a></div>
      <nav class="p-header__pc-nav">
       <ul class="p-header__pc-nav-items">
          <li class="p-header__pc-nav-item">
              <a href="<?php echo $about ?>">私について</a>
          </li>
          <li class="p-header__pc-nav-item">
              <a href="<?php echo $valuable ?>">大切にしていること</a>
          </li>
          <li class="p-header__pc-nav-item">
              <a href="<?php echo $works ?>">制作実績</a>
          </li>
          <li class="p-header__pc-nav-item">
              <a href="<?php echo $flow  ?>">制作の流れ</a>
          </li>
          <li class="p-header__pc-nav-item">
              <a href="<?php echo $qa ?>">よくある質問</a>
          </li>
          <li class="p-header__pc-nav-item">
              <a href="<?php echo $qa ?>" class="c-btn-contact">Contact</a>
          </li>
       </ul>  
      </nav> 
     </div>
     <div class="hamburger-menus"></div>
      <a class="hamburger-menu menu">
        <span class="menu__line menu__line--top"></span>
        <span class="menu__line menu__line--center"></span>
        <span class="menu__line menu__line--bottom"></span>
    </a>
    <nav class="gnav">
        <div class="gnav__wrap">
            <ul class="gnav__menu">
                <li class="gnav__menu__item"><a href="<?php echo $about ?>">Web-Rootsについて</a></li>
                <li class="gnav__menu__item"><a href="<?php echo $valuable ?>">私が大切にしていること</a></li>
                <li class="gnav__menu__item"><a href="<?php echo $works ?>">制作実績</a></li>
                <li class="gnav__menu__item"><a href="<?php echo $flow  ?>">制作の流れ</a></li>
                <li class="gnav__menu__item"><a href="<?php echo $qa ?>">よくある質問</a></li>
                <li class="gnav__menu__item"><a href="<?php echo $qa ?>">お問い合わせ</a></li>
            </ul>
        </div>
    </nav>
    <div class="p-header_nav-background"></div>
 </header>