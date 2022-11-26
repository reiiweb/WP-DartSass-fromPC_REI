<?php get_header(); ?>
<main>

    <article class="p-blog l-blog">
        <div class="p-blog__inner">

            <ul class="p-blog__items">
                <!-- メインループと表示件数が違う場合はサブループ -->
                <!-- 記事のループ処理開始 -->
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = [
                    'post_type' => 'blog', // カスタム投稿の投稿タイプスラッグ
                    'paged' => $paged, // ページネーションがある場合に必要
                    'posts_per_page' => 10, // 表示件数
                ];
                $wp_query = new WP_Query($args);
                if (have_posts()) : while (have_posts()) : the_post();
                ?>
                        <li class="p-blog__item">
                            <!-- 記事へのリンク -->
                            <a href="<?php the_permalink(); ?>">
                                <!-- アイキャッチ -->
                                <div class="p-blog__img">
                                    <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
                                </div>

                                <!-- 投稿日 -->
                                <time class="p-blog__date" datetime="<?php the_time('Y.n.j'); ?>">
                                    <?php the_time('Y.m.d'); ?>
                                </time>

                                <!-- カテゴリー(ターム)1つ表示 -->
                                <?php
                                $taxonomy_terms = get_the_terms($post->ID, 'タクソノミースラッグ');
                                if ($taxonomy_terms) {
                                    echo '<span>' . $taxonomy_terms[0]->name . '</span>';
                                }
                                ?>

                                <h2 class="p-blog__title">
                                    <!-- タイトル -->
                                    <?php the_title(); ?>
                                </h2>
                                <div class="p-blog__text">
                                    <!-- 本文の抜粋 -->
                                    <?php the_excerpt(); ?>
                                </div>
                            </a>
                        </li>
                    <?php endwhile;
                else : ?>
                <?php endif ?>
                <?php wp_reset_postdata(); ?>
                <!-- 記事のループ処理終了 -->
            </ul>

            <!-- ページナビ -->
            <div class="p-blog__pagenavi l-pagenavi">
                <?php wp_pagenavi(); ?>
            </div>

        </div>
    </article>

    </div>
    </article>

</main>
<?php get_footer(); ?>