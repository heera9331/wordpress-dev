<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-title">
        <?php echo get_post_format($post->ID); ?>

    </header>
    <div class="entry-content">
        <?php // the_post_thumbnail(); ?> 
        <?php the_content(); ?> 
    </div>
</article>