<?php get_header(); ?>

<h2>Hello working</h2>

<!-- content -->
</div>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php get_template_part('template-parts/content') ?>
        <?php get_template_part('template-parts/content', 'none') ?>
        <?php get_template_part('template-parts/content', 'gallary') ?>

        <?php get_sidebar('main-sidebar'); ?>
        <?php get_comment('main-sidebar'); ?>
    </main>
</div>
<h3>Template: index.php</h3>
<?php get_footer(); ?>
</body>

</html>