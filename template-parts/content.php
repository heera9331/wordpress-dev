<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h2><?php the_title(); ?></h2>
        <p> <strong> <?php esc_html__("Author: "); ?> - </strong> <?php the_author(); ?></p>
        <p> <strong> <?php esc_html__("Date: "); ?> - </strong> <?php the_date(); ?></p>
    </header>
    <div class="entry-content">
        <p>article into template-part/content-none.php</p>
    </div>
</article>