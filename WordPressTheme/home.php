<?php get_header(); ?>
<main>

    <article class="p-news l-news">
        <div class="p-news__inner l-inner">

            <ul class="p-news__items">
                <!-- 記事のループ処理開始 -->
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <li class="p-news__item">
                            <!-- 記事へのリンク -->
                            <a href="<?php the_permalink(); ?>">

                                <!-- アイキャッチ -->
                                <div class="p-news__img">
                                    <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                                </div>
                                <!-- 投稿日 -->
                                <time class="p-news__date" datetime="<?php the_time('Y.n.j'); ?>">
                                    <?php the_time('Y.m.d'); ?>
                                </time>

                                <!-- カテゴリー1件表示(カテゴリー順の上にある方が表示される) -->
                                <?php
                                $category = get_the_category();
                                echo '<span class="p-news__cat' . $category->slug . '">' . $category[0]->name . '</span>';
                                ?>

                                <h2 class="p-news__title">
                                    <!-- タイトル -->
                                    <?php the_title(); ?>
                                </h2>
                                <div class="p-news__text">
                                    <!-- 本文の抜粋 -->
                                    <?php the_excerpt(); ?>
                                </div>

                            </a>
                        </li>
                    <?php endwhile;
                else : ?>
                    <p>まだ記事がありません</p>
                <?php endif ?>
                <!-- 記事のループ処理終了 -->
            </ul>

            <!-- ページナビ -->
            <div class="p-news__pagenavi l-pagenavi">
                <?php wp_pagenavi(); ?>
            </div>

        </div>
    </article>

</main>
<?php get_footer(); ?>