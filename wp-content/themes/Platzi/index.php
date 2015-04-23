<?php get_header('landing'); ?>
<body>
<?php include TEMPLATEPATH . "/templates/nav.php" ?>
<header class="header">
    <h1><?php bloginfo('name'); ?></h1>
    <h2><?php bloginfo('description'); ?></h2>
</header>
<div class="sidebar">
<?php
    dynamic_sidebar('sidebar-header' );
 ?>
 </div>
<section class="container" role="main">
<header class="container__header">
    <h2>Últimas entradas</h2>
</header>
    <?php rewind_posts(); ?>
    <?php query_posts('cat=3&order=Asc'); ?>
    <?php include (TEMPLATEPATH . '/templates/the_loop.php'); ?>
 </section>

<?php
    dynamic_sidebar('sidebar-footer' );
 ?>
<?php get_footer('landing'); ?>