<?php get_header(); ?>
<main>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="p-single">
                <div class="p-single__inner l-inner">

                    <!-- 投稿タイトル -->
                    <h1 class="p-single__title">
                        <?php the_title(); ?>
                    </h1>

                    <!-- 投稿日 -->
                    <time class="p-single__time" datetime="<?php the_time('Y-m-d'); ?>">
                        <?php the_time('Y.m.d'); ?>
                    </time>

                    <!-- 指定したカテゴリーのみ表示(投稿に含まれているもののみ：リンクあり) -->
                    <?php
                    $categories = get_the_category();
                    echo '<ul class="p-single__items">';
                    foreach ($categories as $category) {
                        if (!in_array($category->slug, array('表示したいカテゴリースラッグ', '表示したいカテゴリースラッグ')))
                            continue;
                        echo '<li class="p-single__item"><a href="' . get_category_link($category->cat_ID) . '">' . $category->name . '</a></li>';
                    }
                    echo '</ul>';
                    ?>

                    <!-- アイキャッチ -->
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="p-single__img">
                            <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                        </div>
                    <?php endif; ?>

                    <!-- 投稿本文 -->
                    <div class="p-single__content">
                        <?php the_content(); ?>
                    </div>

                </div>
            </article>

    <?php endwhile;
    endif; ?>

</main>
<?php get_footer(); ?>