<?php get_header(); ?>

<h2>Hello working</h2>

<!-- content -->
</div>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php // get_template_part('template-parts/content') ?>
        <?php get_template_part('template-parts/content', 'page') ?>

        <?php get_sidebar('main-sidebar'); ?>
    </main>
</div>
<h3>Template: singular.php</h3>

<?php get_footer(); ?>

</body>

</html>