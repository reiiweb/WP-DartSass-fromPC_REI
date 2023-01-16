<?php get_header(); ?>
<main>

  <!-- メインビュー -->
  <div class="p-sub-mv">
    <div class="p-sub-mv__img">
      <img src="<?php echo get_theme_file_uri('assets/images/top/mv.jpg?ver=1.0.1'); ?>" alt="" />
    </div>
    <!-- PC,SPで画像切り替える場合 -->
    <!-- <picture class="p-sub-mv__img">
          <source
            srcset="<?php echo get_theme_file_uri('assets/images/top/mv_pc.jpg?ver=1.0.1'); ?>"
            media="(min-width: 768px)"
          />
          <img
            src="<?php echo get_theme_file_uri('assets/images/top/mv_sp.jpg?ver=1.0.1'); ?>"
            alt=""
          />
        </picture> -->
    <div class="p-sub-mv__content">
      <h2 class="p-sub-mv__title">サブタイトル</h2>
    </div>
  </div>
  <!-- ../メインビュー -->]

</main>
<?php get_footer(); ?>