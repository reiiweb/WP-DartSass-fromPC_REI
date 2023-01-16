<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="l-inner">
    <p class="p-test">変更のテスト</p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="c-btn">ボタン</a>
  </div>

  <header class="p-header <?php if (is_front_page()) {
                            echo 'l-header';
                          } else {
                            echo '';
                          } ?>">

    <div class="p-header__inner">

      <?php if (is_front_page()) {
        echo '<h1 class="p-header__logo">';
      } else {
        echo '<div class="p-header__logo">';
      } ?>
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_theme_file_uri('assets/images/common/logo.svg?ver=1.0.1'); ?>" alt="" />
      </a>
      <?php if (is_front_page()) {
        echo '</h1>';
      } else {
        echo '</div>';
      } ?>

      <!-- PCナビ -->
      <nav class="p-header__pc-nav p-pc-nav">
        <ul class="p-pc-nav__items">
          <li class="p-pc-nav__item"><a href="<?php echo esc_url(home_url('/')); ?>news">お知らせ</a></li>
          <li class="p-pc-nav__item"><a href="<?php echo esc_url(home_url('/')); ?>contact">お問い合わせ</a></li>
        </ul>
      </nav>
      <!-- ../PCナビ -->

      <div class="p-header__hamburger">
        <button type="button" id="js-hamburger" class="c-hamburger" aria-controls="js-sp-nav" aria-expanded="false" aria-label="メニューを開閉する">
          <span class="c-hamburger__line"></span>
        </button>
      </div>

      <!-- SPナビ -->
      <nav class="p-header__sp-nav p-sp-nav" id="js-sp-nav" aria-hidden="true">
        <ul class="p-sp-nav__items">
          <li class="p-sp-nav__item"><a href="<?php echo esc_url(home_url('/')); ?>news">お知らせ</a></li>
          <li class="p-sp-nav__item"><a href="<?php echo esc_url(home_url('/')); ?>contact">お問い合わせ</a></li>
        </ul>
      </nav>
      <!-- ../SPナビ -->
    </div>
  </header>