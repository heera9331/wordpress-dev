<?php
if (!is_active_sidebar('main-sidebar')) {
    return;
}
?>
<aside id="secondary" class="widget-area" role="complementary">
    <h1>before dynamic sidebar</h1>
    <?php dynamic_sidebar('main-sidebar') ?>
</aside>