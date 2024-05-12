<?php get_header(); ?>

<h2>Hello working</h2>

<!-- content -->
</div>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php get_template_part('template-parts/content') ?>
        <?php get_template_part('template-parts/content', 'none') ?>

        <?php get_sidebar('main-sidebar'); ?>
    </main>
</div>
<!-- behave like a template/layout for single blog page -->
<h3>Template: single.php</h3>
<?php get_footer(); ?>
</body>

</html>