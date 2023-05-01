<?php get_header(); ?>

<h1><?php the_title(); ?></h1>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php else: ?>
        <p>お探しの記事は見つかりませんでした。<br />
    <?php endif; ?>

<?php get_footer(); ?>