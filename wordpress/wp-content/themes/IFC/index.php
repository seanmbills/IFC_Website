<?php get_header(); ?>

    <div class="container">
        <?php if (have_posts()): while(have_posts()): the_post(); ?>
            <p><?php the_content(); ?></p>
        <?php endwhile; else: ?>
            <p>Sorry, there are no posts to show at this time.</p>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>