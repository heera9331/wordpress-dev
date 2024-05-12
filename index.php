<?php get_header(); ?>

<h2>Hello working</h2>

<!-- content -->
</div>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h2>index.php</h2>
            </header>
            <div class="entry-content">
                <p></p>
            </div>
        </article>

        <?php get_sidebar('main-sidebar'); ?>
    </main>
</div>
<?php get_footer(); ?>
</body>

</html>